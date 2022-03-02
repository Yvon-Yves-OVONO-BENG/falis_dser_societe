<?php

namespace App\Entity;

use App\Repository\PaysRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PaysRepository::class)
 */
class Pays
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
    private $pays;

    /**
     * @ORM\OneToMany(targetEntity=EtatCivil::class, mappedBy="paysNaissance")
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

    public function getPays(): ?string
    {
        return $this->pays;
    }

    public function setPays(string $pays): self
    {
        $this->pays = $pays;

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
            $etatCivil->setPaysNaissance($this);
        }

        return $this;
    }

    public function removeEtatCivil(EtatCivil $etatCivil): self
    {
        if ($this->etatCivils->removeElement($etatCivil)) {
            // set the owning side to null (unless already changed)
            if ($etatCivil->getPaysNaissance() === $this) {
                $etatCivil->setPaysNaissance(null);
            }
        }

        return $this;
    }


}
