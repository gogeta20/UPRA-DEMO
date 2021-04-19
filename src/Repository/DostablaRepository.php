<?php

namespace App\Repository;

use App\Entity\Dostabla;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Dostabla|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dostabla|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dostabla[]    findAll()
 * @method Dostabla[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DostablaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dostabla::class);
    }

    // /**
    //  * @return Dostabla[] Returns an array of Dostabla objects
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
    public function findOneBySomeField($value): ?Dostabla
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
