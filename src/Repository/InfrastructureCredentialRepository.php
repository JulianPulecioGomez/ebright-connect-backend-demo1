<?php

namespace App\Repository;

use App\Entity\InfrastructureCredential;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method InfrastructureCredential|null find($id, $lockMode = null, $lockVersion = null)
 * @method InfrastructureCredential|null findOneBy(array $criteria, array $orderBy = null)
 * @method InfrastructureCredential[]    findAll()
 * @method InfrastructureCredential[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InfrastructureCredentialRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, InfrastructureCredential::class);
    }

    // /**
    //  * @return InfrastructureCredential[] Returns an array of InfraestructureCredential objects
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
    public function findOneBySomeField($value): ?InfrastructureCredential
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
