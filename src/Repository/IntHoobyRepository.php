<?php

namespace App\Repository;

use App\Entity\IntHooby;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method IntHooby|null find($id, $lockMode = null, $lockVersion = null)
 * @method IntHooby|null findOneBy(array $criteria, array $orderBy = null)
 * @method IntHooby[]    findAll()
 * @method IntHooby[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class IntHoobyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, IntHooby::class);
    }

    // /**
    //  * @return IntHooby[] Returns an array of IntHooby objects
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
    public function findOneBySomeField($value): ?IntHooby
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
