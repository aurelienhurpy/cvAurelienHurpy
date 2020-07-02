<?php

namespace App\Form;

use App\Entity\Ukproject;
use App\Form\ImageType;
use App\Form\EnglishProjectType;
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

class EnglishProjectType extends ApplicationType
{


    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title',TextareaType::class,$this->getConfiguration('Contenu','Insérer un contenu'))
            ->add('paragraph1',TextareaType::class,$this->getConfiguration('Contenu','Insérer un contenu'))
            ->add('paragraph2',TextareaType::class,$this->getConfiguration('Contenu','Insérer un contenu'))
            ->add('paragraph3',TextareaType::class,$this->getConfiguration('Contenu','Insérer un contenu'))
            ->add('paragraph4',TextareaType::class,$this->getConfiguration('Contenu','Insérer un contenu'))
            ->add('paragraph5',TextareaType::class,$this->getConfiguration('Contenu','Insérer un contenu'))
            ->add('paragraph6',TextareaType::class,$this->getConfiguration('Contenu','Insérer un contenu'))
            ->add('paragraph7',TextareaType::class,$this->getConfiguration('Contenu','Insérer un contenu'))
            ->add('paragraph8',TextareaType::class,$this->getConfiguration('Contenu','Insérer un contenu'))
            ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Ukproject::class,
        ]);
    }
}