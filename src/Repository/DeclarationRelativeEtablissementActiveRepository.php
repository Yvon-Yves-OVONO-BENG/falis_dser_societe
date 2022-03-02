<?php

namespace App\Repository;

use App\Entity\DeclarationRelativeEtablissementActive;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DeclarationRelativeEtablissementActive|null find($id, $lockMode = null, $lockVersion = null)
 * @method DeclarationRelativeEtablissementActive|null findOneBy(array $criteria, array $orderBy = null)
 * @method DeclarationRelativeEtablissementActive[]    findAll()
 * @method DeclarationRelativeEtablissementActive[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DeclarationRelativeEtablissementActiveRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DeclarationRelativeEtablissementActive::class);
    }

    // /**
    //  * @return DeclarationRelativeEtablissementActive[] Returns an array of DeclarationRelativeEtablissementActive objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DeclarationRelativeEtablissementActive
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
