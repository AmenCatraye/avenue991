<?php

namespace App\Repository;

use App\Entity\FormaliteCourse;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method FormaliteCourse|null find($id, $lockMode = null, $lockVersion = null)
 * @method FormaliteCourse|null findOneBy(array $criteria, array $orderBy = null)
 * @method FormaliteCourse[]    findAll()
 * @method FormaliteCourse[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FormaliteCourseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FormaliteCourse::class);
    }

    // /**
    //  * @return FormaliteCourse[] Returns an array of FormaliteCourse objects
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
    public function findOneBySomeField($value): ?FormaliteCourse
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
