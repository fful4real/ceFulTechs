<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CeChargeRepository")
 */
class CeCharge
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
    private $chargeCode;

    /**
     * @ORM\Column(type="integer")
     */
    private $chargeFrom;

    /**
     * @ORM\Column(type="integer")
     */
    private $chargeTo;

    /**
     * @ORM\Column(type="integer")
     */
    private $chargeAmount;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CeNetwork")
     * @ORM\JoinColumn(nullable=false)
     */
    private $fkNetwork;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getChargeCode(): ?string
    {
        return $this->chargeCode;
    }

    public function setChargeCode(string $chargeCode): self
    {
        $this->chargeCode = $chargeCode;

        return $this;
    }

    public function getChargeFrom(): ?int
    {
        return $this->chargeFrom;
    }

    public function setChargeFrom(int $chargeFrom): self
    {
        $this->chargeFrom = $chargeFrom;

        return $this;
    }

    public function getChargeTo(): ?int
    {
        return $this->chargeTo;
    }

    public function setChargeTo(int $chargeTo): self
    {
        $this->chargeTo = $chargeTo;

        return $this;
    }

    public function getChargeAmount(): ?int
    {
        return $this->chargeAmount;
    }

    public function setChargeAmount(int $chargeAmount): self
    {
        $this->chargeAmount = $chargeAmount;

        return $this;
    }

    public function getFkNetwork(): ?CeNetwork
    {
        return $this->fkNetwork;
    }

    public function setFkNetwork(?CeNetwork $fkNetwork): self
    {
        $this->fkNetwork = $fkNetwork;

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
}
