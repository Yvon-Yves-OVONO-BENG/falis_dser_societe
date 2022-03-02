<?php

namespace App\Repository;

use App\Entity\RegimeImpositionMatiereTVA;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method RegimeImpositionMatiereTVA|null find($id, $lockMode = null, $lockVersion = null)
 * @method RegimeImpositionMatiereTVA|null findOneBy(array $criteria, array $orderBy = null)
 * @method RegimeImpositionMatiereTVA[]    findAll()
 * @method RegimeImpositionMatiereTVA[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RegimeImpositionMatiereTVARepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RegimeImpositionMatiereTVA::class);
    }

    // /**
    //  * @return RegimeImpositionMatiereTVA[] Returns an array of RegimeImpositionMatiereTVA objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?RegimeImpositionMatiereTVA
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
