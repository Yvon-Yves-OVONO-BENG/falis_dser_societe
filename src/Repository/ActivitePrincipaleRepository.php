<?php

namespace App\Repository;

use App\Entity\ActivitePrincipale;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ActivitePrincipale|null find($id, $lockMode = null, $lockVersion = null)
 * @method ActivitePrincipale|null findOneBy(array $criteria, array $orderBy = null)
 * @method ActivitePrincipale[]    findAll()
 * @method ActivitePrincipale[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ActivitePrincipaleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ActivitePrincipale::class);
    }

    // /**
    //  * @return ActivitePrincipale[] Returns an array of ActivitePrincipale objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ActivitePrincipale
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
