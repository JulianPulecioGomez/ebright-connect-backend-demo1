<?php

namespace App\Repository;

use App\Entity\SurveyQuestionTypeCategory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SurveyQuestionTypeCategory|null find($id, $lockMode = null, $lockVersion = null)
 * @method SurveyQuestionTypeCategory|null findOneBy(array $criteria, array $orderBy = null)
 * @method SurveyQuestionTypeCategory[]    findAll()
 * @method SurveyQuestionTypeCategory[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SurveyQuestionTypeCategoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SurveyQuestionTypeCategory::class);
    }

    // /**
    //  * @return SurveyQuestionTypeCategory[] Returns an array of SurveyQuestionTypeCategory objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SurveyQuestionTypeCategory
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
