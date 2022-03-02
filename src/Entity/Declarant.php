<?php

namespace App\Entity;

use App\Repository\DeclarantRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DeclarantRepository::class)
 */
class Declarant
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $faitA;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $par;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @ORM\ManyToOne(targetEntity=EnQualiteDe::class, inversedBy="declarants")
     */
    private $enQualiteDe;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFaitA(): ?string
    {
        return $this->faitA;
    }

    public function setFaitA(string $faitA): self
    {
        $this->faitA = $faitA;

        return $this;
    }

    public function getPar(): ?string
    {
        return $this->par;
    }

    public function setPar(string $par): self
    {
        $this->par = $par;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getEnQualiteDe(): ?EnqualiteDe
    {
        return $this->enQualiteDe;
    }

    public function setEnQualiteDe(?EnqualiteDe $enQualiteDe): self
    {
        $this->enQualiteDe = $enQualiteDe;

        return $this;
    }
}
