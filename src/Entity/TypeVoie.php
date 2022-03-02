<?php

namespace App\Entity;

use App\Repository\TypeVoieRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TypeVoieRepository::class)
 */
class TypeVoie
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
    private $typeVoie;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeVoie(): ?string
    {
        return $this->typeVoie;
    }

    public function setTypeVoie(string $typeVoie): self
    {
        $this->typeVoie = $typeVoie;

        return $this;
    }
}
