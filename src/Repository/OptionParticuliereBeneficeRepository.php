<?php

namespace App\Repository;

use App\Entity\OptionParticuliereBenefice;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method OptionParticuliereBenefice|null find($id, $lockMode = null, $lockVersion = null)
 * @method OptionParticuliereBenefice|null findOneBy(array $criteria, array $orderBy = null)
 * @method OptionParticuliereBenefice[]    findAll()
 * @method OptionParticuliereBenefice[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OptionParticuliereBeneficeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OptionParticuliereBenefice::class);
    }

    // /**
    //  * @return OptionParticuliereBenefice[] Returns an array of OptionParticuliereBenefice objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?OptionParticuliereBenefice
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
