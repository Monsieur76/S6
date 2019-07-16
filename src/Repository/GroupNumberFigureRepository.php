<?php

namespace App\Repository;

use App\Entity\GroupNumberFigure;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method GroupNumberFigure|null find($id, $lockMode = null, $lockVersion = null)
 * @method GroupNumberFigure|null findOneBy(array $criteria, array $orderBy = null)
 * @method GroupNumberFigure[]    findAll()
 * @method GroupNumberFigure[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GroupNumberFigureRepository extends ServiceEntityRepository
{
    private $em;
    public function __construct(RegistryInterface $registry,ObjectManager $em)
    {
        parent::__construct($registry, GroupNumberFigure::class);
        $this->em = $em;
    }

    public function selectFirstId()
    {
        return $this->createQueryBuilder('f')
            ->getQuery()
            ->getResult();
    }

    public function insertGroup()
    {
        if (empty($this->selectFirstId()))
        {
            for ($i = 1; $i < 6; $i++)
            {
                $group = new GroupNumberFigure();
                $group->setGroupNumber('Groupe'.$i);
                $this->persistFlush($group);
            }
        }
        return;
    }

    public function persistFlush($entity)
    {
        $this->em->persist($entity);
        $this->em->flush();
    }



    // /**
    //  * @return GroupNumberFigure[] Returns an array of GroupNumberFigure objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?GroupNumberFigure
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
