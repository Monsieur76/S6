<?php

namespace App\Repository;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

/**
 * @method User|null find($id, $lockMode = null, $lockVersion = null)
 * @method User|null findOneBy(array $criteria, array $orderBy = null)
 * @method User[]    findAll()
 * @method User[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserRepository extends ServiceEntityRepository
{
    private $em;
    public function __construct(RegistryInterface $registry,ObjectManager $em)
    {
        parent::__construct($registry, User::class);
        $this->em = $em;
    }

    public function persistFlush($object)
    {
        $this->em->persist($object);
        $this->em->flush();
    }

    public function setPhotoUser($file,$fileUp,$user)
    {
        if ($file) {
            $fileName = $fileUp->upload($file);
            $user->setImg($fileName);
        }
    }

    public function setPassword($user,$pass,UserPasswordEncoderInterface $passwordEncoder)
    {
        $user->setPassword($passwordEncoder->encodePassword(
            $user,
            $pass
        ));
    }

}
