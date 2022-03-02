<?php

namespace App\Entity;

use App\Repository\DirigeantRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DirigeantRepository::class)
 */
class Dirigeant
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="boolean")
     */
    private $nouveauRepresentantPermanent;

    /**
     * @ORM\OneToOne(targetEntity=Personne::class, cascade={"persist", "remove"})
     */
    private $personneDirigeant;

    /**
     * @ORM\OneToOne(targetEntity=Personne::class, cascade={"persist", "remove"})
     */
    private $representantPermanent;

    /**
     * @ORM\ManyToOne(targetEntity=QualiteDirigeant::class, inversedBy="dirigeants")
     */
    private $qualiteDirigeant;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNouveauRepresentantPermanent(): ?bool
    {
        return $this->nouveauRepresentantPermanent;
    }

    public function setNouveauRepresentantPermanent(bool $nouveauRepresentantPermanent): self
    {
        $this->nouveauRepresentantPermanent = $nouveauRepresentantPermanent;

        return $this;
    }

    public function getPersonneDirigeant(): ?Personne
    {
        return $this->personneDirigeant;
    }

    public function setPersonneDirigeant(?Personne $personneDirigeant): self
    {
        $this->personneDirigeant = $personneDirigeant;

        return $this;
    }

    public function getRepresentantPermanent(): ?Personne
    {
        return $this->representantPermanent;
    }

    public function setRepresentantPermanent(?Personne $representantPermanent): self
    {
        $this->representantPermanent = $representantPermanent;

        return $this;
    }

    public function getQualiteDirigeant(): ?QualiteDirigeant
    {
        return $this->qualiteDirigeant;
    }

    public function setQualiteDirigeant(?QualiteDirigeant $qualiteDirigeant): self
    {
        $this->qualiteDirigeant = $qualiteDirigeant;

        return $this;
    }
}
