<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixture extends Fixture implements OrderedFixtureInterface
{
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function getOrder(){
        return 1;
    }
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 20; $i++) {
            $user = new User();
            $password = $this->encoder->encodePassword($user, '1234');
            $user->setEmail('lol@lol.com'.$i);
            $user->setPassword($password);
            $user->setFirstname('lol');
            $user->setValid(1);
            $user->setConfirm(1);
            $user->setRoles(['ROLE_USER']);
            $user->setPhoto('default.jpeg');
            $manager->persist($user);
            $this->setReference('user',$user);
        }
        $manager->flush();
    }
}
