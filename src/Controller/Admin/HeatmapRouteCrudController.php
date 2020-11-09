<?php

namespace App\Controller\Admin;

use App\Entity\HeatmapRoute;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class HeatmapRouteCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return HeatmapRoute::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            
            AssociationField::new('heatmapId'),
            TextField::new('route'),
            TextEditorField::new('description'),
        ];
    }
}
