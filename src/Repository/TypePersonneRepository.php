<?php

namespace App\Repository;

use App\Entity\TypePersonne;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TypePersonne|null find($id, $lockMode = null, $lockVersion = null)
 * @method TypePersonne|null findOneBy(array $criteria, array $orderBy = null)
 * @method TypePersonne[]    findAll()
 * @method TypePersonne[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypePersonneRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TypePersonne::class);
    }

    // /**
    //  * @return TypePersonne[] Returns an array of TypePersonne objects
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
    public function findOneBySomeField($value): ?TypePersonne
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
