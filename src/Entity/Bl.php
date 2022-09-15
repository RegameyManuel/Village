<?php

namespace App\Entity;

use App\Repository\BlRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BlRepository::class)]
class Bl
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $bl_date = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBlDate(): ?\DateTimeInterface
    {
        return $this->bl_date;
    }

    public function setBlDate(\DateTimeInterface $bl_date): self
    {
        $this->bl_date = $bl_date;

        return $this;
    }
}
