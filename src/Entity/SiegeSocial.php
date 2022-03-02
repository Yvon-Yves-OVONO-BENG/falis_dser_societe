<?php

namespace App\Entity;

use App\Repository\SiegeSocialRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SiegeSocialRepository::class)
 */
class SiegeSocial
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=Adresse::class, cascade={"persist", "remove"})
     */
    private $adresseSiegeSocial;

    /**
     * @ORM\Column(type="boolean")
     */
    private $domiciliationProvisoire;

    /**
     * @ORM\Column(type="boolean")
     */
    private $domiciliationEntreprise;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAdresseSiegeSocial(): ?Adresse
    {
        return $this->adresseSiegeSocial;
    }

    public function setAdresseSiegeSocial(?Adresse $adresseSiegeSocial): self
    {
        $this->adresseSiegeSocial = $adresseSiegeSocial;

        return $this;
    }

    public function getDomiciliationProvisoire(): ?bool
    {
        return $this->domiciliationProvisoire;
    }

    public function setDomiciliationProvisoire(bool $domiciliationProvisoire): self
    {
        $this->domiciliationProvisoire = $domiciliationProvisoire;

        return $this;
    }

    public function getDomiciliationEntreprise(): ?bool
    {
        return $this->domiciliationEntreprise;
    }

    public function setDomiciliationEntreprise(bool $domiciliationEntreprise): self
    {
        $this->domiciliationEntreprise = $domiciliationEntreprise;

        return $this;
    }
}
