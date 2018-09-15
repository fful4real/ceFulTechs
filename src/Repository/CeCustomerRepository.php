<?php

namespace App\Repository;

use App\Entity\CeCustomer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * @method CeCustomer|null find($id, $lockMode = null, $lockVersion = null)
 * @method CeCustomer|null findOneBy(array $criteria, array $orderBy = null)
 * @method CeCustomer[]    findAll()
 * @method CeCustomer[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CeCustomerRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CeCustomer::class);
    }

//    /**
//     * @return CeCustomer[] Returns an array of CeCustomer objects
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
    public function findOneBySomeField($value): ?CeCustomer
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    
    public function isNewCustomer(Array $customer)
    {
        $repoCustomer = $this->findOneBy([
                                    'mobNum'=>$customer['mobNum']
                                    ]);
        if (!$repoCustomer) {
                $newCustomer = new CeCustomer();
                $newCustomer->setFirstName($customer['firstName'])
                        ->setLastName($customer['lastName'])
                        ->setMobNum($customer['mobNum'])
                        ->setDatec(new \DateTime())
                        ->setTms(new \DateTime());
                return $newCustomer;
            }
        return;
    }

    public function getCustomerData()
    {
        $conn = $this->getEntityManager()->getConnection();
        $sql = "SELECT * FROM (SELECT id AS customerId, first_name AS firstName, last_name AS lastName, mob_num AS mobNum, fk_ce_town_id AS townId FROM ce_customer GROUP BY mobNum) AS CEC 
            LEFT JOIN (SELECT count(ce_mobnum) AS orderCount, fk_ce_town_id AS townId1, SUM(ce_amount) AS sumCustomer, ce_mobnum AS mobNum1 FROM ceorder GROUP BY ce_mobnum) AS CEO 
            ON CEC.mobNum = CEO.mobNum1
LEFT JOIN (SELECT id as townId2, town_alias AS townAlias FROM ce_town) AS CET ON CEC.townId = CET.townId2 ";

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function getCustomerDataFixture()
    {
        $conn = $this->getEntityManager()->getConnection();
        $sql = "SELECT * FROM (SELECT fk_ce_town_id AS townId, ce_mobnum AS mobNum FROM ceorder) AS CEO 
            LEFT JOIN (SELECT * FROM ce_customer) AS CEC 
            ON CEO.mobNum = CEC.mob_num
            GROUP BY CEO.mobNum";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }
    
}
