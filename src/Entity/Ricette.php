<?php

namespace App\Entity;

use App\Repository\RicetteRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RicetteRepository::class)]
class Ricette
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nome = null;

    #[ORM\Column(type: Types::BIGINT)]
    private ?string $id_pasto = null;

    #[ORM\Column(type: Types::TIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $tempo = null;

    #[ORM\Column(nullable: true)]
    private ?int $calorie = null;

    #[ORM\Column(type: Types::BIGINT, nullable: true)]
    private ?string $id_voto = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNome(): ?string
    {
        return $this->nome;
    }

    public function setNome(string $nome): static
    {
        $this->nome = $nome;

        return $this;
    }

    public function getIdPasto(): ?string
    {
        return $this->id_pasto;
    }

    public function setIdPasto(string $id_pasto): static
    {
        $this->id_pasto = $id_pasto;

        return $this;
    }

    public function getTempo(): ?\DateTimeInterface
    {
        return $this->tempo;
    }

    public function setTempo(?\DateTimeInterface $tempo): static
    {
        $this->tempo = $tempo;

        return $this;
    }

    public function getCalorie(): ?int
    {
        return $this->calorie;
    }

    public function setCalorie(?int $calorie): static
    {
        $this->calorie = $calorie;

        return $this;
    }

    public function getIdVoto(): ?string
    {
        return $this->id_voto;
    }

    public function setVoto(?string $id_voto): static
    {
        $this->id_voto = $id_voto;

        return $this;
    }
}
