<?php

namespace App\Entity;

use App\Repository\FormeJuridiqueRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FormeJuridiqueRepository::class)
 */
class FormeJuridique
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
    private $formeJuridique;

    /**
     * @ORM\OneToMany(targetEntity=Societe::class, mappedBy="formeJuridique")
     */
    private $societes;

    /**
     * @ORM\ManyToOne(targetEntity=TypeSociete::class, inversedBy="formeJuridiques")
     */
    private $typeSociete;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $sigle;

    public function __construct()
    {
        $this->societes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFormeJuridique(): ?string
    {
        return $this->formeJuridique;
    }

    public function setFormeJuridique(string $formeJuridique): self
    {
        $this->formeJuridique = $formeJuridique;

        return $this;
    }

    /**
     * @return Collection<int, Societe>
     */
    public function getSocietes(): Collection
    {
        return $this->societes;
    }

    public function addSociete(Societe $societe): self
    {
        if (!$this->societes->contains($societe)) {
            $this->societes[] = $societe;
            $societe->setFormeJuridique($this);
        }

        return $this;
    }

    public function removeSociete(Societe $societe): self
    {
        if ($this->societes->removeElement($societe)) {
            // set the owning side to null (unless already changed)
            if ($societe->getFormeJuridique() === $this) {
                $societe->setFormeJuridique(null);
            }
        }

        return $this;
    }

    public function getTypeSociete(): ?TypeSociete
    {
        return $this->typeSociete;
    }

    public function setTypeSociete(?TypeSociete $typeSociete): self
    {
        $this->typeSociete = $typeSociete;

        return $this;
    }

    public function getSigle(): ?string
    {
        return $this->sigle;
    }

    public function setSigle(?string $sigle): self
    {
        $this->sigle = $sigle;

        return $this;
    }

    public function __toString()
    {
        // return $this->getSigle().' - '.$this->getFormeJuridique();
        return $this->getId();
    }
}
