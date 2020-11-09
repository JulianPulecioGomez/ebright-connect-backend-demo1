<?php

namespace App\Repository;

use App\Entity\SurveyQuestionGroupType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SurveyQuestionGroupType|null find($id, $lockMode = null, $lockVersion = null)
 * @method SurveyQuestionGroupType|null findOneBy(array $criteria, array $orderBy = null)
 * @method SurveyQuestionGroupType[]    findAll()
 * @method SurveyQuestionGroupType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SurveyQuestionGroupTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SurveyQuestionGroupType::class);
    }

    // /**
    //  * @return SurveyQuestionGroupType[] Returns an array of SurveyQuestionGroupType objects
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
    public function findOneBySomeField($value): ?SurveyQuestionGroupType
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
