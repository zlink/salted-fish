<?php

namespace app\console;

use app\console\commands\HelloCommand;
use app\console\commands\ServiceCommand;
use Symfony\Component\Console\Application;

class Kernel
{
    protected $application;

    protected $commands = [
        HelloCommand::class,
        ServiceCommand::class,
    ];

    /**
     * Kernel constructor.
     * @param Application $appliction
     */
    public function __construct(Application $appliction)
    {
        $this->application = $appliction;

        $this->register();
    }

    /**
     * register commands
     */
    protected function register()
    {
        foreach ($this->commands as $command){
            $this->application->add(new $command);
        }
    }

    /**
     * execute command ...
     */
    public function run()
    {
        try {
            $this->application->run();
        } catch (\Exception $e) {
            //
        }
    }
}
