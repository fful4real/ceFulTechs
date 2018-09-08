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
    
}
