<?php

namespace App\Repository;

use App\Entity\BannerType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method BannerType|null find($id, $lockMode = null, $lockVersion = null)
 * @method BannerType|null findOneBy(array $criteria, array $orderBy = null)
 * @method BannerType[]    findAll()
 * @method BannerType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BannerTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BannerType::class);
    }

    // /**
    //  * @return BannerType[] Returns an array of BannerType objects
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
    public function findOneBySomeField($value): ?BannerType
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
