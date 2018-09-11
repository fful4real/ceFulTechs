<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CeAccountRepository")
 * @UniqueEntity(
 * fields={"ceAccountNumber", "ceAccountCode"},
 * message="Account Number Exists"
 *)
 * @UniqueEntity(
 * fields={"ceAccountCode"},
 * message="Account Code Exists"
 *)
 */
class CeAccount
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=32)
     */
    private $ceAccountCode;

    /**
     * @ORM\Column(type="string", length=32)
     * @Assert\Regex(
     *     pattern="/^[0-9]+$/",
     *     match=true,
     *     message="Only numbers are accepted")
     */
    private $ceAccountNumber;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ceAccountName;

    /**
     * @ORM\Column(type="integer")
     * @Assert\Regex(
     *     pattern="/^[0-9]+$/",
     *     match=true,
     *     message="Only numbers are accepted")
     */
    private $ceAccountBalance;

    /**
     * @ORM\Column(type="smallint")* @ORM\Column(type="string", length=255)
     * @Assert\Regex(
     *     pattern="/^0|1$/",
     *     match=true,
     *     message="Only 0 or 1 is accepted")
     */
    private $ceAccountActive;

    /**
     * @ORM\Column(type="datetime")
     */
    private $datec;

    /**
     * @ORM\Column(type="datetime")
     */
    private $tms;


    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CeBank", inversedBy="fkCeAccount")
     * @ORM\JoinColumn(nullable=false)
     */
    private $ceBank;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CeAccountType", inversedBy="fkCeAccountType")
     * @ORM\JoinColumn(nullable=false)
     */
    private $fkCeAccountType;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isMobileMoney;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isCommercial;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isBankAccount;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\CeAccountEntry", mappedBy="fkCeAccount", orphanRemoval=true)
     */
    private $fkCeAccountEntries;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\CeAccountEntry", mappedBy="ceFromAccount")
     */
    private $ceFromAccountEntries;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CeUser", inversedBy="ceAccountsCreated")
     * @ORM\JoinColumn(nullable=false)
     */
    private $ceCreatedBy;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isCash;

    public function __construct()
    {
        $this->fkCeAccountEntries = new ArrayCollection();
        $this->ceFromAccountEntries = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCeAccountCode(): ?string
    {
        return $this->ceAccountCode;
    }

    public function setCeAccountCode(string $ceAccountCode): self
    {
        $this->ceAccountCode = $ceAccountCode;

        return $this;
    }

    public function getCeAccountNumber(): ?int
    {
        return $this->ceAccountNumber;
    }

    public function setCeAccountNumber(int $ceAccountNumber): self
    {
        $this->ceAccountNumber = $ceAccountNumber;

        return $this;
    }

    public function getCeAccountName(): ?string
    {
        return $this->ceAccountName;
    }

    public function setCeAccountName(string $ceAccountName): self
    {
        $this->ceAccountName = $ceAccountName;

        return $this;
    }

    public function getCeAccountBalance(): ?int
    {
        return $this->ceAccountBalance;
    }

    public function setCeAccountBalance(int $ceAccountBalance): self
    {
        $this->ceAccountBalance = $ceAccountBalance;

        return $this;
    }

    public function getCeAccountActive(): ?int
    {
        return $this->ceAccountActive;
    }

    public function setCeAccountActive(int $ceAccountActive): self
    {
        $this->ceAccountActive = $ceAccountActive;

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

    /**
     * @return Collection|CeAccountEntries[]
     */
    public function getCeAccountEntries(): Collection
    {
        return $this->ceAccountEntries;
    }

    public function addCeAccountEntry(CeAccountEntry $ceAccountEntry): self
    {
        if (!$this->ceAccountEntries->contains($ceAccountEntry)) {
            $this->ceAccountEntries[] = $ceAccountEntry;
            $ceAccountEntry->setFkCeAccount($this);
        }

        return $this;
    }

    public function removeCeAccountEntry(CeAccountEntry $ceAccountEntry): self
    {
        if ($this->ceAccountEntries->contains($ceAccountEntry)) {
            $this->ceAccountEntries->removeElement($ceAccountEntry);
            // set the owning side to null (unless already changed)
            if ($ceAccountEntry->getFkCeAccount() === $this) {
                $ceAccountEntry->setFkCeAccount(null);
            }
        }

        return $this;
    }

    public function getCeBank(): ?CeBank
    {
        return $this->ceBank;
    }

    public function setCeBank(?CeBank $ceBank): self
    {
        $this->ceBank = $ceBank;

        return $this;
    }

    public function getFkCeAccountType(): ?CeAccountType
    {
        return $this->fkCeAccountType;
    }

    public function setFkCeAccountType(?CeAccountType $fkCeAccountType): self
    {
        $this->fkCeAccountType = $fkCeAccountType;

        return $this;
    }

    public function getIsMobileMoney(): ?bool
    {
        return $this->isMobileMoney;
    }

    public function setIsMobileMoney(bool $isMobileMoney): self
    {
        $this->isMobileMoney = $isMobileMoney;

        return $this;
    }

    public function getIsCommercial(): ?bool
    {
        return $this->isCommercial;
    }

    public function setIsCommercial(bool $isCommercial): self
    {
        $this->isCommercial = $isCommercial;

        return $this;
    }

    public function getIsBankAccount(): ?bool
    {
        return $this->isBankAccount;
    }

    public function setIsBankAccount(bool $isBankAccount): self
    {
        $this->isBankAccount = $isBankAccount;

        return $this;
    }

    /**
     * @return Collection|CeAccountEntry[]
     */
    public function getFkCeAccountEntries(): Collection
    {
        return $this->fkCeAccountEntries;
    }

    public function addFkCeAccountEntry(CeAccountEntry $fkCeAccountEntry): self
    {
        if (!$this->fkCeAccountEntries->contains($fkCeAccountEntry)) {
            $this->fkCeAccountEntries[] = $fkCeAccountEntry;
            $fkCeAccountEntry->setFkCeAccount($this);
        }

        return $this;
    }

    public function removeFkCeAccountEntry(CeAccountEntry $fkCeAccountEntry): self
    {
        if ($this->fkCeAccountEntries->contains($fkCeAccountEntry)) {
            $this->fkCeAccountEntries->removeElement($fkCeAccountEntry);
            // set the owning side to null (unless already changed)
            if ($fkCeAccountEntry->getFkCeAccount() === $this) {
                $fkCeAccountEntry->setFkCeAccount(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|CeAccountEntry[]
     */
    public function getCeFromAccountEntries(): Collection
    {
        return $this->ceFromAccountEntries;
    }

    public function addCeFromAccountEntry(CeAccountEntry $ceFromAccountEntry): self
    {
        if (!$this->ceFromAccountEntries->contains($ceFromAccountEntry)) {
            $this->ceFromAccountEntries[] = $ceFromAccountEntry;
            $ceFromAccountEntry->setCeFromAccount($this);
        }

        return $this;
    }

    public function removeCeFromAccountEntry(CeAccountEntry $ceFromAccountEntry): self
    {
        if ($this->ceFromAccountEntries->contains($ceFromAccountEntry)) {
            $this->ceFromAccountEntries->removeElement($ceFromAccountEntry);
            // set the owning side to null (unless already changed)
            if ($ceFromAccountEntry->getCeFromAccount() === $this) {
                $ceFromAccountEntry->setCeFromAccount(null);
            }
        }

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

    public function getIsCash(): ?bool
    {
        return $this->isCash;
    }

    public function setIsCash(?bool $isCash): self
    {
        $this->isCash = $isCash;

        return $this;
    }
}
