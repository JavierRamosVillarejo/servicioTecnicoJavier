<?php

namespace App\Repository;

use App\Entity\LineasDeincidencia;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method LineasDeincidencia|null find($id, $lockMode = null, $lockVersion = null)
 * @method LineasDeincidencia|null findOneBy(array $criteria, array $orderBy = null)
 * @method LineasDeincidencia[]    findAll()
 * @method LineasDeincidencia[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LineasDeincidenciaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LineasDeincidencia::class);
    }

    // /**
    //  * @return LineasDeincidencia[] Returns an array of LineasDeincidencia objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?LineasDeincidencia
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
