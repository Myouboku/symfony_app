<?php

namespace App\Repository;

use App\Entity\Nouvutilisateur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Nouvutilisateur|null find($id, $lockMode = null, $lockVersion = null)
 * @method Nouvutilisateur|null findOneBy(array $criteria, array $orderBy = null)
 * @method Nouvutilisateur[]    findAll()
 * @method Nouvutilisateur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NouvutilisateurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Nouvutilisateur::class);
    }

    // /**
    //  * @return Nouvutilisateur[] Returns an array of Nouvutilisateur objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Nouvutilisateur
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
