<?php

namespace App\Repository;

use App\Entity\Ceorder;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Ceorder|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ceorder|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ceorder[]    findAll()
 * @method Ceorder[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CeorderRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Ceorder::class);
    }

//    /**
//     * @return Ceorder[] Returns an array of Ceorder objects
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
    public function findOneBySomeField($value): ?Ceorder
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    
    public function makeRef($orderType)
    {
        if (!$orderType) {
            $orderType = 'SPE';
        }
        $lastRef = $this->createQueryBuilder('o')
            ->select(['o.ceOrderref'])
            ->where('o.ceOrderref LIKE :orderRef')
            ->setParameter('orderRef', '%'.$orderType.'%')
            ->orderBy('o.ceOrderref', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getResult();
        if ($lastRef) {
            $lastRef = $lastRef[0]['ceOrderref'];
            $lastRef = intval(str_replace($orderType,'' , $lastRef));
            $newRef=(string)($lastRef+1);
            for ($i=strlen($newRef); $i < 5 ; $i++) { 
                $newRef = '0'.$newRef;
            }
            $newRef = $orderType.$newRef;
        }else{
            $newRef=$orderType.'00001';
        }
        //var_dump($newRef);
        return $newRef;
    }

    
    public function getNewOrders($offset = null, $limit = null)
    {

        $query = $this->createQueryBuilder('o')
            ->where('o.ceStatus = :statusCode')
            ->setParameter('statusCode', 1)
            ->orderBy('o.ceDatec', 'DESC');
        if (false === is_null($offset))
            $query->setFirstResult($offset);

        if (false === is_null($limit))
            $query->setMaxResults($limit);

        return $query->getQuery()
        ->getResult();
    }

    
    public function getNewOrdersCount()
    {
        $newOrders = $this->createQueryBuilder('o')
            ->where('o.ceStatus = :statusCode')
            ->setParameter('statusCode', 1)
            ->orderBy('o.ceDatec', 'DESC')
            ->getQuery()
            ->getResult();

        return count($newOrders);
    }

    
    public function getPagination($page=1, $limit=10, $options=[])
    {
        $pages = ceil(count($this->findBy($options))/$limit);
        $page = $page > $pages ? 1 : $page;
        $var = ceil($page/5);
        $startPage = $var > 1 ? (($var-1)*5)+1 : $var;
        $pagination = '';
        for ($i=$startPage, $j=0; $i <= $pages; $i++, $j++) {
            if ($j==5)
                break;
            $pagination.='<li class="page-item ';
            if ($i == $page)
                $pagination.='active';
            $pagination .= '"><a class="page-link" href="?page='.$i.'">'.$i.'</a></li>';
        }
        if ($page > 1) {
            $k = $page-1;
            $pagination = '
            <li class="page-item hidden-xs-down">
                <a class="page-link" href="?page=1" aria-label="First"><i class="fa fa-angle-double-left"></i></a>
            </li>
            <li class="page-item">
                <a class="page-link" href="?page='.$k.'" aria-label="Previous"><i class="fa fa-angle-left"></i></a>
            </li>
            '.$pagination;
        }
        if ($page < $pages) {
            $k = $page+1;
            $pagination.='
          <li class="page-item">
            <a class="page-link" href="?page='.$k.'" aria-label="Previous"><i class="fa fa-angle-right"></i></a>
          </li>
          <li class="page-item hidden-xs-down">
            <a class="page-link" href="?page='.$pages.'" aria-label="First"><i class="fa fa-angle-double-right"></i></a>
          </li>';
        }

        return $pagination;
    }
}
