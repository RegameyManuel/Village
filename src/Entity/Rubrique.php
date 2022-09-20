<?php

namespace App\Entity;

use App\Repository\RubriqueRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: RubriqueRepository::class)]
class Rubrique
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $rubriq_nom = null;



    #[ORM\OneToMany(mappedBy: 'prod_rubrique', targetEntity: Produit::class)]
    private Collection $produits;

    #[ORM\ManyToOne(targetEntity: self::class, inversedBy: 'rubriq_enfants')]
    private ?self $rubriq_parente = null;

    #[ORM\OneToMany(mappedBy: 'rubriq_parente', targetEntity: self::class)]
    private Collection $rubriq_enfants;





    public function __construct()
    {
        $this->produits = new ArrayCollection();
        $this->rubriq_enfants = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRubriqNom(): ?string
    {
        return $this->rubriq_nom;
    }

    public function setRubriqNom(string $rubriq_nom): self
    {
        $this->rubriq_nom = $rubriq_nom;

        return $this;
    }





    /**
     * @return Collection<int, Produit>
     */
    public function getProduits(): Collection
    {
        return $this->produits;
    }

    public function addProduit(Produit $produit): self
    {
        if (!$this->produits->contains($produit)) {
            $this->produits->add($produit);
            $produit->setProdRubrique($this);
        }

        return $this;
    }

    public function removeProduit(Produit $produit): self
    {
        if ($this->produits->removeElement($produit)) {
            // set the owning side to null (unless already changed)
            if ($produit->getProdRubrique() === $this) {
                $produit->setProdRubrique(null);
            }
        }

        return $this;
    }

    public function getRubriqParente(): ?self
    {
        return $this->rubriq_parente;
    }

    public function setRubriqParente(?self $rubriq_parente): self
    {
        $this->rubriq_parente = $rubriq_parente;

        return $this;
    }

    /**
     * @return Collection<int, self>
     */
    public function getRubriqEnfants(): Collection
    {
        return $this->rubriq_enfants;
    }

    public function addRubriqEnfant(self $rubriqEnfant): self
    {
        if (!$this->rubriq_enfants->contains($rubriqEnfant)) {
            $this->rubriq_enfants->add($rubriqEnfant);
            $rubriqEnfant->setRubriqParente($this);
        }

        return $this;
    }

    public function removeRubriqEnfant(self $rubriqEnfant): self
    {
        if ($this->rubriq_enfants->removeElement($rubriqEnfant)) {
            // set the owning side to null (unless already changed)
            if ($rubriqEnfant->getRubriqParente() === $this) {
                $rubriqEnfant->setRubriqParente(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return $this->rubriq_nom;
    }

}
