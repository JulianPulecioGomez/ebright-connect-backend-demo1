<?php

namespace App\Repository;

use App\Entity\BadgeMaster;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method BadgeMaster|null find($id, $lockMode = null, $lockVersion = null)
 * @method BadgeMaster|null findOneBy(array $criteria, array $orderBy = null)
 * @method BadgeMaster[]    findAll()
 * @method BadgeMaster[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BadgeMasterRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BadgeMaster::class);
    }

    // /**
    //  * @return BadgeMaster[] Returns an array of BadgeMaster objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?BadgeMaster
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
