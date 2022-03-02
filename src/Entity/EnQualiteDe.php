<?php

namespace App\Entity;

use App\Repository\EnQualiteDeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EnQualiteDeRepository::class)
 */
class EnQualiteDe
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
    private $enqualiteDe;

    /**
     * @ORM\OneToMany(targetEntity=Declarant::class, mappedBy="enQualiteDe")
     */
    private $declarants;

    public function __construct()
    {
        $this->declarants = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEnqualiteDe(): ?string
    {
        return $this->enqualiteDe;
    }

    public function setEnqualiteDe(string $enqualiteDe): self
    {
        $this->enqualiteDe = $enqualiteDe;

        return $this;
    }

    /**
     * @return Collection<int, Declarant>
     */
    public function getDeclarants(): Collection
    {
        return $this->declarants;
    }

    public function addDeclarant(Declarant $declarant): self
    {
        if (!$this->declarants->contains($declarant)) {
            $this->declarants[] = $declarant;
            $declarant->setEnQualiteDe($this);
        }

        return $this;
    }

    public function removeDeclarant(Declarant $declarant): self
    {
        if ($this->declarants->removeElement($declarant)) {
            // set the owning side to null (unless already changed)
            if ($declarant->getEnQualiteDe() === $this) {
                $declarant->setEnQualiteDe(null);
            }
        }

        return $this;
    }
}
