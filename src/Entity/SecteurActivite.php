<?php

namespace App\Entity;

use App\Repository\SecteurActiviteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SecteurActiviteRepository::class)
 */
class SecteurActivite
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
    private $secteurActivite;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSecteurActivite(): ?string
    {
        return $this->secteurActivite;
    }

    public function setSecteurActivite(string $secteurActivite): self
    {
        $this->secteurActivite = $secteurActivite;

        return $this;
    }

}
