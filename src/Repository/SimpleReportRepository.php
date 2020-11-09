<?php

namespace App\Repository;

use App\Entity\SimpleReport;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SimpleReport|null find($id, $lockMode = null, $lockVersion = null)
 * @method SimpleReport|null findOneBy(array $criteria, array $orderBy = null)
 * @method SimpleReport[]    findAll()
 * @method SimpleReport[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SimpleReportRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SimpleReport::class);
    }

    // /**
    //  * @return SimpleReport[] Returns an array of SimpleReport objects
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
    public function findOneBySomeField($value): ?SimpleReport
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
