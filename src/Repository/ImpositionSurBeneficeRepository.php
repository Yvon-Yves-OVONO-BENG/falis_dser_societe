<?php

namespace App\Repository;

use App\Entity\ImpositionSurBenefice;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ImpositionSurBenefice|null find($id, $lockMode = null, $lockVersion = null)
 * @method ImpositionSurBenefice|null findOneBy(array $criteria, array $orderBy = null)
 * @method ImpositionSurBenefice[]    findAll()
 * @method ImpositionSurBenefice[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ImpositionSurBeneficeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ImpositionSurBenefice::class);
    }

    // /**
    //  * @return ImpositionSurBenefice[] Returns an array of ImpositionSurBenefice objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ImpositionSurBenefice
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
