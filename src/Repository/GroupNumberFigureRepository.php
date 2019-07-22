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
    private $group = 'Groupe';
    private $groupNumber = [1,2,3,4,5];
    private $maxNumberGroup = 6;
    private $em;
    public function __construct(RegistryInterface $registry,ObjectManager $em)
    {
        parent::__construct($registry, GroupNumberFigure::class);
        $this->em = $em;
    }

    public function selectFirstName($name)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.number = :name')
            ->setParameter('name',$name )
            ->getQuery()
            ->getResult();
    }

    public function insertGroup()
    {
        if (empty($this->selectFirstName($this->group.$this->groupNumber[rand(0,4)])))
        {
            for ($i = 1; $i < $this->maxNumberGroup; $i++)
            {
                $group = new GroupNumberFigure();
                $group->setNumber($this->group.$i);
                $this->em->persist($group);
            }
            $this->em->flush();
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
