<?php

namespace App\Repository;

use App\Entity\Ukeducation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Ukeducation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ukeducation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ukeducation[]    findAll()
 * @method Ukeducation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UkeducationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Ukeducation::class);
    }

    // /**
    //  * @return Ukeducation[] Returns an array of Ukeducation objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Ukeducation
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
