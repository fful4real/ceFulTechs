<?php

namespace App\Controller;

use App\Repository\CeAccountEntryRepository;
use App\Repository\CeAccountRepository;
use App\Repository\CeCustomerRepository;
use App\Repository\CeTownRepository;
use App\Repository\CeorderRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    /**
     * @Route("/dashboard", name="dashboard")
     * @Route("/admin", name="admin")
     * @Route("/", name="home")
     */
    public function index(CeTownRepository $townRepo, CeCustomerRepository $customerRepo, CeorderRepository $orderRepo, CeAccountRepository $accountRepo, CeAccountEntryRepository $acEntryRepo, ObjectManager $manager)
    {

        // $values = $customerRepo->getCustomerData();
        // foreach ($values as $key => $value) {
        //     if ($value['fk_ce_town_id'] == null) {
        //         $customer = $customerRepo->find(intval($value['id']));
        //         $town = $townRepo->find(intval($value['townId']));
        //         $customer->setFkCeTown($town);
        //         $manager->persist($customer);
        //     }
            
        // }

        // $manager->flush();
        // die('Done!');

        $acUsage = $acEntryRepo->getAcAvailability();
        
        $newOrdersCount = $orderRepo->getNewOrdersCount();
        $accounts = $accountRepo->getAccountsWithBalance();
        $totalBalance = intval($accountRepo->getTotalBalance()[0]['balance']);
        $colors=[];
        foreach ($accounts as $account) {
            $accountBalancePercentage= round(($account->getCeAccountBalance()/$totalBalance)*100);
            $accountCode = $account->getCeAccountCode();
            $accountNumber = $account->getCeAccountNumber();
            $colors[$accountNumber] = $accountBalancePercentage;

            if ($accountBalancePercentage >= 50) {
                $colors[$accountCode] = 'success';
            }elseif ($accountBalancePercentage < 50  && $accountBalancePercentage >25) {
                $colors[$accountCode] = 'warning';
            }else{
                $colors[$accountCode] = 'danger';
            }
        }
        return $this->render('dashboard/index.html.twig', [

            'orderCount'=>$newOrdersCount,
            'balance'=>$totalBalance,
            'accounts'=>$accounts,
            'colors'=>$colors,
            'acUsage'=>$acUsage,
        ]);
    }
}
