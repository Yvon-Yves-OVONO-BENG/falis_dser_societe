<?php

namespace App\Entity;

use App\Repository\OrigineFondsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OrigineFondsRepository::class)
 */
class OrigineFonds
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
    private $origineFonds;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOrigineFonds(): ?string
    {
        return $this->origineFonds;
    }

    public function setOrigineFonds(string $origineFonds): self
    {
        $this->origineFonds = $origineFonds;

        return $this;
    }
}
