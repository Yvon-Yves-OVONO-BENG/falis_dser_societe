<?php

namespace App\Entity;

use App\Repository\RegimeImpositionMatiereTVARepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RegimeImpositionMatiereTVARepository::class)
 */
class RegimeImpositionMatiereTVA
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
    private $regimeImpositionMatiereTVA;

    /**
     * @ORM\OneToMany(targetEntity=Societe::class, mappedBy="regimeImpositionMatiereTVA")
     */
    private $societes;

    public function __construct()
    {
        $this->societes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRegimeImpositionMatiereTVA(): ?string
    {
        return $this->regimeImpositionMatiereTVA;
    }

    public function setRegimeImpositionMatiereTVA(string $regimeImpositionMatiereTVA): self
    {
        $this->regimeImpositionMatiereTVA = $regimeImpositionMatiereTVA;

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
            $societe->setRegimeImpositionMatiereTVA($this);
        }

        return $this;
    }

    public function removeSociete(Societe $societe): self
    {
        if ($this->societes->removeElement($societe)) {
            // set the owning side to null (unless already changed)
            if ($societe->getRegimeImpositionMatiereTVA() === $this) {
                $societe->setRegimeImpositionMatiereTVA(null);
            }
        }

        return $this;
    }
}
