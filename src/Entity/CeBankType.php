<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CeBankTypeRepository")
 */
class CeBankType
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
    private $ceTypeName;

    /**
     * @ORM\Column(type="string", length=32)
     */
    private $ceTypeCode;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCeTypeName(): ?string
    {
        return $this->ceTypeName;
    }

    public function setCeTypeName(string $ceTypeName): self
    {
        $this->ceTypeName = $ceTypeName;

        return $this;
    }

    public function getCeTypeCode(): ?string
    {
        return $this->ceTypeCode;
    }

    public function setCeTypeCode(string $ceTypeCode): self
    {
        $this->ceTypeCode = $ceTypeCode;

        return $this;
    }
}
