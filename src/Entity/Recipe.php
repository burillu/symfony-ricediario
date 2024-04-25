<?php

namespace App\Entity;

use App\Repository\RecipeRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RecipeRepository::class)]
class Recipe
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(nullable: true, length: 5)]
    private ?int $calories = null;

    #[ORM\Column(type: Types::BIGINT)]
    private ?string $id_pasto = null;

    #[ORM\Column(type: Types::BIGINT, nullable: true)]
    private ?string $id_voto = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getCalories(): ?string
    {
        return $this->calories;
    }

    public function setCalories(int $calories): static
    {
        $this->calories = $calories;

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

    public function getIdVoto(): ?string
    {
        return $this->id_voto;
    }

    public function setIdVoto(?string $id_voto): static
    {
        $this->id_voto = $id_voto;

        return $this;
    }
}
