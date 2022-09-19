<?php

namespace App\Entity;

use App\Repository\DetailCommandeRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DetailCommandeRepository::class)]
class DetailCommande
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $detail_qte = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $detail_prix = null;

    #[ORM\ManyToOne(inversedBy: 'commande_detail')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Commande $detail_commande_id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDetailQte(): ?int
    {
        return $this->detail_qte;
    }

    public function setDetailQte(int $detail_qte): self
    {
        $this->detail_qte = $detail_qte;

        return $this;
    }

    public function getDetailPrix(): ?string
    {
        return $this->detail_prix;
    }

    public function setDetailPrix(string $detail_prix): self
    {
        $this->detail_prix = $detail_prix;

        return $this;
    }

    public function getDetailCommandeId(): ?Commande
    {
        return $this->detail_commande_id;
    }

    public function setDetailCommandeId(?Commande $detail_commande_id): self
    {
        $this->detail_commande_id = $detail_commande_id;

        return $this;
    }
}
