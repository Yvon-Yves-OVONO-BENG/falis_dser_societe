<?php

namespace App\Entity;

use App\Repository\BeneficiaireRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BeneficiaireRepository::class)
 */
class Beneficiaire
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $dateDevenuBeneficiaire;

    /**
     * @ORM\OneToOne(targetEntity=Dirigeant::class, cascade={"persist", "remove"})
     */
    private $dirigeantActuel;

    /**
     * @ORM\OneToOne(targetEntity=Personne::class, cascade={"persist", "remove"})
     */
    private $autreDirigeant;

    /**
     * @ORM\Column(type="boolean")
     */
    private $estDirigeantActuel;

    /**
     * @ORM\Column(type="float")
     */
    private $plusDe25CDPP;

    /**
     * @ORM\Column(type="float")
     */
    private $plusDe25CDNP;

    /**
     * @ORM\Column(type="float")
     */
    private $plusDe25CIIPP;

    /**
     * @ORM\Column(type="float")
     */
    private $plusDe25CIINP;

    /**
     * @ORM\Column(type="float")
     */
    private $plusDe25CIPMPP;

    /**
     * @ORM\Column(type="float")
     */
    private $plusDe25CIPMNP;

    /**
     * @ORM\Column(type="float")
     */
    private $plusDe25DVDPP;

    /**
     * @ORM\Column(type="float")
     */
    private $plusDe25DVDNP;

    /**
     * @ORM\Column(type="float")
     */
    private $plusDe25DVDU;

    /**
     * @ORM\Column(type="float")
     */
    private $plusDe25DVIIPP;

    /**
     * @ORM\Column(type="float")
     */
    private $plusDe25DVIINP;

    /**
     * @ORM\Column(type="float")
     */
    private $plusDe25DVIIU;

    /**
     * @ORM\Column(type="float")
     */
    private $plusDe25DVIPMPP;

    /**
     * @ORM\Column(type="float")
     */
    private $plusDe25DVIPMNP;

    /**
     * @ORM\Column(type="float")
     */
    private $plusDe25DVIPMU;

    /**
     * @ORM\Column(type="boolean")
     */
    private $autreMoyControle;

    /**
     * @ORM\Column(type="boolean")
     */
    private $autreMoyControleDetermination;

    /**
     * @ORM\Column(type="boolean")
     */
    private $autreMoyControleDetentionPouvoir;

    /**
     * @ORM\Column(type="boolean")
     */
    private $representantLegal;

    /**
     * @ORM\Column(type="boolean")
     */
    private $plusDe25Capital;

    /**
     * @ORM\Column(type="boolean")
     */
    private $plusDe25CD;

    /**
     * @ORM\Column(type="boolean")
     */
    private $plusDe25CI;

    /**
     * @ORM\Column(type="boolean")
     */
    private $plusDe25CII;

    /**
     * @ORM\Column(type="boolean")
     */
    private $plusDe25CIPM;

    /**
     * @ORM\Column(type="boolean")
     */
    private $plusDe25DV;

    /**
     * @ORM\Column(type="boolean")
     */
    private $plusDe25DVD;

    /**
     * @ORM\Column(type="boolean")
     */
    private $plusDe25DVI;

    /**
     * @ORM\Column(type="boolean")
     */
    private $plusDe25DVII;

    /**
     * @ORM\Column(type="boolean")
     */
    private $plusDe25DVIPM;

    /**
     * @ORM\ManyToOne(targetEntity=Societe::class, inversedBy="beneficiaires")
     */
    private $societe;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateDevenuBeneficiaire(): ?\DateTimeInterface
    {
        return $this->dateDevenuBeneficiaire;
    }

    public function setDateDevenuBeneficiaire(\DateTimeInterface $dateDevenuBeneficiaire): self
    {
        $this->dateDevenuBeneficiaire = $dateDevenuBeneficiaire;

        return $this;
    }

    public function getDirigeantActuel(): ?Dirigeant
    {
        return $this->dirigeantActuel;
    }

    public function setDirigeantActuel(?Dirigeant $dirigeantActuel): self
    {
        $this->dirigeantActuel = $dirigeantActuel;

        return $this;
    }

    public function getAutreDirigeant(): ?Personne
    {
        return $this->autreDirigeant;
    }

    public function setAutreDirigeant(?Personne $autreDirigeant): self
    {
        $this->autreDirigeant = $autreDirigeant;

        return $this;
    }

    public function getEstDirigeantActuel(): ?bool
    {
        return $this->estDirigeantActuel;
    }

    public function setEstDirigeantActuel(bool $estDirigeantActuel): self
    {
        $this->estDirigeantActuel = $estDirigeantActuel;

        return $this;
    }

    public function getPlusDe25CDPP(): ?float
    {
        return $this->plusDe25CDPP;
    }

    public function setPlusDe25CDPP(float $plusDe25CDPP): self
    {
        $this->plusDe25CDPP = $plusDe25CDPP;

        return $this;
    }

    public function getPlusDe25CDNP(): ?float
    {
        return $this->plusDe25CDNP;
    }

    public function setPlusDe25CDNP(float $plusDe25CDNP): self
    {
        $this->plusDe25CDNP = $plusDe25CDNP;

        return $this;
    }

    public function getPlusDe25CIIPP(): ?float
    {
        return $this->plusDe25CIIPP;
    }

    public function setPlusDe25CIIPP(float $plusDe25CIIPP): self
    {
        $this->plusDe25CIIPP = $plusDe25CIIPP;

        return $this;
    }

    public function getPlusDe25CIINP(): ?float
    {
        return $this->plusDe25CIINP;
    }

    public function setPlusDe25CIINP(float $plusDe25CIINP): self
    {
        $this->plusDe25CIINP = $plusDe25CIINP;

        return $this;
    }

    public function getPlusDe25CIPMPP(): ?float
    {
        return $this->plusDe25CIPMPP;
    }

    public function setPlusDe25CIPMPP(float $plusDe25CIPMPP): self
    {
        $this->plusDe25CIPMPP = $plusDe25CIPMPP;

        return $this;
    }

    public function getPlusDe25CIPMNP(): ?float
    {
        return $this->plusDe25CIPMNP;
    }

    public function setPlusDe25CIPMNP(float $plusDe25CIPMNP): self
    {
        $this->plusDe25CIPMNP = $plusDe25CIPMNP;

        return $this;
    }

    public function getPlusDe25DVDPP(): ?float
    {
        return $this->plusDe25DVDPP;
    }

    public function setPlusDe25DVDPP(float $plusDe25DVDPP): self
    {
        $this->plusDe25DVDPP = $plusDe25DVDPP;

        return $this;
    }

    public function getPlusDe25DVDNP(): ?float
    {
        return $this->plusDe25DVDNP;
    }

    public function setPlusDe25DVDNP(float $plusDe25DVDNP): self
    {
        $this->plusDe25DVDNP = $plusDe25DVDNP;

        return $this;
    }

    public function getPlusDe25DVDU(): ?float
    {
        return $this->plusDe25DVDU;
    }

    public function setPlusDe25DVDU(float $plusDe25DVDU): self
    {
        $this->plusDe25DVDU = $plusDe25DVDU;

        return $this;
    }

    public function getPlusDe25DVIIPP(): ?float
    {
        return $this->plusDe25DVIIPP;
    }

    public function setPlusDe25DVIIPP(float $plusDe25DVIIPP): self
    {
        $this->plusDe25DVIIPP = $plusDe25DVIIPP;

        return $this;
    }

    public function getPlusDe25DVIINP(): ?float
    {
        return $this->plusDe25DVIINP;
    }

    public function setPlusDe25DVIINP(float $plusDe25DVIINP): self
    {
        $this->plusDe25DVIINP = $plusDe25DVIINP;

        return $this;
    }

    public function getPlusDe25DVIIU(): ?float
    {
        return $this->plusDe25DVIIU;
    }

    public function setPlusDe25DVIIU(float $plusDe25DVIIU): self
    {
        $this->plusDe25DVIIU = $plusDe25DVIIU;

        return $this;
    }

    public function getPlusDe25DVIPMPP(): ?float
    {
        return $this->plusDe25DVIPMPP;
    }

    public function setPlusDe25DVIPMPP(float $plusDe25DVIPMPP): self
    {
        $this->plusDe25DVIPMPP = $plusDe25DVIPMPP;

        return $this;
    }

    public function getPlusDe25DVIPMNP(): ?float
    {
        return $this->plusDe25DVIPMNP;
    }

    public function setPlusDe25DVIPMNP(float $plusDe25DVIPMNP): self
    {
        $this->plusDe25DVIPMNP = $plusDe25DVIPMNP;

        return $this;
    }

    public function getPlusDe25DVIPMU(): ?float
    {
        return $this->plusDe25DVIPMU;
    }

    public function setPlusDe25DVIPMU(float $plusDe25DVIPMU): self
    {
        $this->plusDe25DVIPMU = $plusDe25DVIPMU;

        return $this;
    }

    public function getAutreMoyControle(): ?bool
    {
        return $this->autreMoyControle;
    }

    public function setAutreMoyControle(bool $autreMoyControle): self
    {
        $this->autreMoyControle = $autreMoyControle;

        return $this;
    }

    public function getAutreMoyControleDetermination(): ?bool
    {
        return $this->autreMoyControleDetermination;
    }

    public function setAutreMoyControleDetermination(bool $autreMoyControleDetermination): self
    {
        $this->autreMoyControleDetermination = $autreMoyControleDetermination;

        return $this;
    }

    public function getAutreMoyControleDetentionPouvoir(): ?bool
    {
        return $this->autreMoyControleDetentionPouvoir;
    }

    public function setAutreMoyControleDetentionPouvoir(bool $autreMoyControleDetentionPouvoir): self
    {
        $this->autreMoyControleDetentionPouvoir = $autreMoyControleDetentionPouvoir;

        return $this;
    }

    public function getRepresentantLegal(): ?bool
    {
        return $this->representantLegal;
    }

    public function setRepresentantLegal(bool $representantLegal): self
    {
        $this->representantLegal = $representantLegal;

        return $this;
    }

    public function getPlusDe25Capital(): ?bool
    {
        return $this->plusDe25Capital;
    }

    public function setPlusDe25Capital(bool $plusDe25Capital): self
    {
        $this->plusDe25Capital = $plusDe25Capital;

        return $this;
    }

    public function getPlusDe25CD(): ?bool
    {
        return $this->plusDe25CD;
    }

    public function setPlusDe25CD(bool $plusDe25CD): self
    {
        $this->plusDe25CD = $plusDe25CD;

        return $this;
    }

    public function getPlusDe25CI(): ?bool
    {
        return $this->plusDe25CI;
    }

    public function setPlusDe25CI(bool $plusDe25CI): self
    {
        $this->plusDe25CI = $plusDe25CI;

        return $this;
    }

    public function getPlusDe25CII(): ?bool
    {
        return $this->plusDe25CII;
    }

    public function setPlusDe25CII(bool $plusDe25CII): self
    {
        $this->plusDe25CII = $plusDe25CII;

        return $this;
    }

    public function getPlusDe25CIPM(): ?bool
    {
        return $this->plusDe25CIPM;
    }

    public function setPlusDe25CIPM(bool $plusDe25CIPM): self
    {
        $this->plusDe25CIPM = $plusDe25CIPM;

        return $this;
    }

    public function getPlusDe25DV(): ?bool
    {
        return $this->plusDe25DV;
    }

    public function setPlusDe25DV(bool $plusDe25DV): self
    {
        $this->plusDe25DV = $plusDe25DV;

        return $this;
    }

    public function getPlusDe25DVD(): ?bool
    {
        return $this->plusDe25DVD;
    }

    public function setPlusDe25DVD(bool $plusDe25DVD): self
    {
        $this->plusDe25DVD = $plusDe25DVD;

        return $this;
    }

    public function getPlusDe25DVI(): ?bool
    {
        return $this->plusDe25DVI;
    }

    public function setPlusDe25DVI(bool $plusDe25DVI): self
    {
        $this->plusDe25DVI = $plusDe25DVI;

        return $this;
    }

    public function getPlusDe25DVII(): ?bool
    {
        return $this->plusDe25DVII;
    }

    public function setPlusDe25DVII(bool $plusDe25DVII): self
    {
        $this->plusDe25DVII = $plusDe25DVII;

        return $this;
    }

    public function getPlusDe25DVIPM(): ?bool
    {
        return $this->plusDe25DVIPM;
    }

    public function setPlusDe25DVIPM(bool $plusDe25DVIPM): self
    {
        $this->plusDe25DVIPM = $plusDe25DVIPM;

        return $this;
    }

    public function getSociete(): ?Societe
    {
        return $this->societe;
    }

    public function setSociete(?Societe $societe): self
    {
        $this->societe = $societe;

        return $this;
    }
}
