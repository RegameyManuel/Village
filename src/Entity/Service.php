<?php

namespace App\Entity;

use App\Repository\ServiceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ServiceRepository::class)]
class Service
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $serv_nom = null;

    #[ORM\Column(length: 20)]
    private ?string $serv_telephone = null;

    #[ORM\Column(length: 50)]
    #[Assert\Email(['message' => '"{{ value }}" : adresse email invalide.'])]
    private ?string $serv_mail = null;

    #[ORM\OneToMany(mappedBy: 'fourni_service', targetEntity: Fournisseur::class)]
    private Collection $fournisseurs;

    #[ORM\OneToMany(mappedBy: 'com_service', targetEntity: Commercial::class)]
    private Collection $serv_commercials;

    public function __construct()
    {
        $this->fournisseurs = new ArrayCollection();
        $this->serv_commercials = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getServNom(): ?string
    {
        return $this->serv_nom;
    }

    public function setServNom(string $serv_nom): self
    {
        $this->serv_nom = $serv_nom;

        return $this;
    }

    public function getServTelephone(): ?string
    {
        return $this->serv_telephone;
    }

    public function setServTelephone(string $serv_telephone): self
    {
        $this->serv_telephone = $serv_telephone;

        return $this;
    }

    public function getServMail(): ?string
    {
        return $this->serv_mail;
    }

    public function setServMail(string $serv_mail): self
    {
        $this->serv_mail = $serv_mail;

        return $this;
    }

    /**
     * @return Collection<int, Fournisseur>
     */
    public function getFournisseurs(): Collection
    {
        return $this->fournisseurs;
    }

    public function addFournisseur(Fournisseur $fournisseur): self
    {
        if (!$this->fournisseurs->contains($fournisseur)) {
            $this->fournisseurs->add($fournisseur);
            $fournisseur->setFourniService($this);
        }

        return $this;
    }

    public function removeFournisseur(Fournisseur $fournisseur): self
    {
        if ($this->fournisseurs->removeElement($fournisseur)) {
            // set the owning side to null (unless already changed)
            if ($fournisseur->getFourniService() === $this) {
                $fournisseur->setFourniService(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Commercial>
     */
    public function getServCommercials(): Collection
    {
        return $this->serv_commercials;
    }

    public function addServCommercial(Commercial $servCommercial): self
    {
        if (!$this->serv_commercials->contains($servCommercial)) {
            $this->serv_commercials->add($servCommercial);
            $servCommercial->setComService($this);
        }

        return $this;
    }

    public function removeServCommercial(Commercial $servCommercial): self
    {
        if ($this->serv_commercials->removeElement($servCommercial)) {
            // set the owning side to null (unless already changed)
            if ($servCommercial->getComService() === $this) {
                $servCommercial->setComService(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return $this->serv_nom;
    }

}
