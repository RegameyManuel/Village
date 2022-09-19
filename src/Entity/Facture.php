<?php

namespace App\Entity;

use App\Repository\FactureRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FactureRepository::class)]
class Facture
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $fact_date = null;

    #[ORM\Column(length: 255)]
    private ?string $fact_sauvegarde = null;

    #[ORM\OneToOne(inversedBy: 'commande_fact_id', cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Commande $fact_commande_id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFactDate(): ?\DateTimeInterface
    {
        return $this->fact_date;
    }

    public function setFactDate(\DateTimeInterface $fact_date): self
    {
        $this->fact_date = $fact_date;

        return $this;
    }

    public function getFactSauvegarde(): ?string
    {
        return $this->fact_sauvegarde;
    }

    public function setFactSauvegarde(string $fact_sauvegarde): self
    {
        $this->fact_sauvegarde = $fact_sauvegarde;

        return $this;
    }

    public function getFactCommandeId(): ?Commande
    {
        return $this->fact_commande_id;
    }

    public function setFactCommandeId(Commande $fact_commande_id): self
    {
        $this->fact_commande_id = $fact_commande_id;

        return $this;
    }
}
