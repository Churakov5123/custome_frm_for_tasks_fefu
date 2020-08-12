<?php


namespace App\Command;

use App\Model\Task;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Application;
use App\Helpers\helpers;

/**
 * Class InsertJsonToDbCommand
 * @package App\Command
 * Консольная команда по импорту  json из фаила в базу данных
 */
class PrintNameFromDbCommand extends Command
{
// the name of the command (the part after "bin/console")
    protected static $defaultName = 'app:print-name-from-db';

    protected function configure()
    {
        $this->setDescription('Print name from Db');
    }

    protected function execute(InputInterface $input, OutputInterface $output)

    {
        $start = microtime(true);

        $items = Task::all()->jsonSerialize();

        $output->writeln('Выводим список меню ........');

        helpers::printNames($items);

        $output->writeln('Start data  name'
            . date('Y-m-d H:i:s')
            . ' on '
            . round(microtime(true) - $start, 2));
        return Command::SUCCESS;
    }

}