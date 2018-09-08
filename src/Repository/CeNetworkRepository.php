<?php

namespace App\Repository;

use App\Entity\CeNetwork;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CeNetwork|null find($id, $lockMode = null, $lockVersion = null)
 * @method CeNetwork|null findOneBy(array $criteria, array $orderBy = null)
 * @method CeNetwork[]    findAll()
 * @method CeNetwork[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CeNetworkRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CeNetwork::class);
    }

//    /**
//     * @return CeNetwork[] Returns an array of CeNetwork objects
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
    public function findOneBySomeField($value): ?CeNetwork
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
    
    public function getNetworkCode($mobNum)
    {
            if (intval(substr($mobNum, 1,1))==5) {
                $netInitial = substr($mobNum, 0,3);
            } else {
                $netInitial = substr($mobNum, 0,2);
            }
            $networks = $this->findAll();
            $netCode=$netId='';
            foreach ($networks as $network) {
                if (in_array($netInitial, $network->getnetInitial())) {
                    $netCode = $network->getnetCode();
                    $netId = $network->getId();
                }
            }

            return $netCode;
    }
    
    public function getNetworkId($mobNum)
    {
            if (intval(substr($mobNum, 1,1))==5) {
                $netInitial = substr($mobNum, 0,3);
            } else {
                $netInitial = substr($mobNum, 0,2);
            }
            $networks = $this->findAll();
            $netCode=$netId='';
            foreach ($networks as $network) {
                if (in_array($netInitial, $network->getnetInitial())) {
                    $netCode = $network->getnetCode();
                    $netId = $network->getId();
                }
            }

            return $netId;
    }

    public function isValidNetworkNumber($value)
    {
        return  preg_match("/^67|69|66|68|65/", $value);
    }

}
