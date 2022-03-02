<?php

namespace App\Entity;

use App\Repository\DeclarationVoletSocialTNSRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DeclarationVoletSocialTNSRepository::class)
 */
class DeclarationVoletSocialTNS
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=Personne::class, cascade={"persist", "remove"})
     */
    private $personneRegimeTravailleurNonSalarie;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $numeroSecuriteSociale;

    /**
     * @ORM\Column(type="boolean")
     */
    private $numeroSecuriteSocialeEnCours;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $qualite;

    /**
     * @ORM\Column(type="boolean")
     */
    private $conserveUneActivite;

    /**
     * @ORM\Column(type="boolean")
     */
    private $pharmacien;

    /**
     * @ORM\Column(type="boolean")
     */
    private $bilogiste;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $autreRegimeAssuranceMaladie;

    /**
     * @ORM\ManyToOne(targetEntity=RegimeAssuranceMaladie::class, inversedBy="declarationVoletSocialTNS")
     */
    private $regimeAssuranceMaladie;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPersonneRegimeTravailleurNonSalarie(): ?Personne
    {
        return $this->personneRegimeTravailleurNonSalarie;
    }

    public function setPersonneRegimeTravailleurNonSalarie(?Personne $personneRegimeTravailleurNonSalarie): self
    {
        $this->personneRegimeTravailleurNonSalarie = $personneRegimeTravailleurNonSalarie;

        return $this;
    }

    public function getNumeroSecuriteSociale(): ?string
    {
        return $this->numeroSecuriteSociale;
    }

    public function setNumeroSecuriteSociale(?string $numeroSecuriteSociale): self
    {
        $this->numeroSecuriteSociale = $numeroSecuriteSociale;

        return $this;
    }

    public function getNumeroSecuriteSocialeEnCours(): ?bool
    {
        return $this->numeroSecuriteSocialeEnCours;
    }

    public function setNumeroSecuriteSocialeEnCours(bool $numeroSecuriteSocialeEnCours): self
    {
        $this->numeroSecuriteSocialeEnCours = $numeroSecuriteSocialeEnCours;

        return $this;
    }

    public function getQualite(): ?string
    {
        return $this->qualite;
    }

    public function setQualite(?string $qualite): self
    {
        $this->qualite = $qualite;

        return $this;
    }

    public function getConserveUneActivite(): ?bool
    {
        return $this->conserveUneActivite;
    }

    public function setConserveUneActivite(bool $conserveUneActivite): self
    {
        $this->conserveUneActivite = $conserveUneActivite;

        return $this;
    }

    public function getPharmacien(): ?bool
    {
        return $this->pharmacien;
    }

    public function setPharmacien(bool $pharmacien): self
    {
        $this->pharmacien = $pharmacien;

        return $this;
    }

    public function getBilogiste(): ?bool
    {
        return $this->bilogiste;
    }

    public function setBilogiste(bool $bilogiste): self
    {
        $this->bilogiste = $bilogiste;

        return $this;
    }

    public function getAutreRegimeAssuranceMaladie(): ?string
    {
        return $this->autreRegimeAssuranceMaladie;
    }

    public function setAutreRegimeAssuranceMaladie(?string $autreRegimeAssuranceMaladie): self
    {
        $this->autreRegimeAssuranceMaladie = $autreRegimeAssuranceMaladie;

        return $this;
    }

    public function getRegimeAssuranceMaladie(): ?RegimeAssuranceMaladie
    {
        return $this->regimeAssuranceMaladie;
    }

    public function setRegimeAssuranceMaladie(?RegimeAssuranceMaladie $regimeAssuranceMaladie): self
    {
        $this->regimeAssuranceMaladie = $regimeAssuranceMaladie;

        return $this;
    }
}
