<?php

namespace App\Repository;

use App\Entity\CeAccount;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CeAccount|null find($id, $lockMode = null, $lockVersion = null)
 * @method CeAccount|null findOneBy(array $criteria, array $orderBy = null)
 * @method CeAccount[]    findAll()
 * @method CeAccount[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CeAccountRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CeAccount::class);
    }

//    /**
//     * @return CeAccount[] Returns an array of CeAccount objects
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
    public function findOneBySomeField($value): ?CeAccount
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }*/

    
    public function getCommercialAccounts(): ?Array
    {
        return $this->createQueryBuilder('a')
            ->where('a.isCommercial = :val')
            ->setParameter('val', 1)
            ->getQuery()
            ->getResult()
        ;
    }

    
    public function getMobileMoneyAccounts(): ?Array
    {
        return $this->createQueryBuilder('a')
            ->where('a.isMobileMoney = :val')
            ->setParameter('val', 1)
            ->getQuery()
            ->getResult()
        ;
    }

    public function getTotalBalance()
    {

        return $this->createQueryBuilder('a')
            ->select('SUM(a.ceAccountBalance) as balance')
            ->getQuery()
            ->execute();

    }

    public function getAccountsWithBalance()
    {

        return  $this->createQueryBuilder('a')
            ->Where('a.ceAccountBalance > :balance')
            ->setParameter('balance', 0)
            ->orderBy('a.ceAccountBalance', 'DESC')
            ->getQuery()
            ->execute();

    }
    
}
