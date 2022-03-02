<?php

namespace App\Entity;

use App\Repository\ArrondissementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ArrondissementRepository::class)
 */
class Arrondissement
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
    private $arrondissement;

    /**
     * @ORM\ManyToOne(targetEntity=Departement::class, inversedBy="arrondissements")
     */
    private $departement;

    /**
     * @ORM\OneToMany(targetEntity=Adresse::class, mappedBy="arrondissement")
     */
    private $adresses;

    /**
     * @ORM\OneToMany(targetEntity=EtatCivil::class, mappedBy="arrondissementNaissance")
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

    public function getArrondissement(): ?string
    {
        return $this->arrondissement;
    }

    public function setArrondissement(string $arrondissement): self
    {
        $this->arrondissement = $arrondissement;

        return $this;
    }

    public function getDepartement(): ?Departement
    {
        return $this->departement;
    }

    public function setDepartement(?Departement $departement): self
    {
        $this->departement = $departement;

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
            $adress->setArrondissement($this);
        }

        return $this;
    }

    public function removeAdress(Adresse $adress): self
    {
        if ($this->adresses->removeElement($adress)) {
            // set the owning side to null (unless already changed)
            if ($adress->getArrondissement() === $this) {
                $adress->setArrondissement(null);
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
            $etatCivil->setArrondissementNaissance($this);
        }

        return $this;
    }

    public function removeEtatCivil(EtatCivil $etatCivil): self
    {
        if ($this->etatCivils->removeElement($etatCivil)) {
            // set the owning side to null (unless already changed)
            if ($etatCivil->getArrondissementNaissance() === $this) {
                $etatCivil->setArrondissementNaissance(null);
            }
        }

        return $this;
    }
}
