<?php

namespace App\Repository;

use App\Entity\SituationApprenantPeriode;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SituationApprenantPeriode|null find($id, $lockMode = null, $lockVersion = null)
 * @method SituationApprenantPeriode|null findOneBy(array $criteria, array $orderBy = null)
 * @method SituationApprenantPeriode[]    findAll()
 * @method SituationApprenantPeriode[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SituationApprenantPeriodeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SituationApprenantPeriode::class);
    }

    // /**
    //  * @return SituationApprenantPeriode[] Returns an array of SituationApprenantPeriode objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SituationApprenantPeriode
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
