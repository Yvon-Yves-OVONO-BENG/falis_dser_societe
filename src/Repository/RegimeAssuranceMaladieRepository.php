<?php

namespace App\Repository;

use App\Entity\RegimeAssuranceMaladie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method RegimeAssuranceMaladie|null find($id, $lockMode = null, $lockVersion = null)
 * @method RegimeAssuranceMaladie|null findOneBy(array $criteria, array $orderBy = null)
 * @method RegimeAssuranceMaladie[]    findAll()
 * @method RegimeAssuranceMaladie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RegimeAssuranceMaladieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RegimeAssuranceMaladie::class);
    }

    // /**
    //  * @return RegimeAssuranceMaladie[] Returns an array of RegimeAssuranceMaladie objects
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
    public function findOneBySomeField($value): ?RegimeAssuranceMaladie
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
