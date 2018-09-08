<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CeorderRepository")
 */
class Ceorder
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $ceOrderref;

    /**
     * @ORM\Column(type="integer")
     * @Assert\Regex(
     *     pattern="/^[0-9]+$/",
     *     match=true,
     *     message="Only numbers are accepted")
     */
    private $ceAmount;

    /**
     * @ORM\Column(type="integer")
     */
    private $ceOrderCharge;

    /**
     * @ORM\Column(type="integer")
     */
    private $ceOrderTotal;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Regex(
     *     pattern="/^[0-9]+$/",
     *     match=true,
     *     message="Only numbers are accepted")
     * @Assert\Regex(
     *     pattern="/^65|67|69|66|68/",
     *     match=true,
     *     message="Invalid Cameroon number")
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min=9, max=9,
     *              minMessage="Your number must not be less than {{ limit }} digits",
     *              maxMessage="Your number must not be greater than {{ limit }} digits")
     */
    private $ceMobnum;

    /**
     * @ORM\Column(type="datetime")
     */
    private $ceDatec;

    /**
     * @ORM\Column(type="datetime")
     */
    private $ceTms;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\OrderType", inversedBy="orderType")
     * @ORM\JoinColumn(nullable=false)
     */
    private $orderType;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CeCurrency", inversedBy="ceCurrency")
     * @ORM\JoinColumn(nullable=false)
     */
    private $ceCurrency;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CeStatus", inversedBy="ceStatus")
     * @ORM\JoinColumn(nullable=false)
     */
    private $ceStatus;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CeNetwork", inversedBy="ceNetwork")
     * @ORM\JoinColumn(nullable=false)
     */
    private $ceNetwork;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CeCustomer", inversedBy="fkCeCustomer")
     * @ORM\JoinColumn(nullable=false)
     */
    private $fkCeCustomer;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CeTown", inversedBy="fkCeTown")
     * @ORM\JoinColumn(nullable=false)
     */
    private $fkCeTown;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CeUser", inversedBy="ceCreatedBy")
     */
    private $ceCreatedBy;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CeUser", inversedBy="ceDoneBy")
     */
    private $ceDoneBy;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCeOrderref(): ?string
    {
        return $this->ceOrderref;
    }

    public function setCeOrderref(string $ceOrderref): self
    {
        $this->ceOrderref = $ceOrderref;

        return $this;
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

    public function getCeOrderCharge(): ?int
    {
        return $this->ceOrderCharge;
    }

    public function setCeOrderCharge(int $ceOrderCharge): self
    {
        $this->ceOrderCharge = $ceOrderCharge;

        return $this;
    }

    public function getCeOrderTotal(): ?int
    {
        return $this->ceOrderTotal;
    }

    public function setCeOrderTotal(int $ceOrderTotal): self
    {
        $this->ceOrderTotal = $ceOrderTotal;

        return $this;
    }

    public function getCeMobnum(): ?string
    {
        return $this->ceMobnum;
    }

    public function setCeMobnum(string $ceMobnum): self
    {
        $this->ceMobnum = $ceMobnum;

        return $this;
    }

    public function getCeDatec(): ?\DateTimeInterface
    {
        return $this->ceDatec;
    }

    public function setCeDatec(\DateTimeInterface $ceDatec): self
    {
        $this->ceDatec = $ceDatec;

        return $this;
    }

    public function getCeTms(): ?\DateTimeInterface
    {
        return $this->ceTms;
    }

    public function setCeTms(\DateTimeInterface $ceTms): self
    {
        $this->ceTms = $ceTms;

        return $this;
    }

    public function getOrderType(): ?OrderType
    {
        return $this->orderType;
    }

    public function setOrderType(?OrderType $orderType): self
    {
        $this->orderType = $orderType;

        return $this;
    }

    public function getCeCurrency(): ?CeCurrency
    {
        return $this->ceCurrency;
    }

    public function setCeCurrency(?CeCurrency $ceCurrency): self
    {
        $this->ceCurrency = $ceCurrency;

        return $this;
    }

    public function getCeStatus(): ?CeStatus
    {
        return $this->ceStatus;
    }

    public function setCeStatus(?CeStatus $ceStatus): self
    {
        $this->ceStatus = $ceStatus;

        return $this;
    }

    public function getCeNetwork(): ?CeNetwork
    {
        return $this->ceNetwork;
    }

    public function setCeNetwork(?CeNetwork $ceNetwork): self
    {
        $this->ceNetwork = $ceNetwork;

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

    public function getFkCeTown(): ?CeTown
    {
        return $this->fkCeTown;
    }

    public function setFkCeTown(?CeTown $fkCeTown): self
    {
        $this->fkCeTown = $fkCeTown;

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

    public function getCeDoneBy(): ?CeUser
    {
        return $this->ceDoneBy;
    }

    public function setCeDoneBy(?CeUser $ceDoneBy): self
    {
        $this->ceDoneBy = $ceDoneBy;

        return $this;
    }
}
