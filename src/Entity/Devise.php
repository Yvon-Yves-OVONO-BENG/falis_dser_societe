<?php

namespace App\Entity;

use App\Repository\DeviseRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DeviseRepository::class)
 */
class Devise
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
    private $devise;

    /**
     * @ORM\OneToMany(targetEntity=DeclarationRelativeSociete::class, mappedBy="devise")
     */
    private $declarationRelativeSocietes;

    public function __construct()
    {
        $this->declarationRelativeSocietes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDevise(): ?string
    {
        return $this->devise;
    }

    public function setDevise(string $devise): self
    {
        $this->devise = $devise;

        return $this;
    }

    /**
     * @return Collection<int, DeclarationRelativeSociete>
     */
    public function getDeclarationRelativeSocietes(): Collection
    {
        return $this->declarationRelativeSocietes;
    }

    public function addDeclarationRelativeSociete(DeclarationRelativeSociete $declarationRelativeSociete): self
    {
        if (!$this->declarationRelativeSocietes->contains($declarationRelativeSociete)) {
            $this->declarationRelativeSocietes[] = $declarationRelativeSociete;
            $declarationRelativeSociete->setDevise($this);
        }

        return $this;
    }

    public function removeDeclarationRelativeSociete(DeclarationRelativeSociete $declarationRelativeSociete): self
    {
        if ($this->declarationRelativeSocietes->removeElement($declarationRelativeSociete)) {
            // set the owning side to null (unless already changed)
            if ($declarationRelativeSociete->getDevise() === $this) {
                $declarationRelativeSociete->setDevise(null);
            }
        }

        return $this;
    }
}
