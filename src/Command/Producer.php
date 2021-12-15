<?php

namespace Pcelta\KafkaPlayground\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Producer extends Command
{
    protected static $defaultName = 'producer:run';

    protected function configure(): void
    {
        // ...
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->write('You are about to IHHHHHHHHHHHH');
        return Command::SUCCESS;
    }
}