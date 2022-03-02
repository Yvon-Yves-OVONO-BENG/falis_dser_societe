<?php

namespace App\Entity;

use App\Repository\OptionPArticuliereMAtiereTVARepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OptionPArticuliereMAtiereTVARepository::class)
 */
class OptionPArticuliereMAtiereTVA
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
    private $optionPArticuliereMAtiereTVA;

    /**
     * @ORM\OneToMany(targetEntity=Societe::class, mappedBy="optionPArticuliereMAtiereTVA")
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

    public function getOptionPArticuliereMAtiereTVA(): ?string
    {
        return $this->optionPArticuliereMAtiereTVA;
    }

    public function setOptionPArticuliereMAtiereTVA(string $optionPArticuliereMAtiereTVA): self
    {
        $this->optionPArticuliereMAtiereTVA = $optionPArticuliereMAtiereTVA;

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
            $societe->setOptionPArticuliereMAtiereTVA($this);
        }

        return $this;
    }

    public function removeSociete(Societe $societe): self
    {
        if ($this->societes->removeElement($societe)) {
            // set the owning side to null (unless already changed)
            if ($societe->getOptionPArticuliereMAtiereTVA() === $this) {
                $societe->setOptionPArticuliereMAtiereTVA(null);
            }
        }

        return $this;
    }
}
