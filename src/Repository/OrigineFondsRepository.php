<?php

namespace App\Repository;

use App\Entity\OrigineFonds;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method OrigineFonds|null find($id, $lockMode = null, $lockVersion = null)
 * @method OrigineFonds|null findOneBy(array $criteria, array $orderBy = null)
 * @method OrigineFonds[]    findAll()
 * @method OrigineFonds[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OrigineFondsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OrigineFonds::class);
    }

    // /**
    //  * @return OrigineFonds[] Returns an array of OrigineFonds objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?OrigineFonds
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
