<?php

namespace App\Command;

use App\Entity\Specialties;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class CompanyEmployeeCommand extends Command
{
    protected static $defaultName = 'company:employee';
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
        $this->setName('company:employee')
            ->setDescription('We can show skills by specialty')
            ->addArgument('arg1', InputArgument::OPTIONAL, 'Argument description');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $arg1 = $input->getArgument('arg1');
        if ($arg1) {
            $res = $this->em->getRepository(Specialties::class)->findOneBySpeciality($arg1);
            $str = '';
            foreach ($res->skillSpecialties as $skillSpecialty) {
                $str .= $skillSpecialty->skill->skill . PHP_EOL;
            }
            $io->success(sprintf('You may:' . PHP_EOL . '%s', $str));
        }
        return 0;
    }
}
