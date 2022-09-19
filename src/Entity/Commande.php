<?php

namespace App\Entity;

use App\Repository\CommandeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    #[ORM\OneToMany(mappedBy: 'detail_commande_id', targetEntity: DetailCommande::class, orphanRemoval: true)]
    private Collection $commande_detail;

    #[ORM\OneToOne(mappedBy: 'fact_commande_id', cascade: ['persist', 'remove'])]
    private ?Facture $commande_fact_id = null;

    #[ORM\OneToMany(mappedBy: 'bl_commande_id', targetEntity: Bl::class, orphanRemoval: true)]
    private Collection $commande_bl_liste;

    public function __construct()
    {
        $this->commande_detail = new ArrayCollection();
        $this->commande_bl_liste = new ArrayCollection();
    }

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

    /**
     * @return Collection<int, DetailCommande>
     */
    public function getCommandeDetail(): Collection
    {
        return $this->commande_detail;
    }

    public function addCommandeDetail(DetailCommande $commandeDetail): self
    {
        if (!$this->commande_detail->contains($commandeDetail)) {
            $this->commande_detail->add($commandeDetail);
            $commandeDetail->setDetailCommandeId($this);
        }

        return $this;
    }

    public function removeCommandeDetail(DetailCommande $commandeDetail): self
    {
        if ($this->commande_detail->removeElement($commandeDetail)) {
            // set the owning side to null (unless already changed)
            if ($commandeDetail->getDetailCommandeId() === $this) {
                $commandeDetail->setDetailCommandeId(null);
            }
        }

        return $this;
    }

    public function getCommandeFactId(): ?Facture
    {
        return $this->commande_fact_id;
    }

    public function setCommandeFactId(Facture $commande_fact_id): self
    {
        // set the owning side of the relation if necessary
        if ($commande_fact_id->getFactCommandeId() !== $this) {
            $commande_fact_id->setFactCommandeId($this);
        }

        $this->commande_fact_id = $commande_fact_id;

        return $this;
    }

    /**
     * @return Collection<int, Bl>
     */
    public function getCommandeBlListe(): Collection
    {
        return $this->commande_bl_liste;
    }

    public function addCommandeBlListe(Bl $commandeBlListe): self
    {
        if (!$this->commande_bl_liste->contains($commandeBlListe)) {
            $this->commande_bl_liste->add($commandeBlListe);
            $commandeBlListe->setBlCommandeId($this);
        }

        return $this;
    }

    public function removeCommandeBlListe(Bl $commandeBlListe): self
    {
        if ($this->commande_bl_liste->removeElement($commandeBlListe)) {
            // set the owning side to null (unless already changed)
            if ($commandeBlListe->getBlCommandeId() === $this) {
                $commandeBlListe->setBlCommandeId(null);
            }
        }

        return $this;
    }
}
