<?php

namespace App\Controller\Admin;

use App\Entity\InfrastructureCredential;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

use EasyCorp\Bundle\EasyAdminBundle\Dto\SearchDto;
use EasyCorp\Bundle\EasyAdminBundle\Dto\EntityDto;
use EasyCorp\Bundle\EasyAdminBundle\Collection\FieldCollection;
use EasyCorp\Bundle\EasyAdminBundle\Collection\FilterCollection;
use Doctrine\ORM\QueryBuilder;


class InfrastructureCredentialCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return InfrastructureCredential::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            
            BooleanField::new('active')->setTemplatePath('boolean.html.twig'),
            TextField::new('apiKey'),
            TextEditorField::new('apiKeySecret'),
            TextEditorField::new('attributes'),
            TextEditorField::new('apiToken'),
            TextField::new('userAccount'),
            IntegerField::new('connectionLimit')
        ];
    }

    public function createIndexQueryBuilder(SearchDto $searchDto, EntityDto $entityDto, FieldCollection $fields, FilterCollection $filters): QueryBuilder
    {
        $result = parent::createIndexQueryBuilder($searchDto, $entityDto,$fields, $filters);
        return $result->andWhere('entity.active = 1');
    }
    
}
