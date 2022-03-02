<?php

namespace App\Repository;

use App\Entity\SiegeSocial;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SiegeSocial|null find($id, $lockMode = null, $lockVersion = null)
 * @method SiegeSocial|null findOneBy(array $criteria, array $orderBy = null)
 * @method SiegeSocial[]    findAll()
 * @method SiegeSocial[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SiegeSocialRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SiegeSocial::class);
    }

    // /**
    //  * @return SiegeSocial[] Returns an array of SiegeSocial objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SiegeSocial
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
