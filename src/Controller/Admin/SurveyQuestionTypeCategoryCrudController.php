<?php

namespace App\Controller\Admin;

use App\Entity\SurveyQuestionTypeCategory;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class SurveyQuestionTypeCategoryCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return SurveyQuestionTypeCategory::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name'),
            TextEditorField::new('description'),
        ];
    }
}
