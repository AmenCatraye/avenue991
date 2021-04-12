<?php

namespace App\Repository;

use App\Entity\InscriptionUniv;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method InscriptionUniv|null find($id, $lockMode = null, $lockVersion = null)
 * @method InscriptionUniv|null findOneBy(array $criteria, array $orderBy = null)
 * @method InscriptionUniv[]    findAll()
 * @method InscriptionUniv[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InscriptionUnivRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, InscriptionUniv::class);
    }

    // /**
    //  * @return InscriptionUniv[] Returns an array of InscriptionUniv objects
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
    public function findOneBySomeField($value): ?InscriptionUniv
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
