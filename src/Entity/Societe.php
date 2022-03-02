<?php

namespace App\Entity;

use App\Repository\SocieteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SocieteRepository::class)
 */
class Societe
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
    private $effectifSalarieOuAssimile;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $telephone;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $commentaireDestinationGreffe;

    /**
     * @ORM\Column(type="boolean")
     */
    private $visualiserFormalite;

    /**
     * @ORM\Column(type="boolean")
     */
    private $paye;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $referenceFormalite;

    /**
     * @ORM\ManyToOne(targetEntity=FormeJuridique::class, inversedBy="societes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $formeJuridique;

    /**
     * @ORM\OneToOne(targetEntity=DeclarationRelativeSociete::class, cascade={"persist", "remove"})
     */
    private $declarationRelativeSociete;

    /**
     * @ORM\OneToOne(targetEntity=SiegeSocial::class, cascade={"persist", "remove"})
     */
    private $siegeSocial;

    /**
     * @ORM\OneToOne(targetEntity=DeclarationRelativeEtablissementActive::class, cascade={"persist", "remove"})
     */
    private $declarationRelativeEtablissementActive;

    /**
     * @ORM\OneToMany(targetEntity=Beneficiaire::class, mappedBy="societe")
     */
    private $beneficiaires;

    /**
     * @ORM\ManyToOne(targetEntity=ImpositionSurBenefice::class, inversedBy="societes")
     */
    private $impositionSurBenefice;

    /**
     * @ORM\ManyToOne(targetEntity=OptionParticuliereBenefice::class, inversedBy="societes")
     */
    private $optionParticuliereBenefice;

    /**
     * @ORM\ManyToOne(targetEntity=RegimeImpositionMatiereTVA::class, inversedBy="societes")
     */
    private $regimeImpositionMatiereTVA;

    /**
     * @ORM\ManyToOne(targetEntity=OptionPArticuliereMAtiereTVA::class, inversedBy="societes")
     */
    private $optionPArticuliereMAtiereTVA;

    /**
     * @ORM\OneToOne(targetEntity=Adresse::class, cascade={"persist", "remove"})
     */
    private $adresseCorrespondance;

    /**
     * @ORM\OneToOne(targetEntity=Declarant::class, cascade={"persist", "remove"})
     */
    private $declarant;

    /**
     * @ORM\OneToOne(targetEntity=Document::class, cascade={"persist", "remove"})
     */
    private $document;

    /**
     * @ORM\ManyToOne(targetEntity=ModePaiement::class, inversedBy="societes")
     */
    private $modePaiement;

    /**
     * @ORM\Column(type="datetime")
     */
    private $enregistreLe;

    /**
     * @ORM\Column(type="boolean")
     */
    private $societeConstitueAssocieUnique;

    /**
     * @ORM\Column(type="boolean")
     */
    private $personneMoraleConstitueSansActivite;

    public function __construct()
    {
        $this->beneficiaires = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEffectifSalarieOuAssimile(): ?bool
    {
        return $this->effectifSalarieOuAssimile;
    }

    public function setEffectifSalarieOuAssimile(?bool $effectifSalarieOuAssimile): self
    {
        $this->effectifSalarieOuAssimile = $effectifSalarieOuAssimile;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(?string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getCommentaireDestinationGreffe(): ?string
    {
        return $this->commentaireDestinationGreffe;
    }

    public function setCommentaireDestinationGreffe(?string $commentaireDestinationGreffe): self
    {
        $this->commentaireDestinationGreffe = $commentaireDestinationGreffe;

        return $this;
    }

    public function getVisualiserFormalite(): ?bool
    {
        return $this->visualiserFormalite;
    }

    public function setVisualiserFormalite(?bool $visualiserFormalite): self
    {
        $this->visualiserFormalite = $visualiserFormalite;

        return $this;
    }

    public function getPaye(): ?bool
    {
        return $this->paye;
    }

    public function setPaye(?bool $paye): self
    {
        $this->paye = $paye;

        return $this;
    }

    public function getReferenceFormalite(): ?string
    {
        return $this->referenceFormalite;
    }

    public function setReferenceFormalite(?string $referenceFormalite): self
    {
        $this->referenceFormalite = $referenceFormalite;

        return $this;
    }

    public function getFormeJuridique(): ?FormeJuridique
    {
        return $this->formeJuridique;
    }

    public function setFormeJuridique(?FormeJuridique $formeJuridique): self
    {
        $this->formeJuridique = $formeJuridique;

        return $this;
    }

    public function getDeclarationRelativeSociete(): ?DeclarationRelativeSociete
    {
        return $this->declarationRelativeSociete;
    }

    public function setDeclarationRelativeSociete(?DeclarationRelativeSociete $declarationRelativeSociete): self
    {
        $this->declarationRelativeSociete = $declarationRelativeSociete;

        return $this;
    }

    public function getSiegeSocial(): ?SiegeSocial
    {
        return $this->siegeSocial;
    }

    public function setSiegeSocial(?SiegeSocial $siegeSocial): self
    {
        $this->siegeSocial = $siegeSocial;

        return $this;
    }

    public function getDeclarationRelativeEtablissementActive(): ?DeclarationRelativeEtablissementActive
    {
        return $this->declarationRelativeEtablissementActive;
    }

    public function setDeclarationRelativeEtablissementActive(?DeclarationRelativeEtablissementActive $declarationRelativeEtablissementActive): self
    {
        $this->declarationRelativeEtablissementActive = $declarationRelativeEtablissementActive;

        return $this;
    }

    /**
     * @return Collection<int, Beneficiaire>
     */
    public function getBeneficiaires(): Collection
    {
        return $this->beneficiaires;
    }

    public function addBeneficiaire(Beneficiaire $beneficiaire): self
    {
        if (!$this->beneficiaires->contains($beneficiaire)) {
            $this->beneficiaires[] = $beneficiaire;
            $beneficiaire->setSociete($this);
        }

        return $this;
    }

    public function removeBeneficiaire(Beneficiaire $beneficiaire): self
    {
        if ($this->beneficiaires->removeElement($beneficiaire)) {
            // set the owning side to null (unless already changed)
            if ($beneficiaire->getSociete() === $this) {
                $beneficiaire->setSociete(null);
            }
        }

        return $this;
    }

    public function getImpositionSurBenefice(): ?ImpositionSurBenefice
    {
        return $this->impositionSurBenefice;
    }

    public function setImpositionSurBenefice(?ImpositionSurBenefice $impositionSurBenefice): self
    {
        $this->impositionSurBenefice = $impositionSurBenefice;

        return $this;
    }

    public function getOptionParticuliereBenefice(): ?OptionParticuliereBenefice
    {
        return $this->optionParticuliereBenefice;
    }

    public function setOptionParticuliereBenefice(?OptionParticuliereBenefice $optionParticuliereBenefice): self
    {
        $this->optionParticuliereBenefice = $optionParticuliereBenefice;

        return $this;
    }

    public function getRegimeImpositionMatiereTVA(): ?RegimeImpositionMatiereTVA
    {
        return $this->regimeImpositionMatiereTVA;
    }

    public function setRegimeImpositionMatiereTVA(?RegimeImpositionMatiereTVA $regimeImpositionMatiereTVA): self
    {
        $this->regimeImpositionMatiereTVA = $regimeImpositionMatiereTVA;

        return $this;
    }

    public function getOptionPArticuliereMAtiereTVA(): ?OptionPArticuliereMAtiereTVA
    {
        return $this->optionPArticuliereMAtiereTVA;
    }

    public function setOptionPArticuliereMAtiereTVA(?OptionPArticuliereMAtiereTVA $optionPArticuliereMAtiereTVA): self
    {
        $this->optionPArticuliereMAtiereTVA = $optionPArticuliereMAtiereTVA;

        return $this;
    }

    public function getAdresseCorrespondance(): ?Adresse
    {
        return $this->adresseCorrespondance;
    }

    public function setAdresseCorrespondance(?Adresse $adresseCorrespondance): self
    {
        $this->adresseCorrespondance = $adresseCorrespondance;

        return $this;
    }

    public function getDeclarant(): ?Declarant
    {
        return $this->declarant;
    }

    public function setDeclarant(?Declarant $declarant): self
    {
        $this->declarant = $declarant;

        return $this;
    }

    public function getDocument(): ?Document
    {
        return $this->document;
    }

    public function setDocument(?Document $document): self
    {
        $this->document = $document;

        return $this;
    }

    public function getModePaiement(): ?ModePaiement
    {
        return $this->modePaiement;
    }

    public function setModePaiement(?ModePaiement $modePaiement): self
    {
        $this->modePaiement = $modePaiement;

        return $this;
    }

    public function getEnregistreLe(): ?\DateTimeInterface
    {
        return $this->enregistreLe;
    }

    public function setEnregistreLe(\DateTimeInterface $enregistreLe): self
    {
        $this->enregistreLe = $enregistreLe;

        return $this;
    }

    public function getSocieteConstitueAssocieUnique(): ?bool
    {
        return $this->societeConstitueAssocieUnique;
    }

    public function setSocieteConstitueAssocieUnique(bool $societeConstitueAssocieUnique): self
    {
        $this->societeConstitueAssocieUnique = $societeConstitueAssocieUnique;

        return $this;
    }

    public function getPersonneMoraleConstitueSansActivite(): ?bool
    {
        return $this->personneMoraleConstitueSansActivite;
    }

    public function setPersonneMoraleConstitueSansActivite(bool $personneMoraleConstitueSansActivite): self
    {
        $this->personneMoraleConstitueSansActivite = $personneMoraleConstitueSansActivite;

        return $this;
    }

}
