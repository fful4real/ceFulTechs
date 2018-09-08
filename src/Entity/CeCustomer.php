<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CeCustomerRepository")
 */
class CeCustomer
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
    private $firstName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lastName;

    /**
     * @ORM\Column(type="string", length=64)
     * @Assert\Regex(
     *     pattern="/^[0-9]+$/",
     *     match=true,
     *     message="Only numbers are accepted")
     * @Assert\Length(min=9, max=9,
     *              minMessage="Your number must not be less than {{ limit }} digits",
     *              maxMessage="Your number must not be greater than {{ limit }} digits")
     * @Assert\Regex(
     *     pattern="/^65|67|69|66/",
     *     match=true,
     *     message="Invalid Cameroon number")
     */
    private $mobNum;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $otherNumber;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $custNote;

    /**
     * @ORM\Column(type="datetime")
     */
    private $datec;

    /**
     * @ORM\Column(type="datetime")
     */
    private $tms;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Ceorder", mappedBy="fkCeCustomer")
     */
    private $fkCeCustomer;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\CeAccountEntry", mappedBy="fkCeCustomer")
     */
    private $fkCeAccountEntries;

    public function __construct()
    {
        $this->fkCeCustomer = new ArrayCollection();
        $this->fkCeAccountEntries = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getMobNum(): ?string
    {
        return $this->mobNum;
    }

    public function setMobNum(string $mobNum): self
    {
        $this->mobNum = $mobNum;

        return $this;
    }

    public function getOtherNumber(): ?string
    {
        return $this->otherNumber;
    }

    public function setOtherNumber(?string $otherNumber): self
    {
        $this->otherNumber = $otherNumber;

        return $this;
    }

    public function getCustNote(): ?string
    {
        return $this->custNote;
    }

    public function setCustNote(?string $custNote): self
    {
        $this->custNote = $custNote;

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
     * @return Collection|Ceorder[]
     */
    public function getFkCeCustomer(): Collection
    {
        return $this->fkCeCustomer;
    }

    public function addFkCeCustomer(Ceorder $fkCeCustomer): self
    {
        if (!$this->fkCeCustomer->contains($fkCeCustomer)) {
            $this->fkCeCustomer[] = $fkCeCustomer;
            $fkCeCustomer->setFkCeCustomer($this);
        }

        return $this;
    }

    public function removeFkCeCustomer(Ceorder $fkCeCustomer): self
    {
        if ($this->fkCeCustomer->contains($fkCeCustomer)) {
            $this->fkCeCustomer->removeElement($fkCeCustomer);
            // set the owning side to null (unless already changed)
            if ($fkCeCustomer->getFkCeCustomer() === $this) {
                $fkCeCustomer->setFkCeCustomer(null);
            }
        }

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
            $fkCeAccountEntry->setFkCeCustomer($this);
        }

        return $this;
    }

    public function removeFkCeAccountEntry(CeAccountEntry $fkCeAccountEntry): self
    {
        if ($this->fkCeAccountEntries->contains($fkCeAccountEntry)) {
            $this->fkCeAccountEntries->removeElement($fkCeAccountEntry);
            // set the owning side to null (unless already changed)
            if ($fkCeAccountEntry->getFkCeCustomer() === $this) {
                $fkCeAccountEntry->setFkCeCustomer(null);
            }
        }

        return $this;
    }
}
