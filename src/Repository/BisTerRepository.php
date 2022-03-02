<?php

namespace App\Repository;

use App\Entity\BisTer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method BisTer|null find($id, $lockMode = null, $lockVersion = null)
 * @method BisTer|null findOneBy(array $criteria, array $orderBy = null)
 * @method BisTer[]    findAll()
 * @method BisTer[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BisTerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BisTer::class);
    }

    // /**
    //  * @return BisTer[] Returns an array of BisTer objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?BisTer
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
