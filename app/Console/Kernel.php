<?php

namespace App\Console;

use app\Console\Commands\HelloCommand;
use app\Console\Commands\ServiceCommand;
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
     * @param Application $application
     */
    public function __construct(Application $application)
    {
        $this->application = $application;

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
