<?php

namespace App\Entity;

use App\Repository\DetailsOrigineFondsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DetailsOrigineFondsRepository::class)
 */
class DetailsOrigineFonds
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="boolean")
     */
    private $fondArtisanal;

    /**
     * @ORM\Column(type="boolean")
     */
    private $achatCadrePlanCession;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateParutionAnnonceLegale;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $titreSupport;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateDebutContrat;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateFinContrat;

    /**
     * @ORM\Column(type="boolean")
     */
    private $renouvellementParTaciteReconduction;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $autrePrecise;

    /**
     * @ORM\OneToOne(targetEntity=Personne::class, cascade={"persist", "remove"})
     */
    private $precedentExploitant;

    /**
     * @ORM\OneToOne(targetEntity=Personne::class, cascade={"persist", "remove"})
     */
    private $loueurFonds;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFondArtisanal(): ?bool
    {
        return $this->fondArtisanal;
    }

    public function setFondArtisanal(bool $fondArtisanal): self
    {
        $this->fondArtisanal = $fondArtisanal;

        return $this;
    }

    public function getAchatCadrePlanCession(): ?bool
    {
        return $this->achatCadrePlanCession;
    }

    public function setAchatCadrePlanCession(bool $achatCadrePlanCession): self
    {
        $this->achatCadrePlanCession = $achatCadrePlanCession;

        return $this;
    }

    public function getDateParutionAnnonceLegale(): ?\DateTimeInterface
    {
        return $this->dateParutionAnnonceLegale;
    }

    public function setDateParutionAnnonceLegale(?\DateTimeInterface $dateParutionAnnonceLegale): self
    {
        $this->dateParutionAnnonceLegale = $dateParutionAnnonceLegale;

        return $this;
    }

    public function getTitreSupport(): ?string
    {
        return $this->titreSupport;
    }

    public function setTitreSupport(?string $titreSupport): self
    {
        $this->titreSupport = $titreSupport;

        return $this;
    }

    public function getDateDebutContrat(): ?\DateTimeInterface
    {
        return $this->dateDebutContrat;
    }

    public function setDateDebutContrat(?\DateTimeInterface $dateDebutContrat): self
    {
        $this->dateDebutContrat = $dateDebutContrat;

        return $this;
    }

    public function getDateFinContrat(): ?\DateTimeInterface
    {
        return $this->dateFinContrat;
    }

    public function setDateFinContrat(?\DateTimeInterface $dateFinContrat): self
    {
        $this->dateFinContrat = $dateFinContrat;

        return $this;
    }

    public function getRenouvellementParTaciteReconduction(): ?bool
    {
        return $this->renouvellementParTaciteReconduction;
    }

    public function setRenouvellementParTaciteReconduction(bool $renouvellementParTaciteReconduction): self
    {
        $this->renouvellementParTaciteReconduction = $renouvellementParTaciteReconduction;

        return $this;
    }

    public function getAutrePrecise(): ?string
    {
        return $this->autrePrecise;
    }

    public function setAutrePrecise(?string $autrePrecise): self
    {
        $this->autrePrecise = $autrePrecise;

        return $this;
    }

    public function getPrecedentExploitant(): ?Personne
    {
        return $this->precedentExploitant;
    }

    public function setPrecedentExploitant(?Personne $precedentExploitant): self
    {
        $this->precedentExploitant = $precedentExploitant;

        return $this;
    }

    public function getLoueurFonds(): ?Personne
    {
        return $this->loueurFonds;
    }

    public function setLoueurFonds(?Personne $loueurFonds): self
    {
        $this->loueurFonds = $loueurFonds;

        return $this;
    }
}
