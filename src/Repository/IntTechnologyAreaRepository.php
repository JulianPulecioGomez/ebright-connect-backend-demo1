<?php

namespace App\Repository;

use App\Entity\IntTechnologyArea;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method IntTechnologyArea|null find($id, $lockMode = null, $lockVersion = null)
 * @method IntTechnologyArea|null findOneBy(array $criteria, array $orderBy = null)
 * @method IntTechnologyArea[]    findAll()
 * @method IntTechnologyArea[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class IntTechnologyAreaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, IntTechnologyArea::class);
    }

    // /**
    //  * @return IntTechnologyArea[] Returns an array of IntTechnologyArea objects
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
    public function findOneBySomeField($value): ?IntTechnologyArea
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
