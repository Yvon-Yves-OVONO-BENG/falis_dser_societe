<?php

namespace App\Entity;

use App\Repository\NationaliteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=NationaliteRepository::class)
 */
class Nationalite
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
    private $nationalite;

    /**
     * @ORM\OneToMany(targetEntity=EtatCivil::class, mappedBy="nationalite")
     */
    private $etatCivils;

    public function __construct()
    {
        $this->etatCivils = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNationalite(): ?string
    {
        return $this->nationalite;
    }

    public function setNationalite(string $nationalite): self
    {
        $this->nationalite = $nationalite;

        return $this;
    }

    /**
     * @return Collection<int, EtatCivil>
     */
    public function getEtatCivils(): Collection
    {
        return $this->etatCivils;
    }

    public function addEtatCivil(EtatCivil $etatCivil): self
    {
        if (!$this->etatCivils->contains($etatCivil)) {
            $this->etatCivils[] = $etatCivil;
            $etatCivil->setNationalite($this);
        }

        return $this;
    }

    public function removeEtatCivil(EtatCivil $etatCivil): self
    {
        if ($this->etatCivils->removeElement($etatCivil)) {
            // set the owning side to null (unless already changed)
            if ($etatCivil->getNationalite() === $this) {
                $etatCivil->setNationalite(null);
            }
        }

        return $this;
    }
}
