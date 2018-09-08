<?php

namespace App\Repository;

use App\Entity\OrderType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method OrderType|null find($id, $lockMode = null, $lockVersion = null)
 * @method OrderType|null findOneBy(array $criteria, array $orderBy = null)
 * @method OrderType[]    findAll()
 * @method OrderType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OrderTypeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, OrderType::class);
    }

//    /**
//     * @return OrderType[] Returns an array of OrderType objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?OrderType
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
