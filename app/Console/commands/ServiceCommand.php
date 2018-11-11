<?php

namespace App\Console\Commands;

use app\Services\GreetingService;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ServiceCommand extends Command
{
    protected function configure()
    {
        $this->setName('service');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $info = GreetingService::say('allen');

        $output->writeln($info);
    }


}