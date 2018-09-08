<?php

namespace App\Repository;

use App\Entity\CeUser;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CeUser|null find($id, $lockMode = null, $lockVersion = null)
 * @method CeUser|null findOneBy(array $criteria, array $orderBy = null)
 * @method CeUser[]    findAll()
 * @method CeUser[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CeUserRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CeUser::class);
    }

//    /**
//     * @return CeUser[] Returns an array of CeUser objects
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
    public function findOneBySomeField($value): ?CeUser
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
