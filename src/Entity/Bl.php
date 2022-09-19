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

    #[ORM\ManyToOne(inversedBy: 'commande_bl_liste')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Commande $bl_commande_id = null;

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

    public function getBlCommandeId(): ?Commande
    {
        return $this->bl_commande_id;
    }

    public function setBlCommandeId(?Commande $bl_commande_id): self
    {
        $this->bl_commande_id = $bl_commande_id;

        return $this;
    }
}
