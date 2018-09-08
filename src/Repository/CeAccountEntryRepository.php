<?php

namespace App\Repository;

use App\Entity\CeAccountEntry;
use App\Entity\CeAccount;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CeAccountEntry|null find($id, $lockMode = null, $lockVersion = null)
 * @method CeAccountEntry|null findOneBy(array $criteria, array $orderBy = null)
 * @method CeAccountEntry[]    findAll()
 * @method CeAccountEntry[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CeAccountEntryRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CeAccountEntry::class);
    }

//    /**
//     * @return CeAccountEntry[] Returns an array of CeAccountEntry objects
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
    public function findOneBySomeField($value): ?CeAccountEntry
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */


    public function getTotalEntries(CeAccount $account)
    {

        return $this->createQueryBuilder('ae')
            ->select('SUM(ae.ceAmount) as amount')
            ->Where('ae.fkCeAccount = :account')
            ->AndWhere('ae.isDebit = :debit')
            ->setParameter('account', $account)
            ->setParameter('debit', 0)
            ->getQuery()
            ->execute();

    }
    public function getTotalOuts(CeAccount $account)
    {

        return $this->createQueryBuilder('ae')
            ->select('SUM(ae.ceAmount) as amount')
            ->Where('ae.fkCeAccount = :account')
            ->AndWhere('ae.isDebit = :debit')
            ->setParameter('account', $account)
            ->setParameter('debit', 1)
            ->getQuery()
            ->execute();

    }

    public function getAcAvailability()
    {

        $conn = $this->getEntityManager()->getConnection();
        $sql = "SELECT * FROM (SELECT fk_ce_account_id AS accountId1, SUM(ce_amount) AS sumMonth FROM ce_account_entry WHERE MONTH(CURRENT_DATE) = MONTH(datec) GROUP BY fk_ce_account_id) AS CEAE 
            LEFT JOIN (SELECT fk_ce_account_id AS accountId2, SUM(ce_amount) AS sumWeek FROM ce_account_entry WHERE WEEK(CURRENT_DATE) = WEEK(datec) GROUP BY fk_ce_account_id) AS CEAE1 
            ON CEAE.accountId1 = CEAE1.accountId2 
            LEFT JOIN (SELECT fk_ce_account_id AS accountId3, SUM(ce_amount) AS sumToday FROM ce_account_entry WHERE CAST(CURRENT_DATE AS DATE) = CAST(datec AS DATE) GROUP BY fk_ce_account_id) AS CEAE2 
            ON CEAE.accountId1 = CEAE2.accountId3
            LEFT JOIN
            (SELECT id AS accountId, is_commercial AS isCommercial, ce_account_code AS accountCode FROM ce_account) AS CEA
            ON CEA.accountId = CEAE.accountId1
            WHERE CEA.isCommercial = 0";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();

    }

}
