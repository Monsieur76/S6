<?php

namespace App\DataFixtures;

use App\Entity\Video;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class VideoFixture extends Fixture implements OrderedFixtureInterface
{
    public function getOrder(){
        return 5;
    }
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 20; $i++) {
            $post = $this->getReference('post');
            $video = new Video();
            $video->setName('video n°'.$i);
            $video->setPost($post);
            $manager->persist($video);
        }
        $manager->flush();
    }
}
