<?php

namespace App\Repository;

use App\Entity\GreffeImmatriculation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method GreffeImmatriculation|null find($id, $lockMode = null, $lockVersion = null)
 * @method GreffeImmatriculation|null findOneBy(array $criteria, array $orderBy = null)
 * @method GreffeImmatriculation[]    findAll()
 * @method GreffeImmatriculation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GreffeImmatriculationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GreffeImmatriculation::class);
    }

    // /**
    //  * @return GreffeImmatriculation[] Returns an array of GreffeImmatriculation objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?GreffeImmatriculation
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
