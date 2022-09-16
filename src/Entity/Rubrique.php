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

    #[ORM\ManyToOne(targetEntity: self::class, inversedBy: 'parent')]
    private ?self $rubriq_parente = null;

    #[ORM\OneToMany(mappedBy: 'rubriq_parente', targetEntity: self::class)]
    private Collection $parent;

    public function __construct()
    {
        $this->parent = new ArrayCollection();
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
    public function getParent(): Collection
    {
        return $this->parent;
    }

    public function addParent(self $parent): self
    {
        if (!$this->parent->contains($parent)) {
            $this->parent->add($parent);
            $parent->setRubriqParente($this);
        }

        return $this;
    }

    public function removeParent(self $parent): self
    {
        if ($this->parent->removeElement($parent)) {
            // set the owning side to null (unless already changed)
            if ($parent->getRubriqParente() === $this) {
                $parent->setRubriqParente(null);
            }
        }

        return $this;
    }
}
