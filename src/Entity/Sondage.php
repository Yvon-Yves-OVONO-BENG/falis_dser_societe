<?php

namespace App\Entity;

use App\Repository\SondageRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SondageRepository::class)
 */
class Sondage
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
    private $sondage;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSondage(): ?string
    {
        return $this->sondage;
    }

    public function setSondage(string $sondage): self
    {
        $this->sondage = $sondage;

        return $this;
    }

}
