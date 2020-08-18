<?php

namespace App\Repository;

use App\Entity\Skills;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Skills|null find($id, $lockMode = null, $lockVersion = null)
 * @method Skills|null findOneBy(array $criteria, array $orderBy = null)
 * @method Skills[]    findAll()
 * @method Skills[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SkillsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Skills::class);
    }
}
