<?php

namespace App\Repository;

use App\Entity\Championnats;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Championnats|null find($id, $lockMode = null, $lockVersion = null)
 * @method Championnats|null findOneBy(array $criteria, array $orderBy = null)
 * @method Championnats[]    findAll()
 * @method Championnats[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ChampionnatsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Championnats::class);
    }

    // /**
    //  * @return Championnats[] Returns an array of Championnats objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Championnats
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
