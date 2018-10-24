<?php

namespace app\console\commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Created by PhpStorm.
 * User: danzel
 * Date: 2018/10/24
 * Time: 23:45
 */
class HelloCommand extends Command
{
    protected function configure()
    {
        $this->setName('hello')
            ->setDescription('say hello ....')
            ->setHelp('This command allows you to print hello in terminal...');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('hello ...');
    }


}