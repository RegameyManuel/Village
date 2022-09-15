<?php

namespace App\Entity;

use App\Repository\CommandeRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommandeRepository::class)]
class Commande
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?bool $commande_partielle = null;

    #[ORM\Column(nullable: true)]
    private ?bool $commande_expediee = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $commande_dt_paiement = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $commande_dt_expedition = null;

    #[ORM\Column(nullable: true)]
    private ?bool $commande_virement = null;

    #[ORM\Column(nullable: true)]
    private ?bool $commande_cheque = null;

    #[ORM\Column]
    private ?bool $commande_valide = null;

    #[ORM\Column]
    private ?bool $commande_archive = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function isCommandePartielle(): ?bool
    {
        return $this->commande_partielle;
    }

    public function setCommandePartielle(?bool $commande_partielle): self
    {
        $this->commande_partielle = $commande_partielle;

        return $this;
    }

    public function isCommandeExpediee(): ?bool
    {
        return $this->commande_expediee;
    }

    public function setCommandeExpediee(?bool $commande_expediee): self
    {
        $this->commande_expediee = $commande_expediee;

        return $this;
    }

    public function getCommandeDtPaiement(): ?\DateTimeInterface
    {
        return $this->commande_dt_paiement;
    }

    public function setCommandeDtPaiement(?\DateTimeInterface $commande_dt_paiement): self
    {
        $this->commande_dt_paiement = $commande_dt_paiement;

        return $this;
    }

    public function getCommandeDtExpedition(): ?\DateTimeInterface
    {
        return $this->commande_dt_expedition;
    }

    public function setCommandeDtExpedition(?\DateTimeInterface $commande_dt_expedition): self
    {
        $this->commande_dt_expedition = $commande_dt_expedition;

        return $this;
    }

    public function isCommandeVirement(): ?bool
    {
        return $this->commande_virement;
    }

    public function setCommandeVirement(?bool $commande_virement): self
    {
        $this->commande_virement = $commande_virement;

        return $this;
    }

    public function isCommandeCheque(): ?bool
    {
        return $this->commande_cheque;
    }

    public function setCommandeCheque(?bool $commande_cheque): self
    {
        $this->commande_cheque = $commande_cheque;

        return $this;
    }

    public function isCommandeValide(): ?bool
    {
        return $this->commande_valide;
    }

    public function setCommandeValide(bool $commande_valide): self
    {
        $this->commande_valide = $commande_valide;

        return $this;
    }

    public function isCommandeArchive(): ?bool
    {
        return $this->commande_archive;
    }

    public function setCommandeArchive(bool $commande_archive): self
    {
        $this->commande_archive = $commande_archive;

        return $this;
    }
}
