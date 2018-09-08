<?php

namespace App\Repository;

use App\Entity\CeAccountType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CeAccountType|null find($id, $lockMode = null, $lockVersion = null)
 * @method CeAccountType|null findOneBy(array $criteria, array $orderBy = null)
 * @method CeAccountType[]    findAll()
 * @method CeAccountType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CeAccountTypeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CeAccountType::class);
    }

//    /**
//     * @return CeAccountType[] Returns an array of CeAccountType objects
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
    public function findOneBySomeField($value): ?CeAccountType
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
