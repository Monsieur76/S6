<?php

namespace App\Repository;

use App\Entity\Video;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Video|null find($id, $lockMode = null, $lockVersion = null)
 * @method Video|null findOneBy(array $criteria, array $orderBy = null)
 * @method Video[]    findAll()
 * @method Video[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VideoRepository extends ServiceEntityRepository
{
    private $em;
    public function __construct(RegistryInterface $registry,ObjectManager $em)
    {
        parent::__construct($registry, Video::class);
        $this->em = $em;
    }


    public function videoFindId($id)
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.Figure = :id')
            ->setParameter('id', $id)
            ->orderBy('v.id', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function videoFindLimit($id)
    {
        return $this->createQueryBuilder('video')
            ->innerJoin('video.Figure', 'vd')
            ->andWhere('vd.id = :id')
            ->setParameter('id', $id)
            ->orderBy('video.id', 'DESC')
            ->setMaxResults(3)
            ->getQuery()
            ->getResult();
    }

    public function setVideos($urls, $id, FigureRepository $figureRepository)
    {
        if ($urls) {
            $figure = $figureRepository->findOneBy(['id'=>$id]);
            foreach ($urls as $url ) {
                if ($url) {
                    $video = new Video();
                    $video->setUrl($url);
                    $video->setFigure($figure);
                    $this->em->persist($video);
                }
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
    //  * @return Video[] Returns an array of Video objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('v.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Video
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
