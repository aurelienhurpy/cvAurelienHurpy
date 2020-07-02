<?php

namespace App\Repository;

use App\Entity\Ukexperience;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Ukexperience|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ukexperience|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ukexperience[]    findAll()
 * @method Ukexperience[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UkexperienceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Ukexperience::class);
    }

    // /**
    //  * @return Ukexperience[] Returns an array of Ukexperience objects
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
    public function findOneBySomeField($value): ?Ukexperience
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
