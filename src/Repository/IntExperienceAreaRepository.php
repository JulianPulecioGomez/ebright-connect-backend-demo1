<?php

namespace App\Repository;

use App\Entity\IntExperienceArea;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method IntExperienceArea|null find($id, $lockMode = null, $lockVersion = null)
 * @method IntExperienceArea|null findOneBy(array $criteria, array $orderBy = null)
 * @method IntExperienceArea[]    findAll()
 * @method IntExperienceArea[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class IntExperienceAreaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, IntExperienceArea::class);
    }

    // /**
    //  * @return IntExperienceArea[] Returns an array of IntExperienceArea objects
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
    public function findOneBySomeField($value): ?IntExperienceArea
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
