<?php
/**
 * Class/file HelloCommand.php
 *
 * @author John Pluto Solutions <john@pluto.solutions>
 * Date: 2/16/2019
 * Time: 9:29 PM
 */

namespace App\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

class HelloCommand extends Command
{
    protected function configure()
    {
        $this->setName('hello')
            ->setDescription('Prints Hello!')
            ->setHelp('Test Hello Command')
            ->addArgument('username', InputArgument::REQUIRED, 'Pass the username.');
    }
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln(sprintf('Hello !, %s', $input->getArgument('username')));
    }
}
