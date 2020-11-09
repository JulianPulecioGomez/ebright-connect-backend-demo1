<?php

namespace App\Repository;

use App\Entity\IntHealthNutrition;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method IntHealthNutrition|null find($id, $lockMode = null, $lockVersion = null)
 * @method IntHealthNutrition|null findOneBy(array $criteria, array $orderBy = null)
 * @method IntHealthNutrition[]    findAll()
 * @method IntHealthNutrition[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class IntHealthNutritionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, IntHealthNutrition::class);
    }

    // /**
    //  * @return IntHealthNutrition[] Returns an array of IntHealthNutrition objects
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
    public function findOneBySomeField($value): ?IntHealthNutrition
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
