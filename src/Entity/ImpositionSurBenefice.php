<?php

namespace App\Entity;

use App\Repository\ImpositionSurBeneficeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ImpositionSurBeneficeRepository::class)
 */
class ImpositionSurBenefice
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
    private $impositionSurBenefice;

    /**
     * @ORM\OneToMany(targetEntity=Societe::class, mappedBy="impositionSurBenefice")
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

    public function getImpositionSurBenefice(): ?string
    {
        return $this->impositionSurBenefice;
    }

    public function setImpositionSurBenefice(string $impositionSurBenefice): self
    {
        $this->impositionSurBenefice = $impositionSurBenefice;

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
            $societe->setImpositionSurBenefice($this);
        }

        return $this;
    }

    public function removeSociete(Societe $societe): self
    {
        if ($this->societes->removeElement($societe)) {
            // set the owning side to null (unless already changed)
            if ($societe->getImpositionSurBenefice() === $this) {
                $societe->setImpositionSurBenefice(null);
            }
        }

        return $this;
    }
}
