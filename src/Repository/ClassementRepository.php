<?php

namespace App\Repository;

use App\Entity\Classement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Classement|null find($id, $lockMode = null, $lockVersion = null)
 * @method Classement|null findOneBy(array $criteria, array $orderBy = null)
 * @method Classement[]    findAll()
 * @method Classement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClassementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Classement::class);
    }

    // /**
    //  * @return Classement[] Returns an array of Classement objects
    //  */
    
    public function findByOrder($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.championnat = :val')
            ->setParameter('val', $value)
            ->orderBy('c.pts', 'desc')
            ->getQuery()
            ->getResult()
        ;
    }

    public function findPlayer($id, $champ)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.user = :id')
            ->andWhere('c.championnat = :champ')
            ->setParameter('id', $id)
            ->setParameter('champ', $champ)
            ->setMaxResults(1)
            ->getQuery()
            ->getResult()
        ;
    }

    public function findPlayerWinner($champ)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.championnat = :champ')
            ->setParameter('champ', $champ)
            ->orderBy('c.pts', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getResult()
        ;
    }
    

    /*
    public function findOneBySomeField($value): ?Classement
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
