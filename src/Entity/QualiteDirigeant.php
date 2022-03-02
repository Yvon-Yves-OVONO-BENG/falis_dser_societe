<?php

namespace App\Entity;

use App\Repository\QualiteDirigeantRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=QualiteDirigeantRepository::class)
 */
class QualiteDirigeant
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
    private $qualiteDirigeant;

    /**
     * @ORM\OneToMany(targetEntity=Dirigeant::class, mappedBy="qualiteDirigeant")
     */
    private $dirigeants;

    public function __construct()
    {
        $this->dirigeants = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQualiteDirigeant(): ?string
    {
        return $this->qualiteDirigeant;
    }

    public function setQualiteDirigeant(string $qualiteDirigeant): self
    {
        $this->qualiteDirigeant = $qualiteDirigeant;

        return $this;
    }

    /**
     * @return Collection<int, Dirigeant>
     */
    public function getDirigeants(): Collection
    {
        return $this->dirigeants;
    }

    public function addDirigeant(Dirigeant $dirigeant): self
    {
        if (!$this->dirigeants->contains($dirigeant)) {
            $this->dirigeants[] = $dirigeant;
            $dirigeant->setQualiteDirigeant($this);
        }

        return $this;
    }

    public function removeDirigeant(Dirigeant $dirigeant): self
    {
        if ($this->dirigeants->removeElement($dirigeant)) {
            // set the owning side to null (unless already changed)
            if ($dirigeant->getQualiteDirigeant() === $this) {
                $dirigeant->setQualiteDirigeant(null);
            }
        }

        return $this;
    }
}
