<?php

namespace App\Controller\Admin;

use App\Entity\AssetsType;
use App\Entity\Attributes;
use App\Entity\BadgeCategory;
use App\Entity\BadgeMaster;
use App\Entity\BannerType;
use App\Entity\Client;
use App\Entity\Country;
use App\Entity\Group;
use App\Entity\Heatmap;
use App\Entity\HeatmapRoute;
use App\Entity\Infrastructure;
use App\Entity\InfrastructureCredential;
use App\Entity\IntEntretaiment;
use App\Entity\IntExperienceArea;
use App\Entity\IntFitnessSports;
use App\Entity\IntHealthNutrition;
use App\Entity\IntTechnologyArea;
use App\Entity\Language;
use App\Entity\PointMaster;
use App\Entity\Profile;
use App\Entity\RegisterType;
use App\Entity\SimpleReport;
use App\Entity\SurveyQuestionGroupType;
use App\Entity\SurveyQuestionType;
use App\Entity\SurveyQuestionTypeCategory;
use App\Entity\SurveyType;
use App\Entity\UserStatus;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\CrudUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        // redirect to some CRUD controller
        $routeBuilder = $this->get(CrudUrlGenerator::class)->build();
        return $this->redirect($routeBuilder->setController(RegisterTypeCrudController::class)->generateUrl());
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Ebright Connect Backend Demo');
    }

    public function configureMenuItems(): iterable
    {
        return [

            MenuItem::subMenu('Master Tables⠀⠀⠀', 'fa fa-home')->setSubItems([

                MenuItem::linkToCrud('Register Type', 'fa fa-home', RegisterType::class),
                MenuItem::linkToCrud('Group', 'fa fa-home', Group::class),
                MenuItem::linkToCrud('Language', 'fa fa-home', Language::class),
                MenuItem::linkToCrud('Profile', 'fa fa-home', Profile::class),
                MenuItem::linkToCrud('Banner Type', 'fa fa-home', BannerType::class),
                MenuItem::linkToCrud('Bage Master', 'fa fa-home', BadgeMaster::class),
                MenuItem::linkToCrud('Bage Category', 'fa fa-home', BadgeCategory::class),
                MenuItem::linkToCrud('PointMaster', 'fa fa-home', PointMaster::class),
                MenuItem::linkToCrud('Survey Type', 'fa fa-home', SurveyType::class),
                MenuItem::linkToCrud('Survey Question Type', 'fa fa-home', SurveyQuestionType::class),
                MenuItem::linkToCrud('Survey Question Type Category', 'fa fa-home', SurveyQuestionTypeCategory::class),
                MenuItem::linkToCrud('Survey Question Group', 'fa fa-home', SurveyQuestionGroupType::class),
                MenuItem::linkToCrud('Assets Type', 'fa fa-home', AssetsType::class),
                MenuItem::linkToCrud('Infrastructure', 'fa fa-home', Infrastructure::class),
                MenuItem::linkToCrud('Infrastructure Credentials', 'fa fa-home', InfrastructureCredential::class),
                MenuItem::linkToCrud('Country', 'fa fa-home', Country::class),
                MenuItem::linkToCrud('Int Entretaiment', 'fa fa-home', IntEntretaiment::class),
                MenuItem::linkToCrud('Int Experience Area', 'fa fa-home', IntExperienceArea::class),
                MenuItem::linkToCrud('Int Fitness Soprt', 'fa fa-home', IntFitnessSports::class),
                MenuItem::linkToCrud('Int Healt Nutrition', 'fa fa-home', IntHealthNutrition::class),
                MenuItem::linkToCrud('Int Hobby', 'fa fa-home', IntHealthNutrition::class),
                MenuItem::linkToCrud('Int Technology Area', 'fa fa-home', IntTechnologyArea::class),
                MenuItem::linkToCrud('UserStatus', 'fa fa-home', UserStatus::class),
                MenuItem::linkToCrud('Heathmap', 'fa fa-home', Heatmap::class),
                MenuItem::linkToCrud('Heathmap Route', 'fa fa-home', HeatmapRoute::class),
                MenuItem::linkToCrud('Simple Report', 'fa fa-home', SimpleReport::class),                
            ]),

            MenuItem::subMenu('Event⠀⠀⠀', 'fa fa-home')->setSubItems([
                MenuItem::linkToCrud('Client', 'fa fa-home', Client::class),
                MenuItem::linkToCrud('Attributes', 'fa fa-home', Attributes::class),
            ])
        ];
    }
}
