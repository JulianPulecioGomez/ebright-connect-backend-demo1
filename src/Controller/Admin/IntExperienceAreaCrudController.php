<?php

namespace App\Controller\Admin;

use App\Entity\IntExperienceArea;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class IntExperienceAreaCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return IntExperienceArea::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name'),
            TextEditorField::new('description'),
        ];
    }
}
