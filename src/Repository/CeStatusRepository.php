<?php

namespace App\Repository;

use App\Entity\CeStatus;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CeStatus|null find($id, $lockMode = null, $lockVersion = null)
 * @method CeStatus|null findOneBy(array $criteria, array $orderBy = null)
 * @method CeStatus[]    findAll()
 * @method CeStatus[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CeStatusRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CeStatus::class);
    }

//    /**
//     * @return CeStatus[] Returns an array of CeStatus objects
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
    public function findOneBySomeField($value): ?CeStatus
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    public function getStatusColors()
    {

        return [1=>'purple',2=>'success',3=>'gray-400',4=>'orange'];
    }
}
