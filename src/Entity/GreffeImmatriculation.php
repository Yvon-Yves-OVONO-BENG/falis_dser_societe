<?php

namespace App\Entity;

use App\Repository\GreffeImmatriculationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=GreffeImmatriculationRepository::class)
 */
class GreffeImmatriculation
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
    private $greffeImmatriculation;

    /**
     * @ORM\OneToMany(targetEntity=Personne::class, mappedBy="greffeImmaatriculation")
     */
    private $personnes;

    public function __construct()
    {
        $this->personnes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGreffeImmatriculation(): ?string
    {
        return $this->greffeImmatriculation;
    }

    public function setGreffeImmatriculation(string $greffeImmatriculation): self
    {
        $this->greffeImmatriculation = $greffeImmatriculation;

        return $this;
    }

    /**
     * @return Collection<int, Personne>
     */
    public function getPersonnes(): Collection
    {
        return $this->personnes;
    }

    public function addPersonne(Personne $personne): self
    {
        if (!$this->personnes->contains($personne)) {
            $this->personnes[] = $personne;
            $personne->setGreffeImmaatriculation($this);
        }

        return $this;
    }

    public function removePersonne(Personne $personne): self
    {
        if ($this->personnes->removeElement($personne)) {
            // set the owning side to null (unless already changed)
            if ($personne->getGreffeImmaatriculation() === $this) {
                $personne->setGreffeImmaatriculation(null);
            }
        }

        return $this;
    }
}
