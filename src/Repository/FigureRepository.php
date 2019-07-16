<?php

namespace App\Repository;

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
class PostRepository extends ServiceEntityRepository
{
    private $em;
    public function __construct(RegistryInterface $registry,ObjectManager $em)
    {
        parent::__construct($registry, Figure::class);
        $this->em = $em;
    }

    public function findAllPost()
    {
        return $this->createQueryBuilder('d')
            ->orderBy('d.id', 'DESC')
            ->getQuery()
            ->getResult();
    }


    public function findById($id)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.id = :id')
            ->setParameter('id', $id)
            ->orderBy('d.id', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function updateGroupFigById($id, $groupFig)
    {
        return $this->createQueryBuilder('d')
            ->update('groupeFig = :3')
            ->andWhere('d.id = :id')
            ->setParameter('id', $id)
            ->setParameter('3', $groupFig)
            ->orderBy('d.id', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function updateContentById($id, $content)
    {
        return $this->createQueryBuilder('post')
            ->update('d.content = :4')
            ->andWhere('d.id = :id')
            ->setParameter('id', $id)
            ->setParameter('4', $content)
            ->orderBy('d.id', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function findFigure($id)
    {
        return $this->createQueryBuilder('post')
            ->andWhere('df.id = :id')
            ->innerJoin('post.figures', 'df')
            ->setParameter('id', $id)
            ->orderBy('d.id', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function findAllVideoFigure($id)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.id = :id')
            ->setParameter('id', $id)
            ->orderBy('d.id', 'DESC')
            ->setMaxResults(3)
            ->getQuery()
            ->getResult();
    }

    public function findAllFigureVideo($id)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('pv.post_id = :id')
            ->setParameter('id', $id)
            ->orderBy('d.id', 'DESC')
            ->setMaxResults(3)
            ->getQuery()
            ->getResult();
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
