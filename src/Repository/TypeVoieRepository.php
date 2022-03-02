<?php

namespace App\Repository;

use App\Entity\TypeVoie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TypeVoie|null find($id, $lockMode = null, $lockVersion = null)
 * @method TypeVoie|null findOneBy(array $criteria, array $orderBy = null)
 * @method TypeVoie[]    findAll()
 * @method TypeVoie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypeVoieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TypeVoie::class);
    }

    // /**
    //  * @return TypeVoie[] Returns an array of TypeVoie objects
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
    public function findOneBySomeField($value): ?TypeVoie
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
