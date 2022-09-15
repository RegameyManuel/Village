<?php

namespace App\Entity;

use App\Repository\TVARepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TVARepository::class)]
class TVA
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $tva_nom = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 4, scale: 2)]
    private ?string $tva_taux = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTvaNom(): ?string
    {
        return $this->tva_nom;
    }

    public function setTvaNom(string $tva_nom): self
    {
        $this->tva_nom = $tva_nom;

        return $this;
    }

    public function getTvaTaux(): ?string
    {
        return $this->tva_taux;
    }

    public function setTvaTaux(string $tva_taux): self
    {
        $this->tva_taux = $tva_taux;

        return $this;
    }
}
