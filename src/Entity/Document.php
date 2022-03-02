<?php

namespace App\Entity;

use App\Repository\DocumentRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DocumentRepository::class)
 */
class Document
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
    private $statutConstitutif;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $attestationDepotFonds;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $listeSouscripteurs;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nominationDirigeant;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $autreNomination;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $rapportCommisaireAuCompte;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $acteComplementaire;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $attestationParutionConstitution;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $attestationSurHonneur;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $copiePieceIdentite;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $justificatifJouissanceLocaux;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $copieAutorisationDiplome;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $justificatifIdentiteDeclarant;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $pieceJustificativeComplementaire;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStatutConstitutif(): ?string
    {
        return $this->statutConstitutif;
    }

    public function setStatutConstitutif(string $statutConstitutif): self
    {
        $this->statutConstitutif = $statutConstitutif;

        return $this;
    }

    public function getAttestationDepotFonds(): ?string
    {
        return $this->attestationDepotFonds;
    }

    public function setAttestationDepotFonds(?string $attestationDepotFonds): self
    {
        $this->attestationDepotFonds = $attestationDepotFonds;

        return $this;
    }

    public function getListeSouscripteurs(): ?string
    {
        return $this->listeSouscripteurs;
    }

    public function setListeSouscripteurs(?string $listeSouscripteurs): self
    {
        $this->listeSouscripteurs = $listeSouscripteurs;

        return $this;
    }

    public function getNominationDirigeant(): ?string
    {
        return $this->nominationDirigeant;
    }

    public function setNominationDirigeant(?string $nominationDirigeant): self
    {
        $this->nominationDirigeant = $nominationDirigeant;

        return $this;
    }

    public function getAutreNomination(): ?string
    {
        return $this->autreNomination;
    }

    public function setAutreNomination(?string $autreNomination): self
    {
        $this->autreNomination = $autreNomination;

        return $this;
    }

    public function getRapportCommisaireAuCompte(): ?string
    {
        return $this->rapportCommisaireAuCompte;
    }

    public function setRapportCommisaireAuCompte(?string $rapportCommisaireAuCompte): self
    {
        $this->rapportCommisaireAuCompte = $rapportCommisaireAuCompte;

        return $this;
    }

    public function getActeComplementaire(): ?string
    {
        return $this->acteComplementaire;
    }

    public function setActeComplementaire(?string $acteComplementaire): self
    {
        $this->acteComplementaire = $acteComplementaire;

        return $this;
    }

    public function getAttestationParutionConstitution(): ?string
    {
        return $this->attestationParutionConstitution;
    }

    public function setAttestationParutionConstitution(?string $attestationParutionConstitution): self
    {
        $this->attestationParutionConstitution = $attestationParutionConstitution;

        return $this;
    }

    public function getAttestationSurHonneur(): ?string
    {
        return $this->attestationSurHonneur;
    }

    public function setAttestationSurHonneur(?string $attestationSurHonneur): self
    {
        $this->attestationSurHonneur = $attestationSurHonneur;

        return $this;
    }

    public function getCopiePieceIdentite(): ?string
    {
        return $this->copiePieceIdentite;
    }

    public function setCopiePieceIdentite(?string $copiePieceIdentite): self
    {
        $this->copiePieceIdentite = $copiePieceIdentite;

        return $this;
    }

    public function getJustificatifJouissanceLocaux(): ?string
    {
        return $this->justificatifJouissanceLocaux;
    }

    public function setJustificatifJouissanceLocaux(?string $justificatifJouissanceLocaux): self
    {
        $this->justificatifJouissanceLocaux = $justificatifJouissanceLocaux;

        return $this;
    }

    public function getCopieAutorisationDiplome(): ?string
    {
        return $this->copieAutorisationDiplome;
    }

    public function setCopieAutorisationDiplome(?string $copieAutorisationDiplome): self
    {
        $this->copieAutorisationDiplome = $copieAutorisationDiplome;

        return $this;
    }

    public function getJustificatifIdentiteDeclarant(): ?string
    {
        return $this->justificatifIdentiteDeclarant;
    }

    public function setJustificatifIdentiteDeclarant(?string $justificatifIdentiteDeclarant): self
    {
        $this->justificatifIdentiteDeclarant = $justificatifIdentiteDeclarant;

        return $this;
    }

    public function getPieceJustificativeComplementaire(): ?string
    {
        return $this->pieceJustificativeComplementaire;
    }

    public function setPieceJustificativeComplementaire(?string $pieceJustificativeComplementaire): self
    {
        $this->pieceJustificativeComplementaire = $pieceJustificativeComplementaire;

        return $this;
    }
}
