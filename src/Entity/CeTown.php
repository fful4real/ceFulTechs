<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CeTownRepository")
 */
class CeTown
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
    private $townCode;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $townName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $townRegion;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $townAlias;

    /**
     * @ORM\Column(type="datetime")
     */
    private $datetime;

    /**
     * @ORM\Column(type="datetime")
     */
    private $tms;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Ceorder", mappedBy="fkCeTown")
     */
    private $fkCeTown;

    public function __construct()
    {
        $this->fkCeTown = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTownCode(): ?string
    {
        return $this->townCode;
    }

    public function setTownCode(string $townCode): self
    {
        $this->townCode = $townCode;

        return $this;
    }

    public function getTownName(): ?string
    {
        return $this->townName;
    }

    public function setTownName(string $townName): self
    {
        $this->townName = $townName;

        return $this;
    }

    public function getTownRegion(): ?string
    {
        return $this->townRegion;
    }

    public function setTownRegion(string $townRegion): self
    {
        $this->townRegion = $townRegion;

        return $this;
    }

    public function getTownAlias(): ?string
    {
        return $this->townAlias;
    }

    public function setTownAlias(string $townAlias): self
    {
        $this->townAlias = $townAlias;

        return $this;
    }

    public function getDatetime(): ?\DateTimeInterface
    {
        return $this->datetime;
    }

    public function setDatetime(\DateTimeInterface $datetime): self
    {
        $this->datetime = $datetime;

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
     * @return Collection|Ceorder[]
     */
    public function getFkCeTown(): Collection
    {
        return $this->fkCeTown;
    }

    public function addFkCeTown(Ceorder $fkCeTown): self
    {
        if (!$this->fkCeTown->contains($fkCeTown)) {
            $this->fkCeTown[] = $fkCeTown;
            $fkCeTown->setFkCeTown($this);
        }

        return $this;
    }

    public function removeFkCeTown(Ceorder $fkCeTown): self
    {
        if ($this->fkCeTown->contains($fkCeTown)) {
            $this->fkCeTown->removeElement($fkCeTown);
            // set the owning side to null (unless already changed)
            if ($fkCeTown->getFkCeTown() === $this) {
                $fkCeTown->setFkCeTown(null);
            }
        }

        return $this;
    }
}
