<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CeNetworkRepository")
 */
class CeNetwork
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
    private $netCode;

    /**
     * @ORM\Column(type="array")
     */
    private $netInitial;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $label;

    /**
     * @ORM\Column(type="datetime")
     */
    private $datec;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Ceorder", mappedBy="ceNetwork")
     */
    private $ceNetwork;

    public function __construct()
    {
        $this->ceNetwork = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNetCode(): ?string
    {
        return $this->netCode;
    }

    public function setNetCode(string $netCode): self
    {
        $this->netCode = $netCode;

        return $this;
    }

    public function getNetInitial(): ?array
    {
        return $this->netInitial;
    }

    public function setNetInitial(array $netInitial): self
    {
        $this->netInitial = $netInitial;

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

    public function getDatec(): ?\DateTimeInterface
    {
        return $this->datec;
    }

    public function setDatec(\DateTimeInterface $datec): self
    {
        $this->datec = $datec;

        return $this;
    }

    /**
     * @return Collection|Ceorder[]
     */
    public function getCeNetwork(): Collection
    {
        return $this->ceNetwork;
    }

    public function addCeNetwork(Ceorder $ceNetwork): self
    {
        if (!$this->ceNetwork->contains($ceNetwork)) {
            $this->ceNetwork[] = $ceNetwork;
            $ceNetwork->setCeNetwork($this);
        }

        return $this;
    }

    public function removeCeNetwork(Ceorder $ceNetwork): self
    {
        if ($this->ceNetwork->contains($ceNetwork)) {
            $this->ceNetwork->removeElement($ceNetwork);
            // set the owning side to null (unless already changed)
            if ($ceNetwork->getCeNetwork() === $this) {
                $ceNetwork->setCeNetwork(null);
            }
        }

        return $this;
    }
}
