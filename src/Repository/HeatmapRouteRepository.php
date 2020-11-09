<?php

namespace App\Repository;

use App\Entity\HeatmapRoute;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method HeatmapRoute|null find($id, $lockMode = null, $lockVersion = null)
 * @method HeatmapRoute|null findOneBy(array $criteria, array $orderBy = null)
 * @method HeatmapRoute[]    findAll()
 * @method HeatmapRoute[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HeatmapRouteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, HeatmapRoute::class);
    }

    // /**
    //  * @return HeatmapRoute[] Returns an array of HeatmapRoute objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('h.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?HeatmapRoute
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
