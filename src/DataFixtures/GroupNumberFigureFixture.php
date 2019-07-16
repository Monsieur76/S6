<?php


    namespace App\DataFixtures;


    use App\Entity\GroupNumberFigure;
    use Doctrine\Bundle\FixturesBundle\Fixture;
    use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
    use Doctrine\Common\Persistence\ObjectManager;

    class GroupNumberFigureFixture extends Fixture implements OrderedFixtureInterface
    {
        public function getOrder(){
            return 4;
        }
        public function load(ObjectManager $manager)
        {
            for ($i = 0; $i < 20; $i++) {
                $post = $this->getReference('post');
                $group = new GroupNumberFigure();
                $group->setGroupNumber('groupe n°'.$i);
                $group->setFigures();
                $manager->persist($group);
            }

            $manager->flush();
        }


    }