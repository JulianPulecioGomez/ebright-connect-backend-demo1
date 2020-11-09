<?php

namespace App\Repository;

use App\Entity\PointMaster;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PointMaster|null find($id, $lockMode = null, $lockVersion = null)
 * @method PointMaster|null findOneBy(array $criteria, array $orderBy = null)
 * @method PointMaster[]    findAll()
 * @method PointMaster[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PointMasterRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PointMaster::class);
    }

    // /**
    //  * @return PointMaster[] Returns an array of PointMaster objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PointMaster
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
