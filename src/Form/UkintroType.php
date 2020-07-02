<?php

namespace App\Form;

use App\Entity\Ukintro;
use App\Form\ImageType;
use App\Form\UkintroType;
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

class UkintroType extends ApplicationType
{


    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name',TextareaType::class,$this->getConfiguration('Nom',''))
            ->add('bio',TextareaType::class,$this->getConfiguration('Biographie',''))
            ->add('age',TextareaType::class,$this->getConfiguration('Age',''))
            ->add('height',TextareaType::class,$this->getConfiguration('Taille',''))
            ->add('address',TextareaType::class,$this->getConfiguration('Adresse',''))
            ->add('position',TextareaType::class,$this->getConfiguration('Poste',''))
            ->add('myproject',TextareaType::class,$this->getConfiguration('Projet',''))
            ->add('myprojectdetail',TextareaType::class,$this->getConfiguration('Details projet',''))
            ->add('dateprojet',TextareaType::class,$this->getConfiguration('Date projet',''))
            ->add('mytraining',TextareaType::class,$this->getConfiguration('Formation',''))
            ->add('mytrainingdetail',TextareaType::class,$this->getConfiguration('Details formation',''))
            ->add('tel',TextareaType::class,$this->getConfiguration('Téléphone',''))
            ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Ukintro::class,
        ]);
    }
}
