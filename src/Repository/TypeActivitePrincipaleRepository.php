<?php

namespace App\Repository;

use App\Entity\TypeActivitePrincipale;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TypeActivitePrincipale|null find($id, $lockMode = null, $lockVersion = null)
 * @method TypeActivitePrincipale|null findOneBy(array $criteria, array $orderBy = null)
 * @method TypeActivitePrincipale[]    findAll()
 * @method TypeActivitePrincipale[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypeActivitePrincipaleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TypeActivitePrincipale::class);
    }

    // /**
    //  * @return TypeActivitePrincipale[] Returns an array of TypeActivitePrincipale objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TypeActivitePrincipale
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
