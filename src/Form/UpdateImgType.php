<?php

namespace App\Form;

use App\Entity\Img;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\NotBlank;

class UpdateImgType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nameImg', FileType::class, [
                'label' => false,
                'mapped' => false,
                'constraints' => [new File([
                    'maxSize' => '1024k',
                    'mimeTypes' => ['image/jpeg', 'image/png', 'image/jpg'],
                    'mimeTypesMessage' => "Le Format de l'image n'est pas correct",
                    'maxSizeMessage' => "Le Taille de l'image n'est pas correct",
                ]),
                 new NotBlank([
                    'message' => 'Ce champ ne peut pas etre vide',
                ]), ],
                'attr' => [
                    'placeholder' => 'Choisisser votre photo',
                ], ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Img::class,
        ]);
    }
}
