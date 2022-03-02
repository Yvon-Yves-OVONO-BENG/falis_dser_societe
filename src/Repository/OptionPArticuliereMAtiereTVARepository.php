<?php

namespace App\Repository;

use App\Entity\OptionPArticuliereMAtiereTVA;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method OptionPArticuliereMAtiereTVA|null find($id, $lockMode = null, $lockVersion = null)
 * @method OptionPArticuliereMAtiereTVA|null findOneBy(array $criteria, array $orderBy = null)
 * @method OptionPArticuliereMAtiereTVA[]    findAll()
 * @method OptionPArticuliereMAtiereTVA[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OptionPArticuliereMAtiereTVARepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OptionPArticuliereMAtiereTVA::class);
    }

    // /**
    //  * @return OptionPArticuliereMAtiereTVA[] Returns an array of OptionPArticuliereMAtiereTVA objects
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
    public function findOneBySomeField($value): ?OptionPArticuliereMAtiereTVA
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
