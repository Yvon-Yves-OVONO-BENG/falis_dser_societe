<?php

namespace App\Repository;

use App\Entity\Declarant;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Declarant|null find($id, $lockMode = null, $lockVersion = null)
 * @method Declarant|null findOneBy(array $criteria, array $orderBy = null)
 * @method Declarant[]    findAll()
 * @method Declarant[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DeclarantRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Declarant::class);
    }

    // /**
    //  * @return Declarant[] Returns an array of Declarant objects
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
    public function findOneBySomeField($value): ?Declarant
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
