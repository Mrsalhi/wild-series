<?php

namespace App\Entity;

use App\Repository\EpisodeRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EpisodeRepository::class)]
class Episode
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;


    #[ORM\Column]
    private ?int $number = null;

    #[ORM\Column]
    private ?int $synopsis = null;

    #[ORM\ManyToOne(inversedBy: 'episodes')]
    #[ORM\JoinColumn(nullable: false)]
    private ?season $title = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumber(): ?int
    {
        return $this->number;
    }

    public function setNumber(int $number): static
    {
        $this->number = $number;

        return $this;
    }

    public function getSynopsis(): ?int
    {
        return $this->synopsis;
    }

    public function setSynopsis(int $synopsis): static
    {
        $this->synopsis = $synopsis;

        return $this;
    }

    public function getTitle(): ?season
    {
        return $this->title;
    }

    public function setTitle(?season $title): static
    {
        $this->title = $title;

        return $this;
    }

}
