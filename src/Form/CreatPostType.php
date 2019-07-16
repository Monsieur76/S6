<?php

namespace App\Form;

use App\Entity\Figure;
use App\Entity\Figure;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\All;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\Url;

class CreatPostType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', null, [
                'label' => false,
                'attr' => [
                    'placeholder' => 'nom de la figure']
            ])
            ->add('groupFig', ChoiceType::class, [
                'choices' => [
                    'groupe1' => 'groupe1',
                    'groupe2' => 'groupe2',
                    'groupe3' => 'groupe3',
                    'groupe4' => 'groupe4',
                    'groupe5' => 'groupe5',
                ],
                'label' => false
            ])
            ->add('content', null, [
                'label' => false,
                'attr' => [
                    'placeholder' => 'Cette figure est issue d\'un grab fait par eric mac',
                    'rows' => 20
                ]])
            ->add('figure', FileType::class, [
                'label' => false,
                'mapped' => false,
                'constraints'=>new File([
                    'maxSize' => "1024k",
                    'mimeTypes' => ["image/jpeg", "image/png", "image/jpg"],
                    'mimeTypesMessage' => "Le Format de l'image n'est pas correct",
                    'maxSizeMessage' => "Le Taille de l'image n'est pas correct"
                ]),
                'attr' => [
                    'placeholder' => 'Choisisser votre photo principal'
                ]])
            ->add('figures', FileType::class, [
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
            'entry_type' => LienType::class,
            'entry_options' => ['label' => 'video'],
                'allow_add'=> true,
             ]);

//            ->add('lien1', UrlType::class, [
//                'label' => 'Ajouté une vidéo (max 3)',
//                'mapped' => false,
//                'required' => false,
//                'constraints'=> new Url()
//            ])
//            ->add('lien2', UrlType::class, [
//                'label' => false,
//                'mapped' => false,
//                'required' => false,
//                'constraints'=> new Url()
//            ])
//            ->add('lien3', UrlType::class, [
//                'label' => false,
//                'mapped' => false,
//                'required' => false,
//                'constraints'=> new Url()
//            ]);

    }


    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Figure::class, Figure::class,
        ]);
    }
}
