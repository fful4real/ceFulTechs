<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CeAccountTypeRepository")
 */
class CeAccountType
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ceAccountTypeName;

    /**
     * @ORM\Column(type="string", length=32)
     */
    private $ceAccountTypeCode;

    /**
     * @ORM\Column(type="datetime")
     */
    private $datec;

    /**
     * @ORM\Column(type="datetime")
     */
    private $tms;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\CeAccount", mappedBy="fkCeAccountType")
     */
    private $fkCeAccountType;

    public function __construct()
    {
        $this->fkCeAccountType = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCeAccountTypeName(): ?string
    {
        return $this->ceAccountTypeName;
    }

    public function setCeAccountTypeName(string $ceAccountTypeName): self
    {
        $this->ceAccountTypeName = $ceAccountTypeName;

        return $this;
    }

    public function getCeAccountTypeCode(): ?string
    {
        return $this->ceAccountTypeCode;
    }

    public function setCeAccountTypeCode(string $ceAccountTypeCode): self
    {
        $this->ceAccountTypeCode = $ceAccountTypeCode;

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
    public function getFkCeAccountType(): Collection
    {
        return $this->fkCeAccountType;
    }

    public function addFkCeAccountType(CeAccount $fkCeAccountType): self
    {
        if (!$this->fkCeAccountType->contains($fkCeAccountType)) {
            $this->fkCeAccountType[] = $fkCeAccountType;
            $fkCeAccountType->setFkCeAccountType($this);
        }

        return $this;
    }

    public function removeFkCeAccountType(CeAccount $fkCeAccountType): self
    {
        if ($this->fkCeAccountType->contains($fkCeAccountType)) {
            $this->fkCeAccountType->removeElement($fkCeAccountType);
            // set the owning side to null (unless already changed)
            if ($fkCeAccountType->getFkCeAccountType() === $this) {
                $fkCeAccountType->setFkCeAccountType(null);
            }
        }

        return $this;
    }
}
