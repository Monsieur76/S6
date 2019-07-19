<?php

namespace App\Form;

use App\Entity\Figure;
use App\Entity\Img;
use Doctrine\DBAL\Types\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\All;
use Symfony\Component\Validator\Constraints\File;

class CreatFigureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nameFigure', TextType::class, [
                'label' => false,
                'attr' => [
                    'placeholder' => 'nom de la figure']
            ])
            ->add('groupNumber', ChoiceType::class, [
                'choices' => [
                    'groupe1' => 1,
                    'groupe2' => 2,
                    'groupe3' => 3,
                    'groupe4' => 4,
                    'groupe5' => 5,
                ],
                'label' => false
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
            'entry_type' => UrlType::class,
            'entry_options' => ['label' => 'video'],
                'allow_add'=> true,
             ]);

//            ->add('url1', UrlType::class, [
//                'label' => 'Ajouté une vidéo (max 3)',
//                'mapped' => false,
//                'required' => false,
//                'constraints'=> new Url()
//            ])
//            ->add('url2', UrlType::class, [
//                'label' => false,
//                'mapped' => false,
//                'required' => false,
//                'constraints'=> new Url()
//            ])
//            ->add('url3', UrlType::class, [
//                'label' => false,
//                'mapped' => false,
//                'required' => false,
//                'constraints'=> new Url()
//            ]);

    }


    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Figure::class,
        ]);
    }
}
