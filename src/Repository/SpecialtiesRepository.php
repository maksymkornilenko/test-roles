<?php

namespace App\Repository;

use App\Entity\Specialties;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Specialties|null find($id, $lockMode = null, $lockVersion = null)
 * @method Specialties|null findOneBy(array $criteria, array $orderBy = null)
 * @method Specialties[]    findAll()
 * @method Specialties[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SpecialtiesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Specialties::class);
    }

    /**
     * @return Specialties[] Returns an array of Specialties objects
     */
    public function checkSkill($role, $action)
    {
        return $this->createQueryBuilder('s')
            ->join('s.skillSpecialties', 'sks')
            ->join('sks.skill', 'sk')
            ->andWhere('s.specialty = :role')
            ->andWhere('sk.skill = :action')
            ->setParameter('role', $role)
            ->setParameter('action', $action)
            ->getQuery()
            ->getScalarResult();
    }


    public function findOneBySpeciality($value): ?Specialties
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.specialty = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult();
    }
}
