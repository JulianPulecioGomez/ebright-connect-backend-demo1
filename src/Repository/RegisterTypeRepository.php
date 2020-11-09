<?php

namespace App\Repository;

use App\Entity\RegisterType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method RegisterType|null find($id, $lockMode = null, $lockVersion = null)
 * @method RegisterType|null findOneBy(array $criteria, array $orderBy = null)
 * @method RegisterType[]    findAll()
 * @method RegisterType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RegisterTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RegisterType::class);
    }

    // /**
    //  * @return RegisterType[] Returns an array of RegisterType objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?RegisterType
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
