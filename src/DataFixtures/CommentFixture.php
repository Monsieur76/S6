<?php

namespace App\DataFixtures;

use App\Entity\Comment;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class CommentFixture extends BaseFixture implements OrderedFixtureInterface
{
    public function getOrder(){
        return 4;
    }
    public function load(ObjectManager $manager)
    {
        $this->createMany('comment',Comment::class,$this->count,function (Comment $comment) use ($manager){
            $figure = $this->getReference('figure'.rand(1,$this->maxRandom));
            $user = $this->getReference('user'.rand(1,$this->maxRandom));
            $comment->setFigure($figure);
            $comment->setUser($user);
            $comment->setContent($this->faker->text);
        });

    }
}
