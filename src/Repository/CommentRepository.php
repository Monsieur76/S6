<?php

namespace App\Repository;

use App\Entity\Comment;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Comment|null find($id, $lockMode = null, $lockVersion = null)
 * @method Comment|null findOneBy(array $criteria, array $orderBy = null)
 * @method Comment[]    findAll()
 * @method Comment[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CommentRepository extends ServiceEntityRepository
{
    private $em;
    public function __construct(RegistryInterface $registry,ObjectManager $em)
    {
        parent::__construct($registry, Comment::class);
        $this->em =$em;
    }


    public function findLimitComment($id, int $max = null)
    {

        return $this->createQueryBuilder('comment')
            ->innerJoin('comment.figure', 'cf')
            ->where('cf.id = :id')
            ->setMaxResults($max)
            ->setParameter('id', $id)
            ->orderBy('comment.creatDate', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function persistFlush($entity)
    {
        $this->em->persist($entity);
        $this->em->flush();
    }

}
