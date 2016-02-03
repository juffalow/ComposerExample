<?php

namespace bin;

$container = require __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\Console\Application;

$console = new Application('First Symfony Console Application', '0.1.0');

$console->addCommands(array(
    new \bin\command\AnagramCommand(),
    new \bin\command\PalindromeCommand()
));

$console->run();