<?php

require __DIR__ . '\.\vendor\autoload.php';

use Symfony\Component\Console\Application;
use App\Command\PrintNameFromDbCommand;

$application = new  Symfony\Component\Console\Application();
$application->add(new PrintNameFromDbCommand());
$application->run();
