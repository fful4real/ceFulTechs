<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CeUserRepository")
 * @UniqueEntity(
 *  fields={"ceEmail"}, 
 *  message="This email is already in use"
 *)
 */
class CeUser implements UserInterface
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
    private $ceFirstName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ceLastName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ceAddress;

    /**
     * @ORM\Column(type="datetime")
     */
    private $ceBirth;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ceMobileNumber;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Email()
     */
    private $ceEmail;

    /**
     * @ORM\Column(type="smallint")
     */
    private $ceAdmin;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $ceNote;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $cePhoto;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ceColor;

    /**
     * @ORM\Column(type="integer")
     */
    private $ceSalary;

    /**
     * @ORM\Column(type="smallint")
     */
    private $ceStatus;

    /**
     * @ORM\Column(type="datetime")
     */
    private $ceDateLastLogin;

    /**
     * @ORM\Column(type="datetime")
     */
    private $datec;

    /**
     * @ORM\Column(type="datetime")
     */
    private $tms;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min="8", minMessage="Min 8 characters for password")
     */

    private $cePassword;

    /**
     * @Assert\EqualTo(propertyPath="cePassword", message="Passwords Should be identical")
    */
    public $ceConfirmPassword;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ceUsername;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Ceorder", mappedBy="ceCreatedBy")
     */
    private $ceCreatedBy;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Ceorder", mappedBy="ceDoneBy")
     */
    private $ceDoneBy;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\CeAccount", mappedBy="ceCreatedBy")
     */
    private $ceAccountsCreated;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\CeAccountEntry", mappedBy="ceCreatedBy")
     */
    private $ceAccountEntries;

    public function __construct()
    {
        $this->ceCreatedBy = new ArrayCollection();
        $this->ceDoneBy = new ArrayCollection();
        $this->ceAccountsCreated = new ArrayCollection();
        $this->ceAccountEntries = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCeFirstName(): ?string
    {
        return $this->ceFirstName;
    }

    public function setCeFirstName(string $ceFirstName): self
    {
        $this->ceFirstName = $ceFirstName;

        return $this;
    }

    public function getCeLastName(): ?string
    {
        return $this->ceLastName;
    }

    public function setCeLastName(string $ceLastName): self
    {
        $this->ceLastName = $ceLastName;

        return $this;
    }

    public function getCeAddress(): ?string
    {
        return $this->ceAddress;
    }

    public function setCeAddress(string $ceAddress): self
    {
        $this->ceAddress = $ceAddress;

        return $this;
    }

    public function getCeBirth(): ?\DateTimeInterface
    {
        return $this->ceBirth;
    }

    public function setCeBirth(\DateTimeInterface $ceBirth): self
    {
        $this->ceBirth = $ceBirth;

        return $this;
    }

    public function getCeMobileNumber(): ?string
    {
        return $this->ceMobileNumber;
    }

    public function setCeMobileNumber(string $ceMobileNumber): self
    {
        $this->ceMobileNumber = $ceMobileNumber;

        return $this;
    }

    public function getCeEmail(): ?string
    {
        return $this->ceEmail;
    }

    public function setCeEmail(string $ceEmail): self
    {
        $this->ceEmail = $ceEmail;

        return $this;
    }

    public function getCeAdmin(): ?int
    {
        return $this->ceAdmin;
    }

    public function setCeAdmin(int $ceAdmin): self
    {
        $this->ceAdmin = $ceAdmin;

        return $this;
    }

    public function getCeNote(): ?string
    {
        return $this->ceNote;
    }

    public function setCeNote(?string $ceNote): self
    {
        $this->ceNote = $ceNote;

        return $this;
    }

    public function getCePhoto(): ?string
    {
        return $this->cePhoto;
    }

    public function setCePhoto(?string $cePhoto): self
    {
        $this->cePhoto = $cePhoto;

        return $this;
    }

    public function getCeColor(): ?string
    {
        return $this->ceColor;
    }

    public function setCeColor(string $ceColor): self
    {
        $this->ceColor = $ceColor;

        return $this;
    }

    public function getCeSalary(): ?int
    {
        return $this->ceSalary;
    }

    public function setCeSalary(int $ceSalary): self
    {
        $this->ceSalary = $ceSalary;

        return $this;
    }

    public function getCeStatus(): ?int
    {
        return $this->ceStatus;
    }

    public function setCeStatus(int $ceStatus): self
    {
        $this->ceStatus = $ceStatus;

        return $this;
    }

    public function getCeDateLastLogin(): ?\DateTimeInterface
    {
        return $this->ceDateLastLogin;
    }

    public function setCeDateLastLogin(\DateTimeInterface $ceDateLastLogin): self
    {
        $this->ceDateLastLogin = $ceDateLastLogin;

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

    public function getCePassword(): ?string
    {
        return $this->cePassword;
    }

    public function setCePassword(string $cePassword): self
    {
        $this->cePassword = $cePassword;

        return $this;
    }

    public function getCeUsername(): ?string
    {
        return $this->ceUsername;
    }

    public function getUsername()
    {
        return $this->ceUsername;
    }

    public function getPassword()
    {
        return $this->cePassword;
    }

    public function getSalt()
    {
        
    }

    public function getRoles()
    {
        return ['ROLE_USER'];
    }

    public function eraseCredentials()
    {

    }

    public function setCeUsername(string $ceUsername): self
    {
        $this->ceUsername = $ceUsername;

        return $this;
    }

    /**
     * @return Collection|Ceorder[]
     */
    public function getCeCreatedBy(): Collection
    {
        return $this->ceCreatedBy;
    }

    public function addCeCreatedBy(Ceorder $ceCreatedBy): self
    {
        if (!$this->ceCreatedBy->contains($ceCreatedBy)) {
            $this->ceCreatedBy[] = $ceCreatedBy;
            $ceCreatedBy->setCeCreatedBy($this);
        }

        return $this;
    }

    public function removeCeCreatedBy(Ceorder $ceCreatedBy): self
    {
        if ($this->ceCreatedBy->contains($ceCreatedBy)) {
            $this->ceCreatedBy->removeElement($ceCreatedBy);
            // set the owning side to null (unless already changed)
            if ($ceCreatedBy->getCeCreatedBy() === $this) {
                $ceCreatedBy->setCeCreatedBy(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Ceorder[]
     */
    public function getCeDoneBy(): Collection
    {
        return $this->ceDoneBy;
    }

    public function addCeDoneBy(Ceorder $ceDoneBy): self
    {
        if (!$this->ceDoneBy->contains($ceDoneBy)) {
            $this->ceDoneBy[] = $ceDoneBy;
            $ceDoneBy->setCeDoneBy($this);
        }

        return $this;
    }

    public function removeCeDoneBy(Ceorder $ceDoneBy): self
    {
        if ($this->ceDoneBy->contains($ceDoneBy)) {
            $this->ceDoneBy->removeElement($ceDoneBy);
            // set the owning side to null (unless already changed)
            if ($ceDoneBy->getCeDoneBy() === $this) {
                $ceDoneBy->setCeDoneBy(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|CeAccount[]
     */
    public function getCeAccountsCreated(): Collection
    {
        return $this->ceAccountsCreated;
    }

    public function addCeAccountsCreated(CeAccount $ceAccountsCreated): self
    {
        if (!$this->ceAccountsCreated->contains($ceAccountsCreated)) {
            $this->ceAccountsCreated[] = $ceAccountsCreated;
            $ceAccountsCreated->setCeCreatedBy($this);
        }

        return $this;
    }

    public function removeCeAccountsCreated(CeAccount $ceAccountsCreated): self
    {
        if ($this->ceAccountsCreated->contains($ceAccountsCreated)) {
            $this->ceAccountsCreated->removeElement($ceAccountsCreated);
            // set the owning side to null (unless already changed)
            if ($ceAccountsCreated->getCeCreatedBy() === $this) {
                $ceAccountsCreated->setCeCreatedBy(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|CeAccountEntry[]
     */
    public function getCeAccountEntries(): Collection
    {
        return $this->ceAccountEntries;
    }

    public function addCeAccountEntry(CeAccountEntry $ceAccountEntry): self
    {
        if (!$this->ceAccountEntries->contains($ceAccountEntry)) {
            $this->ceAccountEntries[] = $ceAccountEntry;
            $ceAccountEntry->setCeCreatedBy($this);
        }

        return $this;
    }

    public function removeCeAccountEntry(CeAccountEntry $ceAccountEntry): self
    {
        if ($this->ceAccountEntries->contains($ceAccountEntry)) {
            $this->ceAccountEntries->removeElement($ceAccountEntry);
            // set the owning side to null (unless already changed)
            if ($ceAccountEntry->getCeCreatedBy() === $this) {
                $ceAccountEntry->setCeCreatedBy(null);
            }
        }

        return $this;
    }
}
