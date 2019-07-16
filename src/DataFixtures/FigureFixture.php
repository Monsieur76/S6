<?php

namespace App\DataFixtures;

use App\Entity\Figure;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class FigureFixture extends Fixture implements OrderedFixtureInterface
{
    public function getOrder(){
        return 4;
    }
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 20; $i++) {
            $post = $this->getReference('post');
            $figure = new Figure();
            $figure->setPost($post);
            $figure->setName('figure n°'.$i);
            $manager->persist($figure);
        }

        $manager->flush();
    }
}
