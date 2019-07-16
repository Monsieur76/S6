<?php

namespace App\DataFixtures;

use App\Entity\Figure;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class PostFixture extends Fixture implements OrderedFixtureInterface
{
    private $post;
    private $postFixture = 'post' ;
    public function getOrder(){
        return 2;
    }
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 20; $i++) {
            $this->post = new Figure();
            $this->post->setName('post n°'.$i);
            $this->post->setContent('contenue n°'.$i);
            $this->post->setGroupFig('groupe n°'.$i);
            $this->post->setFigure(1);
            $this->post->setFigMultiple(3);
            $manager->persist($this->post);
            $manager->flush();
            $this->setReference($this->postFixture,$this->post);
        }

    }
}
