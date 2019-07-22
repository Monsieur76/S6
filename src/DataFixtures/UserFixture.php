<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class UserFixture extends BaseFixture implements OrderedFixtureInterface
{

    public function getOrder(){
        return 2;
    }

    public function load(ObjectManager $manager)
    {
        $this->createMany('user',User::class,$this->count,function (User $user) use ($manager){
            $password = $this->encoder->encodePassword($user, $this->faker->password);
            $user->setEmail($this->faker->email);
            $user->setPassword($password);
            $user->setFirstname($this->faker->name);
            $user->setToken($this->token->generateToken());
            $user->setConfirmRegister(1);
            $user->setRoles(['ROLE_USER']);
            $user->setImg('default.jpeg');
        });
    }
}
