<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Ceorder;
use App\Entity\OrderType;
use App\Entity\CeStatus;
use App\Entity\CeCurrency;
use App\Entity\CeCharge;
use App\Entity\CeNetwork;
use App\Entity\CeTown;
use App\Entity\CeCustomer;

class CeorderFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
    		return;
    		$faker = \Faker\Factory::create('fr_FR');

    		for ($i=0; $i < 10; $i++) { 
    			$customer = new CeCustomer();
    							$customer->setFirstName($faker->firstName)
    							->setLastName($faker->lastName)
    							->setMobNum((string)$faker->mobileNumber)
    							->setOtherNumber(array("one"=>$faker->mobileNumber))
    							->setCustNote($faker->word)
    							->setDatec(new \DateTime())
    							->setTms(new \DateTime());
    			$manager->persist($customer);
    		}

			$netWorks = ["MTN"=>"MTN Cameroon","ORA"=>"Orange Cameroon","CMT"=>"Camtel","NEX"=>"Nextell"];
    		foreach ($netWorks as $code => $label) {
    			$network = new CeNetwork();
    			$network->setNetCode($code)
    					->setLabel($label)
    					->setDatec(new \DateTime());
    			$manager->persist($network);
    		}

    		$OrderTypes = ["DEP"=>"Depo","FEE"=>"Gerer","CAS"=>"Cash","EUT"=>"Express Union Transfer"];
    		foreach ($OrderTypes as $key => $value) {
    			$OrderType = new OrderType();
    			$OrderType->setOrderTypeCode($key)
    						->setOrderTypeLabel($value);
    			$manager->persist($OrderType);
    		}

    		$status_s = ["Pending"=>"Status yet to be done","Complete"=>"The Order has been Complete","Abandoned"=>"This status has simply been abandoned", "Cancelled"=>"Cancelled Status"];
    		$j =1;
    		foreach ($status_s as $label => $description) {
    			$newStatus = new CeStatus();
    			$newStatus->setStatusCode($j)
    						->setLabel($label)
    						->setDescription($description);
    			$manager->persist($newStatus);
    			$j+=1;
    		}

    		$currencies = ["XAF"=>"Franc CFA","AED"=>"Arab Emirates Dirham","USD"=>"United States Dollar"];
    		foreach ($currencies as $code => $label) {
    			$currency = new CeCurrency();
    			$currency->setCodeIso($code)
    						->setLabel($label)
    						->setUnicode(null)
    						->setActive(1);
    			$manager->persist($currency);
    		}

    		$towns = ["DLA"=>"Littoral","YDE"=>"Yaounde","BDA"=>"Bamaenda"];
    		foreach ($towns as $code => $label) {
    			$town = new CeTown();
    			$town->setTownCode($code)
    						->setTownRegion($label)
    						->setDatetime(new \DateTime())
    						->setTms(new \DateTime());
    			$manager->persist($town);
    		}

    		$charges = ["10K"=>["cfrom"=>1,"cto"=>10000,"cAmount"=>150],
    					"30K"=>["cfrom"=>10001,"cto"=>30000,"cAmount"=>400],
    					"50K"=>["cfrom"=>30001,"cto"=>50001,"cAmount"=>700]
    					];
    		foreach ($charges as $code => $value) {
    			$charge = new CeCharge();
    			$charge->setChargeCode($code)
    					->setChargeFrom($value['cfrom'])
    					->setChargeTo($value['cto'])
    					->setDescription($faker->text(40))
    					->setChargeAmount($value['cAmount']);
    			$manager->persist($charge);
    		}
      //$manager->flush();
    }
}
