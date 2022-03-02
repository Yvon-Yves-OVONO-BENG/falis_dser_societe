<?php

namespace App\Entity;

use App\Repository\TypeSocieteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TypeSocieteRepository::class)
 */
class TypeSociete
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
    private $typeSociete;

    /**
     * @ORM\OneToMany(targetEntity=FormeJuridique::class, mappedBy="typeSociete")
     */
    private $formeJuridiques;

    public function __construct()
    {
        $this->formeJuridiques = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeSociete(): ?string
    {
        return $this->typeSociete;
    }

    public function setTypeSociete(string $typeSociete): self
    {
        $this->typeSociete = $typeSociete;

        return $this;
    }

    /**
     * @return Collection<int, FormeJuridique>
     */
    public function getFormeJuridiques(): Collection
    {
        return $this->formeJuridiques;
    }

    public function addFormeJuridique(FormeJuridique $formeJuridique): self
    {
        if (!$this->formeJuridiques->contains($formeJuridique)) {
            $this->formeJuridiques[] = $formeJuridique;
            $formeJuridique->setTypeSociete($this);
        }

        return $this;
    }

    public function removeFormeJuridique(FormeJuridique $formeJuridique): self
    {
        if ($this->formeJuridiques->removeElement($formeJuridique)) {
            // set the owning side to null (unless already changed)
            if ($formeJuridique->getTypeSociete() === $this) {
                $formeJuridique->setTypeSociete(null);
            }
        }

        return $this;
    }
}
