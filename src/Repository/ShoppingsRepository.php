<?php

namespace App\Repository;

use App\Entity\Shoppings;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Shoppings|null find($id, $lockMode = null, $lockVersion = null)
 * @method Shoppings|null findOneBy(array $criteria, array $orderBy = null)
 * @method Shoppings[]    findAll()
 * @method Shoppings[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ShoppingsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Shoppings::class);
    }

    // /**
    //  * @return Shoppings[] Returns an array of Shoppings objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Shoppings
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
