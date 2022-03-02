<?php

namespace App\Entity;

use App\Repository\RegimeAssuranceMaladieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RegimeAssuranceMaladieRepository::class)
 */
class RegimeAssuranceMaladie
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
    private $regimeAssuranceMaladie;

    /**
     * @ORM\OneToMany(targetEntity=DeclarationVoletSocialTNS::class, mappedBy="regimeAssuranceMaladie")
     */
    private $declarationVoletSocialTNS;

    public function __construct()
    {
        $this->declarationVoletSocialTNS = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRegimeAssuranceMaladie(): ?string
    {
        return $this->regimeAssuranceMaladie;
    }

    public function setRegimeAssuranceMaladie(string $regimeAssuranceMaladie): self
    {
        $this->regimeAssuranceMaladie = $regimeAssuranceMaladie;

        return $this;
    }

    /**
     * @return Collection<int, DeclarationVoletSocialTNS>
     */
    public function getDeclarationVoletSocialTNS(): Collection
    {
        return $this->declarationVoletSocialTNS;
    }

    public function addDeclarationVoletSocialTN(DeclarationVoletSocialTNS $declarationVoletSocialTN): self
    {
        if (!$this->declarationVoletSocialTNS->contains($declarationVoletSocialTN)) {
            $this->declarationVoletSocialTNS[] = $declarationVoletSocialTN;
            $declarationVoletSocialTN->setRegimeAssuranceMaladie($this);
        }

        return $this;
    }

    public function removeDeclarationVoletSocialTN(DeclarationVoletSocialTNS $declarationVoletSocialTN): self
    {
        if ($this->declarationVoletSocialTNS->removeElement($declarationVoletSocialTN)) {
            // set the owning side to null (unless already changed)
            if ($declarationVoletSocialTN->getRegimeAssuranceMaladie() === $this) {
                $declarationVoletSocialTN->setRegimeAssuranceMaladie(null);
            }
        }

        return $this;
    }
}
