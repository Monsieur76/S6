<?php

    namespace App\DataFixtures;

    use App\Entity\GroupNumberFigure;
    use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
    use Doctrine\Common\Persistence\ObjectManager;

    class GroupFixture extends BaseFixture implements OrderedFixtureInterface
    {
        private $group;

        public function getOrder(){
            return 1;
        }

        public function load(ObjectManager $manager)
        {
            for ($i = 1; $i < 6; $i++) {
                $this->group = new GroupNumberFigure();
                $this->group->setNumber('Groupe' . $i);
                $manager->persist($this->group);
                $this->setReference('group'.$i,$this->group);
                $manager->flush();
            }
        }
    }
