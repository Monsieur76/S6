<?php

namespace App\Repository;

use App\Entity\Figure;
use App\Entity\Img;
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

    public function findAllFigure($max = 15)
    {
        return $this->createQueryBuilder('d')
            ->orderBy('d.id', 'DESC')
            ->getQuery()
            ->setMaxResults($max)
            ->getResult();
    }

    public function setFigureImg($file,$fileUp,$figure)
    {
        if ($file) {
            $fileName = $fileUp->upload($file);
            $figure->setImgFigure($fileName);
            $this->persistFlush($figure);
        }
    }

    public function persistFlush($entity)
    {
        $this->em->persist($entity);
        $this->em->flush();
    }


    // /**
    //  * @return Detail[] Returns an array of Detail objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Detail
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
