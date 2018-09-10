<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CeAccountEntryRepository")
 */
class CeAccountEntry
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $ceAmount;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isDebit;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CeAccount", inversedBy="fkCeAccountEntries")
     * @ORM\JoinColumn(nullable=false)
     */
    private $fkCeAccount;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Ceorder", inversedBy="fkCeAccountEntries")
     * @ORM\JoinColumn(nullable=true)
     */
    private $fkCeOrder;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CeCustomer", inversedBy="fkCeAccountEntries")
     * @Assert\Type(type="App\Entity\CeCustomer")
     * @Assert\Valid()
     */
    private $fkCeCustomer;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CeAccount", inversedBy="ceFromAccountEntries")
     */
    private $ceFromAccount;

    /**
     * @ORM\Column(type="datetime")
     */
    private $datec;

    /**
     * @ORM\Column(type="datetime")
     */
    private $tms;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CeUser", inversedBy="ceAccountEntries")
     * @ORM\JoinColumn(nullable=false)
     */
    private $ceCreatedBy;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ceNote;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCeAmount(): ?int
    {
        return $this->ceAmount;
    }

    public function setCeAmount(int $ceAmount): self
    {
        $this->ceAmount = $ceAmount;

        return $this;
    }

    public function getIsDebit(): ?bool
    {
        return $this->isDebit;
    }

    public function setIsDebit(bool $isDebit): self
    {
        $this->isDebit = $isDebit;

        return $this;
    }

    public function getFkCeAccount(): ?CeAccount
    {
        return $this->fkCeAccount;
    }

    public function setFkCeAccount(?CeAccount $fkCeAccount): self
    {
        $this->fkCeAccount = $fkCeAccount;

        return $this;
    }

    public function getFkCeOrder(): ?Ceorder
    {
        return $this->fkCeOrder;
    }

    public function setFkCeOrder(?Ceorder $fkCeOrder): self
    {
        $this->fkCeOrder = $fkCeOrder;

        return $this;
    }

    public function getFkCeCustomer(): ?CeCustomer
    {
        return $this->fkCeCustomer;
    }

    public function setFkCeCustomer(?CeCustomer $fkCeCustomer): self
    {
        $this->fkCeCustomer = $fkCeCustomer;

        return $this;
    }

    public function getCeFromAccount(): ?CeAccount
    {
        return $this->ceFromAccount;
    }

    public function setCeFromAccount(?CeAccount $ceFromAccount): self
    {
        $this->ceFromAccount = $ceFromAccount;

        return $this;
    }

    public function getDatec(): ?\DateTimeInterface
    {
        return $this->datec;
    }

    public function setDatec(\DateTimeInterface $datec): self
    {
        $this->datec = $datec;

        return $this;
    }

    public function getTms(): ?\DateTimeInterface
    {
        return $this->tms;
    }

    public function setTms(\DateTimeInterface $tms): self
    {
        $this->tms = $tms;

        return $this;
    }

    public function getCeCreatedBy(): ?CeUser
    {
        return $this->ceCreatedBy;
    }

    public function setCeCreatedBy(?CeUser $ceCreatedBy): self
    {
        $this->ceCreatedBy = $ceCreatedBy;

        return $this;
    }

    public function getCeNote(): ?string
    {
        return $this->ceNote;
    }

    public function setCeNote(?string $ceNote): self
    {
        $this->ceNote = $ceNote;

        return $this;
    }
}
