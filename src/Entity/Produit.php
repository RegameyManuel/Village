<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ProduitRepository::class)]
class Produit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50, nullable: true)]
    #[Assert\Length(max:50)]
    private ?string $prod_marque = null;

    #[ORM\Column(length: 50)]
    #[Assert\Length(min:1, max:50)]
    private ?string $prod_modele = null;

    #[ORM\Column(length: 50)]
    #[Assert\Length(min:1, max:50)]
    private ?string $prod_finition = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\Length(max:255)]
    private ?string $prod_lib_court = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $prod_lib_long = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    #[Assert\NotNull()]
    #[Assert\PositiveOrZero()]
    private ?string $prod_prix = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\Length(max:255)]
    private ?string $prod_photo = null;

    #[ORM\Column]
    private ?bool $prod_actif = null;

    #[ORM\Column(length: 50)]
    #[Assert\Length(min:1, max:50)]
    private ?string $prod_reference = null;

    #[ORM\ManyToOne(inversedBy: 'produits')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Rubrique $prod_rubrique = null;

    #[ORM\ManyToOne(inversedBy: 'produits')]
    private ?Fournisseur $prod_fournisseur = null;

    #[ORM\Column]
    private ?int $prod_stock = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProdMarque(): ?string
    {
        return $this->prod_marque;
    }

    public function setProdMarque(?string $prod_marque): self
    {
        $this->prod_marque = $prod_marque;

        return $this;
    }

    public function getProdModele(): ?string
    {
        return $this->prod_modele;
    }

    public function setProdModele(string $prod_modele): self
    {
        $this->prod_modele = $prod_modele;

        return $this;
    }

    public function getProdFinition(): ?string
    {
        return $this->prod_finition;
    }

    public function setProdFinition(string $prod_finition): self
    {
        $this->prod_finition = $prod_finition;

        return $this;
    }

    public function getProdLibCourt(): ?string
    {
        return $this->prod_lib_court;
    }

    public function setProdLibCourt(?string $prod_lib_court): self
    {
        $this->prod_lib_court = $prod_lib_court;

        return $this;
    }

    public function getProdLibLong(): ?string
    {
        return $this->prod_lib_long;
    }

    public function setProdLibLong(?string $prod_lib_long): self
    {
        $this->prod_lib_long = $prod_lib_long;

        return $this;
    }

    public function getProdPrix(): ?string
    {
        return $this->prod_prix;
    }

    public function setProdPrix(string $prod_prix): self
    {
        $this->prod_prix = $prod_prix;

        return $this;
    }

    public function getProdPhoto(): ?string
    {
        return $this->prod_photo;
    }

    public function setProdPhoto(?string $prod_photo): self
    {
        $this->prod_photo = $prod_photo;

        return $this;
    }

    public function isProdActif(): ?bool
    {
        return $this->prod_actif;
    }

    public function setProdActif(bool $prod_actif): self
    {
        $this->prod_actif = $prod_actif;

        return $this;
    }

    public function getProdReference(): ?string
    {
        return $this->prod_reference;
    }

    public function setProdReference(string $prod_reference): self
    {
        $this->prod_reference = $prod_reference;

        return $this;
    }

    public function getProdRubrique(): ?Rubrique
    {
        return $this->prod_rubrique;
    }

    public function setProdRubrique(?Rubrique $prod_rubrique): self
    {
        $this->prod_rubrique = $prod_rubrique;

        return $this;
    }

    public function getProdFournisseur(): ?Fournisseur
    {
        return $this->prod_fournisseur;
    }

    public function setProdFournisseur(?Fournisseur $prod_fournisseur): self
    {
        $this->prod_fournisseur = $prod_fournisseur;

        return $this;
    }

    public function getProdStock(): ?int
    {
        return $this->prod_stock;
    }

    public function setProdStock(int $prod_stock): self
    {
        $this->prod_stock = $prod_stock;

        return $this;
    }
}
