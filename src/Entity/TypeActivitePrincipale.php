<?php

namespace App\Entity;

use App\Repository\TypeActivitePrincipaleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TypeActivitePrincipaleRepository::class)
 */
class TypeActivitePrincipale
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
    private $typeActivitePrincipale;

    /**
     * @ORM\OneToMany(targetEntity=Activite::class, mappedBy="typeActivitePrincipale")
     */
    private $activites;

    public function __construct()
    {
        $this->activites = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeActivitePrincipale(): ?string
    {
        return $this->typeActivitePrincipale;
    }

    public function setTypeActivitePrincipale(string $typeActivitePrincipale): self
    {
        $this->typeActivitePrincipale = $typeActivitePrincipale;

        return $this;
    }

    /**
     * @return Collection<int, Activite>
     */
    public function getActivites(): Collection
    {
        return $this->activites;
    }

    public function addActivite(Activite $activite): self
    {
        if (!$this->activites->contains($activite)) {
            $this->activites[] = $activite;
            $activite->setTypeActivitePrincipale($this);
        }

        return $this;
    }

    public function removeActivite(Activite $activite): self
    {
        if ($this->activites->removeElement($activite)) {
            // set the owning side to null (unless already changed)
            if ($activite->getTypeActivitePrincipale() === $this) {
                $activite->setTypeActivitePrincipale(null);
            }
        }

        return $this;
    }
}
