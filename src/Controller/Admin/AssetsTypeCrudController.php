<?php

namespace App\Controller\Admin;

use App\Entity\AssetsType;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class AssetsTypeCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return AssetsType::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            
            TextField::new('name'),
            TextField::new('visibilityForm'),
        ];
    }
}
