<?php

namespace App\EventSubscriber;

use EasyCorp\Bundle\EasyAdminBundle\Event\AfterCrudActionEvent;
use EasyCorp\Bundle\EasyAdminBundle\Event\AfterEntityBuiltEvent;
use EasyCorp\Bundle\EasyAdminBundle\Event\BeforeCrudActionEvent;
use EasyCorp\Bundle\EasyAdminBundle\Event\BeforeEntityUpdatedEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class ToggleSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return [
            AfterCrudActionEvent::class => 'onPreToggle',
        ];
    }

    public function onPreToggle (AfterCrudActionEvent $event)
    {
       
    }
}
