<?php

namespace App\Repository;

use App\Entity\CeCharge;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CeCharge|null find($id, $lockMode = null, $lockVersion = null)
 * @method CeCharge|null findOneBy(array $criteria, array $orderBy = null)
 * @method CeCharge[]    findAll()
 * @method CeCharge[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CeChargeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CeCharge::class);
    }

//    /**
//     * @return CeCharge[] Returns an array of CeCharge objects
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
    public function findOneBySomeField($value): ?CeCharge
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    
    public function getOrderCharge($amount,$netId)
    {
        $chargeMult = 0;
        if ($amount > 500000) {
            $chargeMult =  floor($amount/500000)*2500;
            $amount = fmod($amount, 500000);
        }
        
        $charge = $this->createQueryBuilder('c')
            ->select(['c.chargeAmount'])
            ->where('c.chargeFrom <= :amount')
            ->andwhere('c.chargeTo >= :amount')
            ->andwhere('c.fkNetwork >= :netId')
            ->setParameter('amount', $amount)
            ->setParameter('netId', $netId)
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult()
        ;

        return $charge['chargeAmount']+$chargeMult;
    }
}
