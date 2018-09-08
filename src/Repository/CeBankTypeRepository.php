<?php

namespace App\Repository;

use App\Entity\CeBankType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CeBankType|null find($id, $lockMode = null, $lockVersion = null)
 * @method CeBankType|null findOneBy(array $criteria, array $orderBy = null)
 * @method CeBankType[]    findAll()
 * @method CeBankType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CeBankTypeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CeBankType::class);
    }

//    /**
//     * @return CeBankType[] Returns an array of CeBankType objects
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
    public function findOneBySomeField($value): ?CeBankType
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
