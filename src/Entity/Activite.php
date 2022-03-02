<?php

namespace App\Entity;

use App\Repository\ActiviteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ActiviteRepository::class)
 */
class Activite
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
    private $dateDebut;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $listeActivites;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $detailActivitePrincipale;

    /**
     * @ORM\Column(type="boolean")
     */
    private $activiteSoumiseObligationQPA;

    /**
     * @ORM\Column(type="boolean")
     */
    private $activiteAmbulante;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $superficie;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $autrePrecise;

    /**
     * @ORM\ManyToOne(targetEntity=TypeActivitePrincipale::class, inversedBy="activites")
     */
    private $typeActivitePrincipale;

    /**
     * @ORM\ManyToOne(targetEntity=ActivitePrincipale::class, inversedBy="activites")
     */
    private $activitePrincipale;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(\DateTimeInterface $dateDebut): self
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getListeActivites(): ?string
    {
        return $this->listeActivites;
    }

    public function setListeActivites(?string $listeActivites): self
    {
        $this->listeActivites = $listeActivites;

        return $this;
    }

    public function getDetailActivitePrincipale(): ?string
    {
        return $this->detailActivitePrincipale;
    }

    public function setDetailActivitePrincipale(?string $detailActivitePrincipale): self
    {
        $this->detailActivitePrincipale = $detailActivitePrincipale;

        return $this;
    }

    public function getActiviteSoumiseObligationQPA(): ?bool
    {
        return $this->activiteSoumiseObligationQPA;
    }

    public function setActiviteSoumiseObligationQPA(bool $activiteSoumiseObligationQPA): self
    {
        $this->activiteSoumiseObligationQPA = $activiteSoumiseObligationQPA;

        return $this;
    }

    public function getActiviteAmbulante(): ?bool
    {
        return $this->activiteAmbulante;
    }

    public function setActiviteAmbulante(bool $activiteAmbulante): self
    {
        $this->activiteAmbulante = $activiteAmbulante;

        return $this;
    }

    public function getSuperficie(): ?float
    {
        return $this->superficie;
    }

    public function setSuperficie(?float $superficie): self
    {
        $this->superficie = $superficie;

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

    public function getTypeActivitePrincipale(): ?TypeActivitePrincipale
    {
        return $this->typeActivitePrincipale;
    }

    public function setTypeActivitePrincipale(?TypeActivitePrincipale $typeActivitePrincipale): self
    {
        $this->typeActivitePrincipale = $typeActivitePrincipale;

        return $this;
    }

    public function getActivitePrincipale(): ?ActivitePrincipale
    {
        return $this->activitePrincipale;
    }

    public function setActivitePrincipale(?ActivitePrincipale $activitePrincipale): self
    {
        $this->activitePrincipale = $activitePrincipale;

        return $this;
    }
}
