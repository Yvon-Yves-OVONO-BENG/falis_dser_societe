<?php

namespace App\Entity;

use App\Repository\LieuExerciceActiviteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LieuExerciceActiviteRepository::class)
 */
class LieuExerciceActivite
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
    private $lieuExerciceActivite;

    /**
     * @ORM\OneToOne(targetEntity=Adresse::class, cascade={"persist", "remove"})
     */
    private $adresseEtablissement;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLieuExerciceActivite(): ?string
    {
        return $this->lieuExerciceActivite;
    }

    public function setLieuExerciceActivite(string $lieuExerciceActivite): self
    {
        $this->lieuExerciceActivite = $lieuExerciceActivite;

        return $this;
    }

    public function getAdresseEtablissement(): ?Adresse
    {
        return $this->adresseEtablissement;
    }

    public function setAdresseEtablissement(?Adresse $adresseEtablissement): self
    {
        $this->adresseEtablissement = $adresseEtablissement;

        return $this;
    }
}
