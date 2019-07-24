<?php

namespace App\Form;

use App\Entity\Figure;
use App\Entity\GroupNumberFigure;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\All;
use Symfony\Component\Validator\Constraints\File;

class FigureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nameFigure', TextType::class, [
                'label' => false,
                'attr' => [
                    'placeholder' => 'nom de la figure']
            ])
            ->add('groupNumber', EntityType::class, [
                'class'=> GroupNumberFigure::class,
                'label'=>false,
                'choice_label' => 'number',
            ])
            ->add('content', TextType::class, [
                'label' => false,
                'attr' => [
                    'placeholder' => 'Cette figure est issue d\'un grab fait par eric mac',
                    'rows' => 20
                ]])
            ->add('imgFigure', FileType::class, [
                'label' => false,
                'mapped' => false,
                'constraints'=>new File([
                    'maxSize' => "1024k",
                    'mimeTypes' => ["image/jpeg", "image/png", "image/jpg"],
                    'mimeTypesMessage' => "Le Format de l'image n'est pas correct",
                    'maxSizeMessage' => "Le Taille de l'image n'est pas correct"
                ]),
                'required'=>false,
                'attr' => [
                    'placeholder' => 'Choisisser votre photo principal'
                ]])
            ->add('imgSecondary', FileType::class, [
                'label' => false,
                'mapped' => false,
                'multiple' => true,
                'required' => false,
                'constraints'=> array(
                    new All(array( new File([
                    'maxSize' => "1024k",
                    'mimeTypes' => ["image/jpeg", "image/png", "image/jpg"],
                    'mimeTypesMessage' => "Le Format de l'image n'est pas correct",
                    'maxSizeMessage' => "Le Taille de l'image n'est pas correct"
                    ])))),
                'attr' => [
                    'placeholder' => 'Choisisser les photos secondaires',
                ]])

            ->add('videos', CollectionType::class, [
                'label'=>false,
                'mapped'=>false,
                'entry_type' => UrlType::class,
                'entry_options' => ['label' => 'video'],
                'allow_add'=> true,
                'allow_delete'=>true,
             ]);
    }


    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Figure::class,
        ]);
    }
}
