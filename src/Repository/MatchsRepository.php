<?php

namespace App\Repository;

use App\Entity\Matchs;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Matchs|null find($id, $lockMode = null, $lockVersion = null)
 * @method Matchs|null findOneBy(array $criteria, array $orderBy = null)
 * @method Matchs[]    findAll()
 * @method Matchs[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MatchsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Matchs::class);
    }

    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.championnat = :id')
            ->setParameter('id', $value)
            ->orderBy('m.id', 'DESC')
            ->getQuery()
            ->getResult()
        ;
    }

    public function findJournee($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.championnat = :id')
            ->setParameter('id', $value)
            ->orderBy('m.journee', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getResult()
        ;
    }

    public function findJoueurs($id,$value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.Joueurs1 = :joueur or m.Joueurs2 = :joueur')
            ->andWhere('m.championnat = :id')
            ->setParameter('id', $value)
            ->setParameter('joueur', $id)
            ->orderBy('m.id', 'DESC')
            ->getQuery()
            ->getResult()
        ;
    }
    // /**
    //  * @return Matchs[] Returns an array of Matchs objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Matchs
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
