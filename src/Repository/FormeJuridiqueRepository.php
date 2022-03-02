<?php

namespace App\Repository;

use App\Entity\FormeJuridique;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method FormeJuridique|null find($id, $lockMode = null, $lockVersion = null)
 * @method FormeJuridique|null findOneBy(array $criteria, array $orderBy = null)
 * @method FormeJuridique[]    findAll()
 * @method FormeJuridique[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FormeJuridiqueRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FormeJuridique::class);
    }

    // /**
    //  * @return FormeJuridique[] Returns an array of FormeJuridique objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?FormeJuridique
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
