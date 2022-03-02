<?php

namespace App\Entity;

use App\Repository\EtatCivilRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EtatCivilRepository::class)
 */
class EtatCivil
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
    private $nomNaissance;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nomUsage;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $prenom;

    /**
     * @ORM\Column(type="date")
     */
    private $dateNaissance;

    /**
     * @ORM\ManyToOne(targetEntity=Arrondissement::class, inversedBy="etatCivils")
     */
    private $arrondissementNaissance;

    /**
     * @ORM\ManyToOne(targetEntity=Commune::class, inversedBy="etatCivils")
     */
    private $commune;

    /**
     * @ORM\ManyToOne(targetEntity=Nationalite::class, inversedBy="etatCivils")
     */
    private $nationalite;

    /**
     * @ORM\ManyToOne(targetEntity=Pays::class, inversedBy="etatCivils")
     */
    private $paysNaissance;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomNaissance(): ?string
    {
        return $this->nomNaissance;
    }

    public function setNomNaissance(string $nomNaissance): self
    {
        $this->nomNaissance = $nomNaissance;

        return $this;
    }

    public function getNomUsage(): ?string
    {
        return $this->nomUsage;
    }

    public function setNomUsage(?string $nomUsage): self
    {
        $this->nomUsage = $nomUsage;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getDateNaissance(): ?\DateTimeInterface
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance(\DateTimeInterface $dateNaissance): self
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    public function getPaysNaissance(): ?Pays
    {
        return $this->paysNaissance;
    }

    public function setPaysNaissance(?Pays $paysNaissance): self
    {
        $this->paysNaissance = $paysNaissance;

        return $this;
    }

    public function getArrondissementNaissance(): ?Arrondissement
    {
        return $this->arrondissementNaissance;
    }

    public function setArrondissementNaissance(?Arrondissement $arrondissementNaissance): self
    {
        $this->arrondissementNaissance = $arrondissementNaissance;

        return $this;
    }

    public function getCommune(): ?Commune
    {
        return $this->commune;
    }

    public function setCommune(?Commune $commune): self
    {
        $this->commune = $commune;

        return $this;
    }

    public function getNationalite(): ?Nationalite
    {
        return $this->nationalite;
    }

    public function setNationalite(?Nationalite $nationalite): self
    {
        $this->nationalite = $nationalite;

        return $this;
    }
}
