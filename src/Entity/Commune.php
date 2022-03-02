<?php

namespace App\Entity;

use App\Repository\CommuneRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommuneRepository::class)
 */
class Commune
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
    private $commune;

    /**
     * @ORM\OneToMany(targetEntity=Adresse::class, mappedBy="commune")
     */
    private $adresses;

    /**
     * @ORM\OneToMany(targetEntity=EtatCivil::class, mappedBy="commune")
     */
    private $etatCivils;

    public function __construct()
    {
        $this->adresses = new ArrayCollection();
        $this->etatCivils = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCommune(): ?string
    {
        return $this->commune;
    }

    public function setCommune(string $commune): self
    {
        $this->commune = $commune;

        return $this;
    }

    /**
     * @return Collection<int, Adresse>
     */
    public function getAdresses(): Collection
    {
        return $this->adresses;
    }

    public function addAdress(Adresse $adress): self
    {
        if (!$this->adresses->contains($adress)) {
            $this->adresses[] = $adress;
            $adress->setCommune($this);
        }

        return $this;
    }

    public function removeAdress(Adresse $adress): self
    {
        if ($this->adresses->removeElement($adress)) {
            // set the owning side to null (unless already changed)
            if ($adress->getCommune() === $this) {
                $adress->setCommune(null);
            }
        }

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
            $etatCivil->setCommune($this);
        }

        return $this;
    }

    public function removeEtatCivil(EtatCivil $etatCivil): self
    {
        if ($this->etatCivils->removeElement($etatCivil)) {
            // set the owning side to null (unless already changed)
            if ($etatCivil->getCommune() === $this) {
                $etatCivil->setCommune(null);
            }
        }

        return $this;
    }
}
