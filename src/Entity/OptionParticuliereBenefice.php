<?php

namespace App\Entity;

use App\Repository\OptionParticuliereBeneficeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OptionParticuliereBeneficeRepository::class)
 */
class OptionParticuliereBenefice
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
    private $optionParticuliereBenefice;

    /**
     * @ORM\OneToMany(targetEntity=Societe::class, mappedBy="optionParticuliereBenefice")
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

    public function getOptionParticuliereBenefice(): ?string
    {
        return $this->optionParticuliereBenefice;
    }

    public function setOptionParticuliereBenefice(string $optionParticuliereBenefice): self
    {
        $this->optionParticuliereBenefice = $optionParticuliereBenefice;

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
            $societe->setOptionParticuliereBenefice($this);
        }

        return $this;
    }

    public function removeSociete(Societe $societe): self
    {
        if ($this->societes->removeElement($societe)) {
            // set the owning side to null (unless already changed)
            if ($societe->getOptionParticuliereBenefice() === $this) {
                $societe->setOptionParticuliereBenefice(null);
            }
        }

        return $this;
    }
}
