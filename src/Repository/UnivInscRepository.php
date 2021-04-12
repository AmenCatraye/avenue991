<?php

namespace App\Repository;

use App\Entity\UnivInsc;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method UnivInsc|null find($id, $lockMode = null, $lockVersion = null)
 * @method UnivInsc|null findOneBy(array $criteria, array $orderBy = null)
 * @method UnivInsc[]    findAll()
 * @method UnivInsc[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UnivInscRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UnivInsc::class);
    }

    // /**
    //  * @return UnivInsc[] Returns an array of UnivInsc objects
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
    public function findOneBySomeField($value): ?UnivInsc
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
