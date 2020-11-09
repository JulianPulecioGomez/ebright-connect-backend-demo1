<?php

namespace App\Controller\Admin;

use App\Entity\Heatmap;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class HeatmapCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Heatmap::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('defaultName'),
        ];
    }
}
