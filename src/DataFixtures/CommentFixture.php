<?php

namespace App\DataFixtures;

use App\Entity\Comment;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class CommentFixture extends Fixture implements OrderedFixtureInterface
{
    public function getOrder(){
        return 3;
    }
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 20; $i++) {

            $comment = new Comment();

            $post = $this->getReference('post');
            $user = $this->getReference('user');
            $comment->setPost($post);
            $comment->setUser($user);
            $comment->setContent('Je suis le commentaire n°'.$i);
            $manager->persist($comment);
            $manager->flush();
        }

    }
}
