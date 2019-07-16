<?php


    namespace App\Tests\src\Entity;


    use App\Entity\Detail;
    use PHPUnit\Framework\TestCase;

    class DetailTest extends TestCase
    {
        private $detail;

        public function setUp(): void
        {
            parent::setUp(); // TODO: Change the autogenerated stub
            $this->detail = new Detail();
            $this->hydrate($this->detail);
        }

        public function hydrate($detail)
        {
            $this->detail->setGroupFig('groupe6');
            $this->detail->setName('gegerg');
            $this->detail->setDate(new \DateTime());
            $this->detail->setContent('azert');
            $this->detail->setFigure('aqwzsx');
        }

        public function testName()
        {
            $this->assertEquals('gegerg',$this->detail->getName());
        }

        public function testNameType()
        {
            $this->assertIsString($this->detail->getName());
        }

        public function testGroupFig()
        {
            $this->assertEquals('groupe6',$this->detail->getGroupFig());
        }

        public function testGroupFigType()
        {
            $this->assertIsString($this->detail->getGroupFig());
        }

        public function testDate()
        {
            $this->assertInstanceOf(\DateTime::class,$this->detail->getDate());
        }

        public function testContent()
        {
            $this->assertEquals('azert',$this->detail->getContent());
        }

        public function testContentType()
        {
            $this->assertIsString($this->detail->getContent());
        }

        public function testFigure()
        {
            $this->assertEquals('aqwzsx',$this->detail->getFigure());
        }

        public function testFigureType()
        {
            $this->assertIsString($this->detail->getFigure());
        }

    }