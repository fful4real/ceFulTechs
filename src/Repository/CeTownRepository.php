<?php

namespace App\Repository;

use App\Entity\CeTown;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CeTown|null find($id, $lockMode = null, $lockVersion = null)
 * @method CeTown|null findOneBy(array $criteria, array $orderBy = null)
 * @method CeTown[]    findAll()
 * @method CeTown[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CeTownRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CeTown::class);
    }

//    /**
//     * @return CeTown[] Returns an array of CeTown objects
//     */
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
    public function findOneBySomeField($value): ?CeTown
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
