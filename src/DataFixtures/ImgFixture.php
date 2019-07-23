<?php

namespace App\DataFixtures;

use App\Entity\Img;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class ImgFixture extends BaseFixture implements OrderedFixtureInterface
{
    public function getOrder(){
        return 5;
    }

    public function load(ObjectManager $manager)
    {
        $this->createMany('img',Img::class,$this->count,function (Img $img) use ($manager){
            $figure = $this->getReference('figure'.rand(1,$this->maxRandom));
            $img->setNameImg('snow.jpg');
            $img->setFigures($figure);
        });
    }
}
