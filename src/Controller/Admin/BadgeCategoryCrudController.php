<?php

namespace App\Controller\Admin;

use App\Entity\BadgeCategory;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

use EasyCorp\Bundle\EasyAdminBundle\Dto\SearchDto;
use EasyCorp\Bundle\EasyAdminBundle\Dto\EntityDto;
use EasyCorp\Bundle\EasyAdminBundle\Collection\FieldCollection;
use EasyCorp\Bundle\EasyAdminBundle\Collection\FilterCollection;
use Doctrine\ORM\QueryBuilder;
use EasyCorp\Bundle\EasyAdminBundle\Event\AfterCrudActionEvent;

class BadgeCategoryCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return BadgeCategory::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            AssociationField::new('badgesMasterId'),
            TextField::new('name'),
            BooleanField::new('status')->setTemplatePath('boolean.html.twig'),
        ];
    }

    public function createIndexQueryBuilder(SearchDto $searchDto, EntityDto $entityDto, FieldCollection $fields, FilterCollection $filters): QueryBuilder
    {
        $result = parent::createIndexQueryBuilder($searchDto, $entityDto,$fields, $filters);
        return $result->andWhere('entity.status = 1');
    }
}