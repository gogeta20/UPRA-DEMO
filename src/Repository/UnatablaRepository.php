<?php

namespace App\Repository;

use App\Entity\Unatabla;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Unatabla|null find($id, $lockMode = null, $lockVersion = null)
 * @method Unatabla|null findOneBy(array $criteria, array $orderBy = null)
 * @method Unatabla[]    findAll()
 * @method Unatabla[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UnatablaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Unatabla::class);
    }

    // /**
    //  * @return Unatabla[] Returns an array of Unatabla objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Unatabla
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
