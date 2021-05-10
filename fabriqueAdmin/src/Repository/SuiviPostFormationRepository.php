<?php

namespace App\Repository;

use App\Entity\SuiviPostFormation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SuiviPostFormation|null find($id, $lockMode = null, $lockVersion = null)
 * @method SuiviPostFormation|null findOneBy(array $criteria, array $orderBy = null)
 * @method SuiviPostFormation[]    findAll()
 * @method SuiviPostFormation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SuiviPostFormationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SuiviPostFormation::class);
    }

    // /**
    //  * @return SuiviPostFormation[] Returns an array of SuiviPostFormation objects
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
    public function findOneBySomeField($value): ?SuiviPostFormation
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
