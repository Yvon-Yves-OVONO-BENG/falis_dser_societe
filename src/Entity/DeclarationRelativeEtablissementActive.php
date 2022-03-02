<?php

namespace App\Entity;

use App\Repository\DeclarationRelativeEtablissementActiveRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DeclarationRelativeEtablissementActiveRepository::class)
 */
class DeclarationRelativeEtablissementActive
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=LieuExerciceActivite::class, cascade={"persist", "remove"})
     */
    private $lieuExerciceActivite;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nomCommercial;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nomDomaineCommercial;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $enseigne;

    /**
     * @ORM\OneToOne(targetEntity=Activite::class, cascade={"persist", "remove"})
     */
    private $activite;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLieuExerciceActivite(): ?LieuExerciceActivite
    {
        return $this->lieuExerciceActivite;
    }

    public function setLieuExerciceActivite(?LieuExerciceActivite $lieuExerciceActivite): self
    {
        $this->lieuExerciceActivite = $lieuExerciceActivite;

        return $this;
    }

    public function getNomCommercial(): ?string
    {
        return $this->nomCommercial;
    }

    public function setNomCommercial(?string $nomCommercial): self
    {
        $this->nomCommercial = $nomCommercial;

        return $this;
    }

    public function getNomDomaineCommercial(): ?string
    {
        return $this->nomDomaineCommercial;
    }

    public function setNomDomaineCommercial(?string $nomDomaineCommercial): self
    {
        $this->nomDomaineCommercial = $nomDomaineCommercial;

        return $this;
    }

    public function getEnseigne(): ?string
    {
        return $this->enseigne;
    }

    public function setEnseigne(?string $enseigne): self
    {
        $this->enseigne = $enseigne;

        return $this;
    }

    public function getActivite(): ?Activite
    {
        return $this->activite;
    }

    public function setActivite(?Activite $activite): self
    {
        $this->activite = $activite;

        return $this;
    }
}
