<?php

namespace App\Controller\Admin;

use App\Entity\RegisterType;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class RegisterTypeCrudController extends AbstractCrudController
{

    public static function getEntityFqcn(): string
    {
        return RegisterType::class;
    }
    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name'),
        ];
    }

}