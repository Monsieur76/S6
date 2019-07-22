<?php

namespace App\DataFixtures;

use App\Entity\Video;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class VideoFixture extends BaseFixture implements OrderedFixtureInterface
{
    public function getOrder(){
        return 6;
    }
    public function load(ObjectManager $manager)
    {
        $this->createMany('video',Video::class,$this->count,function (Video $video) use ($manager){
            $figure = $this->getReference('figure'.rand(1,$this->maxRandom));
            $video->setUrl($this->faker->url);
            $video->setFigures($figure);
        });
    }
}
