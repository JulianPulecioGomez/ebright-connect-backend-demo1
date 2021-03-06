<?php

namespace App\Repository;

use App\Entity\AssetsType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AssetsType|null find($id, $lockMode = null, $lockVersion = null)
 * @method AssetsType|null findOneBy(array $criteria, array $orderBy = null)
 * @method AssetsType[]    findAll()
 * @method AssetsType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AssetsTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AssetsType::class);
    }

    // /**
    //  * @return AssetsType[] Returns an array of AssetsType objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AssetsType
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
