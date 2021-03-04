<?php

namespace App\Repository;

use App\Entity\CommandeOcaz;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CommandeOcaz|null find($id, $lockMode = null, $lockVersion = null)
 * @method CommandeOcaz|null findOneBy(array $criteria, array $orderBy = null)
 * @method CommandeOcaz[]    findAll()
 * @method CommandeOcaz[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CommandeOcazRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CommandeOcaz::class);
    }

    // /**
    //  * @return CommandeOcaz[] Returns an array of CommandeOcaz objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CommandeOcaz
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
