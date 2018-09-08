<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CeBankRepository")
 */
class CeBank
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CeBankType", inversedBy="ceBankType")
     * @ORM\JoinColumn(nullable=false)
     */
    private $ceBankType;

    /**
     * @ORM\Column(type="string", length=32)
     */
    private $ceBankCode;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ceBankName;

    /**
     * @ORM\Column(type="datetime")
     */
    private $datec;

    /**
     * @ORM\Column(type="datetime")
     */
    private $tms;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\CeAccount", mappedBy="ceBank")
     */
    private $fkCeAccount;

    public function __construct()
    {
        $this->fkCeAccount = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCeBankType(): ?ceBankType
    {
        return $this->ceBankType;
    }

    public function setCeBankType(?CeBankType $ceBankType): self
    {
        $this->ceBankType = $ceBankType;

        return $this;
    }

    public function getCeBankCode(): ?string
    {
        return $this->ceBankCode;
    }

    public function setCeBankCode(string $ceBankCode): self
    {
        $this->ceBankCode = $ceBankCode;

        return $this;
    }

    public function getCeBankName(): ?string
    {
        return $this->ceBankName;
    }

    public function setCeBankName(string $ceBankName): self
    {
        $this->ceBankName = $ceBankName;

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
     * @return Collection|CeAccount[]
     */
    public function getFkCeAccount(): Collection
    {
        return $this->fkCeAccount;
    }

    public function addFkCeAccount(CeAccount $fkCeAccount): self
    {
        if (!$this->fkCeAccount->contains($fkCeAccount)) {
            $this->fkCeAccount[] = $fkCeAccount;
            $fkCeAccount->setCeBank($this);
        }

        return $this;
    }

    public function removeFkCeAccount(CeAccount $fkCeAccount): self
    {
        if ($this->fkCeAccount->contains($fkCeAccount)) {
            $this->fkCeAccount->removeElement($fkCeAccount);
            // set the owning side to null (unless already changed)
            if ($fkCeAccount->getCeBank() === $this) {
                $fkCeAccount->setCeBank(null);
            }
        }

        return $this;
    }
}
