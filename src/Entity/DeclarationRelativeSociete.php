<?php

namespace App\Entity;

use App\Repository\DeclarationRelativeSocieteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DeclarationRelativeSocieteRepository::class)
 */
class DeclarationRelativeSociete
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
    private $denomination;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $sigle;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $statutLegalParticulier;

    /**
     * @ORM\Column(type="integer")
     */
    private $dureeSociete;

    /**
     * @ORM\Column(type="float")
     */
    private $montantCapital;

    /**
     * @ORM\Column(type="date")
     */
    private $dateClotureExercice;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateCloturePremierExercice;

    /**
     * @ORM\Column(type="boolean")
     */
    private $adhesionPrincipeEconomieSocialSolidaire;

    /**
     * @ORM\Column(type="boolean")
     */
    private $societeAMission;

    /**
     * @ORM\Column(type="text")
     */
    private $listeActivitesprincipales;

    /**
     * @ORM\ManyToOne(targetEntity=Devise::class, inversedBy="declarationRelativeSocietes")
     */
    private $devise;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDenomination(): ?string
    {
        return $this->denomination;
    }

    public function setDenomination(string $denomination): self
    {
        $this->denomination = $denomination;

        return $this;
    }

    public function getSigle(): ?string
    {
        return $this->sigle;
    }

    public function setSigle(?string $sigle): self
    {
        $this->sigle = $sigle;

        return $this;
    }

    public function getStatutLegalParticulier(): ?string
    {
        return $this->statutLegalParticulier;
    }

    public function setStatutLegalParticulier(?string $statutLegalParticulier): self
    {
        $this->statutLegalParticulier = $statutLegalParticulier;

        return $this;
    }

    public function getDureeSociete(): ?int
    {
        return $this->dureeSociete;
    }

    public function setDureeSociete(int $dureeSociete): self
    {
        $this->dureeSociete = $dureeSociete;

        return $this;
    }

    public function getMontantCapital(): ?float
    {
        return $this->montantCapital;
    }

    public function setMontantCapital(float $montantCapital): self
    {
        $this->montantCapital = $montantCapital;

        return $this;
    }

    public function getDateClotureExercice(): ?\DateTimeInterface
    {
        return $this->dateClotureExercice;
    }

    public function setDateClotureExercice(\DateTimeInterface $dateClotureExercice): self
    {
        $this->dateClotureExercice = $dateClotureExercice;

        return $this;
    }

    public function getDateCloturePremierExercice(): ?\DateTimeInterface
    {
        return $this->dateCloturePremierExercice;
    }

    public function setDateCloturePremierExercice(?\DateTimeInterface $dateCloturePremierExercice): self
    {
        $this->dateCloturePremierExercice = $dateCloturePremierExercice;

        return $this;
    }

    public function getAdhesionPrincipeEconomieSocialSolidaire(): ?bool
    {
        return $this->adhesionPrincipeEconomieSocialSolidaire;
    }

    public function setAdhesionPrincipeEconomieSocialSolidaire(bool $adhesionPrincipeEconomieSocialSolidaire): self
    {
        $this->adhesionPrincipeEconomieSocialSolidaire = $adhesionPrincipeEconomieSocialSolidaire;

        return $this;
    }

    public function getSocieteAMission(): ?bool
    {
        return $this->societeAMission;
    }

    public function setSocieteAMission(bool $societeAMission): self
    {
        $this->societeAMission = $societeAMission;

        return $this;
    }

    public function getListeActivitesprincipales(): ?string
    {
        return $this->listeActivitesprincipales;
    }

    public function setListeActivitesprincipales(string $listeActivitesprincipales): self
    {
        $this->listeActivitesprincipales = $listeActivitesprincipales;

        return $this;
    }

    public function getDevise(): ?Devise
    {
        return $this->devise;
    }

    public function setDevise(?Devise $devise): self
    {
        $this->devise = $devise;

        return $this;
    }
}
