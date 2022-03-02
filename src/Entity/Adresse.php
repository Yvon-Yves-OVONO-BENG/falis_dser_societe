<?php

namespace App\Entity;

use App\Repository\AdresseRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AdresseRepository::class)
 */
class Adresse
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $complementAdresse;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $numeroRue;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $voie;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $codePostal;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ville;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $accepteRecevoirInformations;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $fixe;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $partable;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $fax;

    /**
     * @ORM\ManyToOne(targetEntity=Arrondissement::class, inversedBy="adresses")
     */
    private $arrondissement;

    /**
     * @ORM\ManyToOne(targetEntity=Commune::class, inversedBy="adresses")
     */
    private $commune;

    /**
     * @ORM\ManyToOne(targetEntity=BisTer::class, inversedBy="adresses")
     */
    private $bisTer;

    public function getComplementAdresse(): ?string
    {
        return $this->complementAdresse;
    }

    public function setComplementAdresse(?string $complementAdresse): self
    {
        $this->complementAdresse = $complementAdresse;

        return $this;
    }

    public function getNumeroRue(): ?string
    {
        return $this->numeroRue;
    }

    public function setNumeroRue(?string $numeroRue): self
    {
        $this->numeroRue = $numeroRue;

        return $this;
    }

    public function getVoie(): ?string
    {
        return $this->voie;
    }

    public function setVoie(?string $voie): self
    {
        $this->voie = $voie;

        return $this;
    }

    public function getCodePostal(): ?string
    {
        return $this->codePostal;
    }

    public function setCodePostal(?string $codePostal): self
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(?string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getAccepteRecevoirInformations(): ?bool
    {
        return $this->accepteRecevoirInformations;
    }

    public function setAccepteRecevoirInformations(?bool $accepteRecevoirInformations): self
    {
        $this->accepteRecevoirInformations = $accepteRecevoirInformations;

        return $this;
    }

    public function getFixe(): ?string
    {
        return $this->fixe;
    }

    public function setFixe(?string $fixe): self
    {
        $this->fixe = $fixe;

        return $this;
    }

    public function getPartable(): ?string
    {
        return $this->partable;
    }

    public function setPartable(?string $partable): self
    {
        $this->partable = $partable;

        return $this;
    }

    public function getFax(): ?string
    {
        return $this->fax;
    }

    public function setFax(?string $fax): self
    {
        $this->fax = $fax;

        return $this;
    }

    public function getArrondissement(): ?Arrondissement
    {
        return $this->arrondissement;
    }

    public function setArrondissement(?Arrondissement $arrondissement): self
    {
        $this->arrondissement = $arrondissement;

        return $this;
    }

    public function getCommune(): ?Commune
    {
        return $this->commune;
    }

    public function setCommune(?Commune $commune): self
    {
        $this->commune = $commune;

        return $this;
    }

    public function getBisTer(): ?BisTer
    {
        return $this->bisTer;
    }

    public function setBisTer(?BisTer $bisTer): self
    {
        $this->bisTer = $bisTer;

        return $this;
    }

}
