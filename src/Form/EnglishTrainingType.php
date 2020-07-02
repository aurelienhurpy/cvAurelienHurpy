<?php

namespace App\Form;

use App\Form\ImageType;
use App\Entity\Ukeducation;
use App\Form\EnglishTrainingType;
use App\Form\ApplicationType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class EnglishTrainingType extends ApplicationType
{


    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title',TextareaType::class,$this->getConfiguration('Titre','Insérer un titre'))
            ->add('localisation',TextareaType::class,$this->getConfiguration('lieu','Insérer un titre'))
            ->add('date',TextareaType::class,$this->getConfiguration('dates','Insérer un titre'))
            ->add('content',TextareaType::class,$this->getConfiguration('Contenu','Insérer un contenu'))
            ->add('content2',TextareaType::class,$this->getConfiguration('Contenu','Insérer un contenu'))
            ->add('content3',TextareaType::class,$this->getConfiguration('Contenu','Insérer un contenu'))
            ->add('content4',TextareaType::class,$this->getConfiguration('Contenu','Insérer un contenu'))
            ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Ukeducation::class,
        ]);
    }
}