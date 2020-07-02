<?php

namespace App\Repository;

use App\Entity\Ukintro;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Ukintro|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ukintro|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ukintro[]    findAll()
 * @method Ukintro[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UkintroRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Ukintro::class);
    }

    // /**
    //  * @return Ukintro[] Returns an array of Ukintro objects
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
    public function findOneBySomeField($value): ?Ukintro
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
