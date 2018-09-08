<?php

namespace App\Repository;

use App\Entity\CeBank;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CeBank|null find($id, $lockMode = null, $lockVersion = null)
 * @method CeBank|null findOneBy(array $criteria, array $orderBy = null)
 * @method CeBank[]    findAll()
 * @method CeBank[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CeBankRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CeBank::class);
    }

//    /**
//     * @return CeBank[] Returns an array of CeBank objects
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
    public function findOneBySomeField($value): ?CeBank
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
