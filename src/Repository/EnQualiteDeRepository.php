<?php

namespace App\Repository;

use App\Entity\EnQualiteDe;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method EnQualiteDe|null find($id, $lockMode = null, $lockVersion = null)
 * @method EnQualiteDe|null findOneBy(array $criteria, array $orderBy = null)
 * @method EnQualiteDe[]    findAll()
 * @method EnQualiteDe[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EnQualiteDeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EnQualiteDe::class);
    }

    // /**
    //  * @return EnQualiteDe[] Returns an array of EnQualiteDe objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?EnQualiteDe
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
