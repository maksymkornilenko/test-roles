<?php

namespace App\Command;

use App\Entity\Specialties;
use App\Entity\versionOOP\UserRole;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class EmployeeCanCommand extends Command
{
    protected static $defaultName = 'employee:can';
    private $em;

    /**
     * CompanyEmployeeCommand constructor.
     * @param EntityManagerInterface $em
     */
    public function __construct(EntityManagerInterface $em)
    {
        parent::__construct();
        $this->em = $em;
    }

    protected function configure()
    {
        $this
            ->setDescription('Add a short description for your command')
            ->addArgument('arg1', InputArgument::OPTIONAL, 'Argument description')
            ->addArgument('arg2', InputArgument::OPTIONAL, 'Argument description')
            ->addOption('option1', null, InputOption::VALUE_NONE, 'Option description');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $arg1 = $input->getArgument('arg1');
        $arg2 = $input->getArgument('arg2');

        if ($arg1 && $arg2) {
//            $checkSkill = $this->em->getRepository(Specialties::class)->checkSkill($arg1, $arg2);
//            if (!empty($checkSkill)) {
//                $io->success('true');
//            } else {
//                $io->error('false');
//            }
            $model= new UserRole((string) $arg1, (string) $arg2);
            if ($model->show()==true){
                $io->success('true');
            }else{
                $io->error('false');

            }

        }
        return 0;
    }
}
