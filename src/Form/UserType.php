<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\NotBlank;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class, [
                'label' => false,
                'constraints' => [new Email([
                            'message' => "Votre mail  '{{ value }}' n'est pas valid.",
                    ]),
                 new NotBlank([
                    'message' => 'Ce champ ne peut pas etre vide',
                ]), ],
                'attr' => [
                    'placeholder' => 'yolo9896@pyrogue.com', ],
            ])
            ->add('firstName', TextType::class, [
                'label' => false,
                'attr' => [
                    'placeholder' => 'Normane', ],
            ])
            ->add('password', PasswordType::class, [
                'label' => false,
                'constraints' => new NotBlank([
                    'message' => 'Ce champ ne peut pas etre vide',
                ]),
                'attr' => [
                    'placeholder' => 'Password', ],
            ])
            ->add('img', FileType::class, [
                'label' => false,
                'required' => false,
                'constraints' => new File([
                    'maxSize' => '1024k',
                    'mimeTypes' => ['image/jpeg', 'image/png', 'image/jpg'],
                    'mimeTypesMessage' => "Le Format de l'image n'est pas correct",
                    'maxSizeMessage' => "Le Taille de l'image n'est pas correct",
                ]),
                'attr' => [
                    'placeholder' => 'Choisisser votre Avatar',
                ], ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
            'constraints' => [new UniqueEntity(['fields' => ['email'],
                'message' => 'Cette email exite déjà', ])],
        ]);
    }
}
