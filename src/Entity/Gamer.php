<?php

namespace App\Entity;

use App\Repository\GamerRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GamerRepository::class)]
class Gamer
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $SurNom = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $badge = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSurNom(): ?string
    {
        return $this->SurNom;
    }

    public function setSurNom(?string $SurNom): static
    {
        $this->SurNom = $SurNom;

        return $this;
    }

    public function getBadge(): ?string
    {
        return $this->badge;
    }

    public function setBadge(?string $badge): static
    {
        $this->badge = $badge;

        return $this;
    }
}
