<?php

namespace App\Repository;

use App\Entity\Figure;
use App\Entity\Figure;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bridge\Doctrine\RegistryInterface;


/**
 * @method Figure|null find($id, $lockMode = null, $lockVersion = null)
 * @method Figure|null findOneBy(array $criteria, array $orderBy = null)
 * @method Figure[]    findAll()
 * @method Figure[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FigureRepository extends ServiceEntityRepository
{
    private $em;
    public function __construct(RegistryInterface $registry,ObjectManager $em)
    {
        parent::__construct($registry, Figure::class);
        $this->em = $em;
    }


    public function figureFindId($id)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.post = :id')
            ->setParameter('id', $id)
            ->orderBy('f.id', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function figureFindLimit($id)
    {
        return $this->createQueryBuilder('f')
            ->innerJoin('f.post', 'fd')
            ->andWhere('fd.id = :id')
            ->setParameter('id', $id)
            ->orderBy('f.id', 'DESC')
            ->setMaxResults(3)
            ->getQuery()
            ->getResult();
    }

    public function setPostImg($file,$fileUp,$post)
    {
        if ($file) {
            $fileName = $fileUp->upload($file);
            $post->setFigure($fileName);
            $this->persistFlush($post);
        }
    }

    public function setMultipleImg($file2, $fileUp, Figure $post)
    {
        if ($file2) {
            foreach ($file2 as $fil) {
                $figure = new Figure();
                $fileName = $fileUp->upload($fil);
                $figure->setName($fileName);
                $figure->setPost($post);
                $this->em->persist($figure);
            }
            $this->em->flush();
        }
    }

    public function persistFlush($entity)
    {
        $this->em->persist($entity);
        $this->em->flush();
    }


    // /**
    //  * @return Figure[] Returns an array of Figure objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Figure
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
