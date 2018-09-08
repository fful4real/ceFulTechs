<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CeStatusRepository")
 */
class CeStatus
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="smallint")
     */
    private $statusCode;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $label;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Ceorder", mappedBy="ceStatus")
     */
    private $ceStatus;

    public function __construct()
    {
        $this->ceStatus = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStatusCode(): ?int
    {
        return $this->statusCode;
    }

    public function setStatusCode(int $statusCode): self
    {
        $this->statusCode = $statusCode;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Collection|Ceorder[]
     */
    public function getCeStatus(): Collection
    {
        return $this->ceStatus;
    }

    public function addCeStatus(Ceorder $ceStatus): self
    {
        if (!$this->ceStatus->contains($ceStatus)) {
            $this->ceStatus[] = $ceStatus;
            $ceStatus->setCeStatus($this);
        }

        return $this;
    }

    public function removeCeStatus(Ceorder $ceStatus): self
    {
        if ($this->ceStatus->contains($ceStatus)) {
            $this->ceStatus->removeElement($ceStatus);
            // set the owning side to null (unless already changed)
            if ($ceStatus->getCeStatus() === $this) {
                $ceStatus->setCeStatus(null);
            }
        }

        return $this;
    }
}
