<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CeCurrencyRepository")
 */
class CeCurrency
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=3)
     */
    private $codeIso;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $label;

    /**
     * @ORM\Column(type="string", length=32, nullable=true)
     */
    private $unicode;

    /**
     * @ORM\Column(type="smallint")
     */
    private $active;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Ceorder", mappedBy="ceCurrency")
     */
    private $ceCurrency;

    public function __construct()
    {
        $this->ceCurrency = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodeIso(): ?string
    {
        return $this->codeIso;
    }

    public function setCodeIso(string $codeIso): self
    {
        $this->codeIso = $codeIso;

        return $this;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function getUnicode(): ?string
    {
        return $this->unicode;
    }

    public function setUnicode(?string $unicode): self
    {
        $this->unicode = $unicode;

        return $this;
    }

    public function getActive(): ?int
    {
        return $this->active;
    }

    public function setActive(int $active): self
    {
        $this->active = $active;

        return $this;
    }

    /**
     * @return Collection|Ceorder[]
     */
    public function getCeCurrency(): Collection
    {
        return $this->ceCurrency;
    }

    public function addCeCurrency(Ceorder $ceCurrency): self
    {
        if (!$this->ceCurrency->contains($ceCurrency)) {
            $this->ceCurrency[] = $ceCurrency;
            $ceCurrency->setCeCurrency($this);
        }

        return $this;
    }

    public function removeCeCurrency(Ceorder $ceCurrency): self
    {
        if ($this->ceCurrency->contains($ceCurrency)) {
            $this->ceCurrency->removeElement($ceCurrency);
            // set the owning side to null (unless already changed)
            if ($ceCurrency->getCeCurrency() === $this) {
                $ceCurrency->setCeCurrency(null);
            }
        }

        return $this;
    }
}
