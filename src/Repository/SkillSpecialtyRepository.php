<?php

namespace App\Repository;

use App\Entity\SkillSpecialty;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method SkillSpecialty|null find($id, $lockMode = null, $lockVersion = null)
 * @method SkillSpecialty|null findOneBy(array $criteria, array $orderBy = null)
 * @method SkillSpecialty[]    findAll()
 * @method SkillSpecialty[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SkillSpecialtyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SkillSpecialty::class);
    }
}
