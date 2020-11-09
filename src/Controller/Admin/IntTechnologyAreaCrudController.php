<?php

namespace App\Controller\Admin;

use App\Entity\IntTechnologyArea;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class IntTechnologyAreaCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return IntTechnologyArea::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name'),
            TextEditorField::new('description'),
        ];
    }
}
