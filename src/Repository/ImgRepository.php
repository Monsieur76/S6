<?php

namespace App\Repository;

use App\Entity\Figure;
use App\Entity\Img;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bridge\Doctrine\RegistryInterface;


/**
 * @method Img|null find($id, $lockMode = null, $lockVersion = null)
 * @method Img|null findOneBy(array $criteria, array $orderBy = null)
 * @method Img[]    findAll()
 * @method Img[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ImgRepository extends ServiceEntityRepository
{
    private $em;
    public function __construct(RegistryInterface $registry,ObjectManager $em)
    {
        parent::__construct($registry, Img::class);
        $this->em = $em;
    }


    public function imgFindId($id)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.figure = :id')
            ->setParameter('id', $id)
            ->orderBy('f.id', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function imgFindLimit($id)
    {
        return $this->createQueryBuilder('f')
            ->innerJoin('f.figure', 'fd')
            ->andWhere('fd.id = :id')
            ->setParameter('id', $id)
            ->orderBy('f.id', 'DESC')
            ->setMaxResults(3)
            ->getQuery()
            ->getResult();
    }

    public function setFigureImg($file,$fileUp,$figure)
    {
        if ($file) {
            $img = new Img();
            $fileName = $fileUp->upload($file);
            $img->setNameImg($fileName);
            $img->setFigures($figure);
            $this->persistFlush($figure);
        }
    }

    public function setMultipleImg($file2, $fileUp, Figure $figure)
    {
        if ($file2) {
            foreach ($file2 as $fil) {
                $img = new Img();
                $fileName = $fileUp->upload($fil);
                $img->setnameImg($fileName);
                $img->setFigures($figure);
                $this->em->persist($img);
            }
            $this->em->flush();
        }
    }

    public function persistFlush($entity)
    {
        $this->em->persist($entity);
        $this->em->flush();
    }
}
