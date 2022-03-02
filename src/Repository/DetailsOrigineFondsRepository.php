<?php

namespace App\Repository;

use App\Entity\DetailsOrigineFonds;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DetailsOrigineFonds|null find($id, $lockMode = null, $lockVersion = null)
 * @method DetailsOrigineFonds|null findOneBy(array $criteria, array $orderBy = null)
 * @method DetailsOrigineFonds[]    findAll()
 * @method DetailsOrigineFonds[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DetailsOrigineFondsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DetailsOrigineFonds::class);
    }

    // /**
    //  * @return DetailsOrigineFonds[] Returns an array of DetailsOrigineFonds objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DetailsOrigineFonds
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
