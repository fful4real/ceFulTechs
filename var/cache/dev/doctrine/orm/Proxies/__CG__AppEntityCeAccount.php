<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class CeAccount extends \App\Entity\CeAccount implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\CeAccount' . "\0" . 'id', '' . "\0" . 'App\\Entity\\CeAccount' . "\0" . 'ceAccountCode', '' . "\0" . 'App\\Entity\\CeAccount' . "\0" . 'ceAccountNumber', '' . "\0" . 'App\\Entity\\CeAccount' . "\0" . 'ceAccountName', '' . "\0" . 'App\\Entity\\CeAccount' . "\0" . 'ceAccountBalance', '' . "\0" . 'App\\Entity\\CeAccount' . "\0" . 'ceAccountActive', '' . "\0" . 'App\\Entity\\CeAccount' . "\0" . 'datec', '' . "\0" . 'App\\Entity\\CeAccount' . "\0" . 'tms', '' . "\0" . 'App\\Entity\\CeAccount' . "\0" . 'ceBank', '' . "\0" . 'App\\Entity\\CeAccount' . "\0" . 'fkCeAccountType', '' . "\0" . 'App\\Entity\\CeAccount' . "\0" . 'isMobileMoney', '' . "\0" . 'App\\Entity\\CeAccount' . "\0" . 'isCommercial', '' . "\0" . 'App\\Entity\\CeAccount' . "\0" . 'isBankAccount', '' . "\0" . 'App\\Entity\\CeAccount' . "\0" . 'fkCeAccountEntries', '' . "\0" . 'App\\Entity\\CeAccount' . "\0" . 'ceFromAccountEntries', '' . "\0" . 'App\\Entity\\CeAccount' . "\0" . 'ceCreatedBy'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\CeAccount' . "\0" . 'id', '' . "\0" . 'App\\Entity\\CeAccount' . "\0" . 'ceAccountCode', '' . "\0" . 'App\\Entity\\CeAccount' . "\0" . 'ceAccountNumber', '' . "\0" . 'App\\Entity\\CeAccount' . "\0" . 'ceAccountName', '' . "\0" . 'App\\Entity\\CeAccount' . "\0" . 'ceAccountBalance', '' . "\0" . 'App\\Entity\\CeAccount' . "\0" . 'ceAccountActive', '' . "\0" . 'App\\Entity\\CeAccount' . "\0" . 'datec', '' . "\0" . 'App\\Entity\\CeAccount' . "\0" . 'tms', '' . "\0" . 'App\\Entity\\CeAccount' . "\0" . 'ceBank', '' . "\0" . 'App\\Entity\\CeAccount' . "\0" . 'fkCeAccountType', '' . "\0" . 'App\\Entity\\CeAccount' . "\0" . 'isMobileMoney', '' . "\0" . 'App\\Entity\\CeAccount' . "\0" . 'isCommercial', '' . "\0" . 'App\\Entity\\CeAccount' . "\0" . 'isBankAccount', '' . "\0" . 'App\\Entity\\CeAccount' . "\0" . 'fkCeAccountEntries', '' . "\0" . 'App\\Entity\\CeAccount' . "\0" . 'ceFromAccountEntries', '' . "\0" . 'App\\Entity\\CeAccount' . "\0" . 'ceCreatedBy'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (CeAccount $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getCeAccountCode(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCeAccountCode', []);

        return parent::getCeAccountCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setCeAccountCode(string $ceAccountCode): \App\Entity\CeAccount
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCeAccountCode', [$ceAccountCode]);

        return parent::setCeAccountCode($ceAccountCode);
    }

    /**
     * {@inheritDoc}
     */
    public function getCeAccountNumber(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCeAccountNumber', []);

        return parent::getCeAccountNumber();
    }

    /**
     * {@inheritDoc}
     */
    public function setCeAccountNumber(int $ceAccountNumber): \App\Entity\CeAccount
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCeAccountNumber', [$ceAccountNumber]);

        return parent::setCeAccountNumber($ceAccountNumber);
    }

    /**
     * {@inheritDoc}
     */
    public function getCeAccountName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCeAccountName', []);

        return parent::getCeAccountName();
    }

    /**
     * {@inheritDoc}
     */
    public function setCeAccountName(string $ceAccountName): \App\Entity\CeAccount
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCeAccountName', [$ceAccountName]);

        return parent::setCeAccountName($ceAccountName);
    }

    /**
     * {@inheritDoc}
     */
    public function getCeAccountBalance(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCeAccountBalance', []);

        return parent::getCeAccountBalance();
    }

    /**
     * {@inheritDoc}
     */
    public function setCeAccountBalance(int $ceAccountBalance): \App\Entity\CeAccount
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCeAccountBalance', [$ceAccountBalance]);

        return parent::setCeAccountBalance($ceAccountBalance);
    }

    /**
     * {@inheritDoc}
     */
    public function getCeAccountActive(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCeAccountActive', []);

        return parent::getCeAccountActive();
    }

    /**
     * {@inheritDoc}
     */
    public function setCeAccountActive(int $ceAccountActive): \App\Entity\CeAccount
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCeAccountActive', [$ceAccountActive]);

        return parent::setCeAccountActive($ceAccountActive);
    }

    /**
     * {@inheritDoc}
     */
    public function getDatec(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDatec', []);

        return parent::getDatec();
    }

    /**
     * {@inheritDoc}
     */
    public function setDatec(\DateTimeInterface $datec): \App\Entity\CeAccount
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDatec', [$datec]);

        return parent::setDatec($datec);
    }

    /**
     * {@inheritDoc}
     */
    public function getTms(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTms', []);

        return parent::getTms();
    }

    /**
     * {@inheritDoc}
     */
    public function setTms(\DateTimeInterface $tms): \App\Entity\CeAccount
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTms', [$tms]);

        return parent::setTms($tms);
    }

    /**
     * {@inheritDoc}
     */
    public function getCeAccountEntries(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCeAccountEntries', []);

        return parent::getCeAccountEntries();
    }

    /**
     * {@inheritDoc}
     */
    public function addCeAccountEntry(\App\Entity\CeAccountEntry $ceAccountEntry): \App\Entity\CeAccount
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCeAccountEntry', [$ceAccountEntry]);

        return parent::addCeAccountEntry($ceAccountEntry);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCeAccountEntry(\App\Entity\CeAccountEntry $ceAccountEntry): \App\Entity\CeAccount
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCeAccountEntry', [$ceAccountEntry]);

        return parent::removeCeAccountEntry($ceAccountEntry);
    }

    /**
     * {@inheritDoc}
     */
    public function getCeBank(): ?\App\Entity\CeBank
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCeBank', []);

        return parent::getCeBank();
    }

    /**
     * {@inheritDoc}
     */
    public function setCeBank(?\App\Entity\CeBank $ceBank): \App\Entity\CeAccount
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCeBank', [$ceBank]);

        return parent::setCeBank($ceBank);
    }

    /**
     * {@inheritDoc}
     */
    public function getFkCeAccountType(): ?\App\Entity\CeAccountType
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFkCeAccountType', []);

        return parent::getFkCeAccountType();
    }

    /**
     * {@inheritDoc}
     */
    public function setFkCeAccountType(?\App\Entity\CeAccountType $fkCeAccountType): \App\Entity\CeAccount
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFkCeAccountType', [$fkCeAccountType]);

        return parent::setFkCeAccountType($fkCeAccountType);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsMobileMoney(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsMobileMoney', []);

        return parent::getIsMobileMoney();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsMobileMoney(bool $isMobileMoney): \App\Entity\CeAccount
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsMobileMoney', [$isMobileMoney]);

        return parent::setIsMobileMoney($isMobileMoney);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsCommercial(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsCommercial', []);

        return parent::getIsCommercial();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsCommercial(bool $isCommercial): \App\Entity\CeAccount
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsCommercial', [$isCommercial]);

        return parent::setIsCommercial($isCommercial);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsBankAccount(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsBankAccount', []);

        return parent::getIsBankAccount();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsBankAccount(bool $isBankAccount): \App\Entity\CeAccount
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsBankAccount', [$isBankAccount]);

        return parent::setIsBankAccount($isBankAccount);
    }

    /**
     * {@inheritDoc}
     */
    public function getFkCeAccountEntries(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFkCeAccountEntries', []);

        return parent::getFkCeAccountEntries();
    }

    /**
     * {@inheritDoc}
     */
    public function addFkCeAccountEntry(\App\Entity\CeAccountEntry $fkCeAccountEntry): \App\Entity\CeAccount
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addFkCeAccountEntry', [$fkCeAccountEntry]);

        return parent::addFkCeAccountEntry($fkCeAccountEntry);
    }

    /**
     * {@inheritDoc}
     */
    public function removeFkCeAccountEntry(\App\Entity\CeAccountEntry $fkCeAccountEntry): \App\Entity\CeAccount
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeFkCeAccountEntry', [$fkCeAccountEntry]);

        return parent::removeFkCeAccountEntry($fkCeAccountEntry);
    }

    /**
     * {@inheritDoc}
     */
    public function getCeFromAccountEntries(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCeFromAccountEntries', []);

        return parent::getCeFromAccountEntries();
    }

    /**
     * {@inheritDoc}
     */
    public function addCeFromAccountEntry(\App\Entity\CeAccountEntry $ceFromAccountEntry): \App\Entity\CeAccount
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCeFromAccountEntry', [$ceFromAccountEntry]);

        return parent::addCeFromAccountEntry($ceFromAccountEntry);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCeFromAccountEntry(\App\Entity\CeAccountEntry $ceFromAccountEntry): \App\Entity\CeAccount
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCeFromAccountEntry', [$ceFromAccountEntry]);

        return parent::removeCeFromAccountEntry($ceFromAccountEntry);
    }

    /**
     * {@inheritDoc}
     */
    public function getCeCreatedBy(): ?\App\Entity\CeUser
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCeCreatedBy', []);

        return parent::getCeCreatedBy();
    }

    /**
     * {@inheritDoc}
     */
    public function setCeCreatedBy(?\App\Entity\CeUser $ceCreatedBy): \App\Entity\CeAccount
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCeCreatedBy', [$ceCreatedBy]);

        return parent::setCeCreatedBy($ceCreatedBy);
    }

}