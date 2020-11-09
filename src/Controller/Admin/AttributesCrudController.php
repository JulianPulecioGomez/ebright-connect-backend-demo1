<?php

namespace App\Controller\Admin;

use App\Entity\Attributes;
use App\Form\AttributesType;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Context\AdminContext;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class AttributesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Attributes::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud->overrideTemplate('crud/new', 'attributes.html.twig');
    }  

    public function configureActions(Actions $actions): Actions
    {
        return $actions->remove(Crud::PAGE_INDEX, Action::DELETE);
        // $viewInvoice = Action::new('viewInvoice','Invoice','fa fa-file.invoice')
        //     ->linkToCrudAction('new')
        //     ->setTemplatePath('attributes.html.twig');
        // return $actions->add(Crud::PAGE_INDEX, $viewInvoice);
    }
    
    
    public function configureFields(string $pageName): iterable
    {
        return [
            
            TextField::new('logo'),
            TextField::new('favicon'),
            TextField::new('styleSheet'),
            TextField::new('translationDomain'),

            TextareaField::new('loginTitle')->onlyOnForms(),
            TextareaField::new('loginDescription')->onlyOnForms(),
            TextField::new('challengeText')->onlyOnForms(),
            TextField::new('viewChallengeText')->onlyOnForms(),
            TextareaField::new('terms')->onlyOnForms(),
            TextField::new('privacyLink')->onlyOnForms(),
            TextareaField::new('expoAreaVideo')->onlyOnForms(),
            TextareaField::new('expoAreaImageTitle')->onlyOnForms(),
            BooleanField::new('multiAudience')->onlyOnForms(),
            BooleanField::new('visibleRanking')->onlyOnForms(),
            BooleanField::new('eventRedemption')->onlyOnForms(),
            TextField::new('emailInfo')->onlyOnForms(),
            TextField::new('questionAudience')->onlyOnForms(),
            TextField::new('videoTutorial')->onlyOnForms(),
            BooleanField::new('premium')->onlyOnForms(),
            IntegerField::new('estimateParticipants')->onlyOnForms(),
            TextField::new('welcomeVideo')->onlyOnForms(),
            TextField::new('termFooter')->onlyOnForms(),
            TextField::new('htmlPageAccess')->onlyOnForms(),
        ];
    }
    
    
}
