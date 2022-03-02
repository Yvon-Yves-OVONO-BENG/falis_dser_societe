<?php

namespace App\Entity;

use App\Repository\PersonneRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PersonneRepository::class)
 */
class Personne
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $numeroUniqueIdentification;

    /**
     * @ORM\OneToOne(targetEntity=EtatCivil::class, cascade={"persist", "remove"})
     */
    private $etatCivil;

    /**
     * @ORM\OneToOne(targetEntity=Adresse::class, cascade={"persist", "remove"})
     */
    private $adresse;

    /**
     * @ORM\ManyToOne(targetEntity=GreffeImmatriculation::class, inversedBy="personnes")
     */
    private $greffeImmaatriculation;

    /**
     * @ORM\ManyToOne(targetEntity=TypePersonne::class, inversedBy="personnes")
     */
    private $typePersonne;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumeroUniqueIdentification(): ?string
    {
        return $this->numeroUniqueIdentification;
    }

    public function setNumeroUniqueIdentification(?string $numeroUniqueIdentification): self
    {
        $this->numeroUniqueIdentification = $numeroUniqueIdentification;

        return $this;
    }

    public function getEtatCivil(): ?EtatCivil
    {
        return $this->etatCivil;
    }

    public function setEtatCivil(?EtatCivil $etatCivil): self
    {
        $this->etatCivil = $etatCivil;

        return $this;
    }

    public function getAdresse(): ?Adresse
    {
        return $this->adresse;
    }

    public function setAdresse(?Adresse $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getGreffeImmaatriculation(): ?GreffeImmatriculation
    {
        return $this->greffeImmaatriculation;
    }

    public function setGreffeImmaatriculation(?GreffeImmatriculation $greffeImmaatriculation): self
    {
        $this->greffeImmaatriculation = $greffeImmaatriculation;

        return $this;
    }

    public function getTypePersonne(): ?TypePersonne
    {
        return $this->typePersonne;
    }

    public function setTypePersonne(?TypePersonne $typePersonne): self
    {
        $this->typePersonne = $typePersonne;

        return $this;
    }
}
