<?php

namespace App\DataFixtures;

use App\Entity\Figure;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class FigureFixture extends BaseFixture implements OrderedFixtureInterface
{

    public function getOrder(){
        return 3;
    }

    public function load(ObjectManager $manager)
    {

        $this->createMany('figure',Figure::class,$this->count,function (Figure $figure) use ($manager){
            $group = $this->getReference('group'.rand(1,5));
            $figure->setNameFigure($this->faker->name);
            $figure->setContent($this->faker->text);
            $figure->setImgFigure($this->faker->text);
            $figure->setGroupNumber($group);
        });
    }
}
