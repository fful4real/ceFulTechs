<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\OrderTypeRepository")
 */
class OrderType
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
    private $orderTypeCode;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $orderTypeLabel;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Ceorder", mappedBy="orderType")
     */
    private $orderType;

    public function __construct()
    {
        $this->orderType = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOrderTypeCode(): ?string
    {
        return $this->orderTypeCode;
    }

    public function setOrderTypeCode(string $orderTypeCode): self
    {
        $this->orderTypeCode = $orderTypeCode;

        return $this;
    }

    public function getOrderTypeLabel(): ?string
    {
        return $this->orderTypeLabel;
    }

    public function setOrderTypeLabel(string $orderTypeLabel): self
    {
        $this->orderTypeLabel = $orderTypeLabel;

        return $this;
    }

    /**
     * @return Collection|Ceorder[]
     */
    public function getOrderType(): Collection
    {
        return $this->orderType;
    }

    public function addOrderType(Ceorder $orderType): self
    {
        if (!$this->orderType->contains($orderType)) {
            $this->orderType[] = $orderType;
            $orderType->setOrderType($this);
        }

        return $this;
    }

    public function removeOrderType(Ceorder $orderType): self
    {
        if ($this->orderType->contains($orderType)) {
            $this->orderType->removeElement($orderType);
            // set the owning side to null (unless already changed)
            if ($orderType->getOrderType() === $this) {
                $orderType->setOrderType(null);
            }
        }

        return $this;
    }
}
