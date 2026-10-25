<?php

namespace App\Entity;

use App\Repository\SeanceRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SeanceRepository::class)]
class Seance
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $dateSeance = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $dateCrea = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateSeance(): ?\DateTimeImmutable
    {
        return $this->dateSeance;
    }

    public function setDateSeance(\DateTimeImmutable $dateSeance): static
    {
        $this->dateSeance = $dateSeance;

        return $this;
    }

    public function getDateCrea(): ?\DateTimeImmutable
    {
        return $this->dateCrea;
    }

    public function setDateCrea(\DateTimeImmutable $dateCrea): static
    {
        $this->dateCrea = $dateCrea;

        return $this;
    }
}
