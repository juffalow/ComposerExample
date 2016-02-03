<?php

namespace bin\command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use src\Palindrome;

/**
 * 
 */
class PalindromeCommand extends Command {
    protected function configure() {
        $this
            ->setName('palindrome')
            ->setDescription('Checks if string is palindrome or not')
            ->addArgument('string', InputArgument::REQUIRED, 'String to by checked')
            ->setHelp("A palindrome is a word, phrase, number, or other sequence of characters which reads the same backward or forward.\nLink : https://en.wikipedia.org/wiki/Palindrome")
        ;
    }
    
    protected function execute(InputInterface $input, OutputInterface $output) {
        $string = $input->getArgument('string');
        
        $palindrome = new Palindrome();
        
        if( $palindrome->check($string) ) {
            $output->writeln('This string is palindrome!');
        } else {
            $output->writeln('This string is not palindrome!');
        }
    }
}