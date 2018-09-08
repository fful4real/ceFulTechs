<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use App\Repository\CeorderRepository;
use App\Repository\CeAccountRepository;
use App\Repository\CeAccountEntryRepository;

class DashboardController extends AbstractController
{
    /**
     * @Route("/dashboard", name="dashboard")
     * @Route("/admin", name="admin")
     * @Route("/", name="home")
     */
    public function index(CeorderRepository $orderRepo, CeAccountRepository $accountRepo, CeAccountEntryRepository $acEntryRepo)
    {
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
