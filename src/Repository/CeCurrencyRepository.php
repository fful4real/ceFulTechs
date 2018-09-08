<?php

namespace App\Repository;

use App\Entity\CeCurrency;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CeCurrency|null find($id, $lockMode = null, $lockVersion = null)
 * @method CeCurrency|null findOneBy(array $criteria, array $orderBy = null)
 * @method CeCurrency[]    findAll()
 * @method CeCurrency[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CeCurrencyRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CeCurrency::class);
    }

//    /**
//     * @return CeCurrency[] Returns an array of CeCurrency objects
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
    public function findOneBySomeField($value): ?CeCurrency
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
