<?php

namespace App\Form;

use App\Entity\Attributes;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AttributesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('logo')
            ->add('favicon')
            ->add('styleSheet')
            ->add('translationDomain')
            ->add('loginTitle')
            ->add('loginDescription')
            ->add('challengeText')
            ->add('viewChallengeText')
            ->add('terms')
            ->add('privacyLink')
            ->add('expoAreaVideo')
            ->add('expoAreaImageTitle')
            ->add('multiAudience')
            ->add('visibleRanking')
            ->add('eventRedemption')
            ->add('emailInfo')
            ->add('questionAudience')
            ->add('videoTutorial')
            ->add('premium')
            ->add('estimateParticipants')
            ->add('welcomeVideo')
            ->add('termFooter')
            ->add('htmlPageAccess')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Attributes::class,
        ]);
    }
}
