<?php

namespace App\Repository;

use App\Entity\QualiteDirigeant;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method QualiteDirigeant|null find($id, $lockMode = null, $lockVersion = null)
 * @method QualiteDirigeant|null findOneBy(array $criteria, array $orderBy = null)
 * @method QualiteDirigeant[]    findAll()
 * @method QualiteDirigeant[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class QualiteDirigeantRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, QualiteDirigeant::class);
    }

    // /**
    //  * @return QualiteDirigeant[] Returns an array of QualiteDirigeant objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('q.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?QualiteDirigeant
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
