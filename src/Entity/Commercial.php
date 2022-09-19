<?php

namespace App\Entity;

use App\Repository\CommercialRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: CommercialRepository::class)]
class Commercial
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $com_nom = null;

    #[ORM\Column(length: 50)]
    private ?string $com_prenom = null;

    #[ORM\Column(length: 20)]
    private ?string $com_telephone = null;

    #[ORM\Column(length: 50)]
    #[Assert\Email(['message' => '"{{ value }}" : adresse email invalide.'])]
    private ?string $com_mail = null;

    #[ORM\Column]
    private ?bool $com_particulier = null;

    #[ORM\OneToMany(mappedBy: 'cli_commercial', targetEntity: Client::class)]
    private Collection $com_clients;

    #[ORM\ManyToOne(inversedBy: 'serv_commercials')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Service $com_service = null;

    public function __construct()
    {
        $this->com_clients = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getComNom(): ?string
    {
        return $this->com_nom;
    }

    public function setComNom(string $com_nom): self
    {
        $this->com_nom = $com_nom;

        return $this;
    }

    public function getComPrenom(): ?string
    {
        return $this->com_prenom;
    }

    public function setComPrenom(string $com_prenom): self
    {
        $this->com_prenom = $com_prenom;

        return $this;
    }

    public function getComTelephone(): ?string
    {
        return $this->com_telephone;
    }

    public function setComTelephone(string $com_telephone): self
    {
        $this->com_telephone = $com_telephone;

        return $this;
    }

    public function getComMail(): ?string
    {
        return $this->com_mail;
    }

    public function setComMail(string $com_mail): self
    {
        $this->com_mail = $com_mail;

        return $this;
    }

    public function isComParticulier(): ?bool
    {
        return $this->com_particulier;
    }

    public function setComParticulier(bool $com_particulier): self
    {
        $this->com_particulier = $com_particulier;

        return $this;
    }

    /**
     * @return Collection<int, Client>
     */
    public function getComClients(): Collection
    {
        return $this->com_clients;
    }

    public function addComClient(Client $comClient): self
    {
        if (!$this->com_clients->contains($comClient)) {
            $this->com_clients->add($comClient);
            $comClient->setCliCommercial($this);
        }

        return $this;
    }

    public function removeComClient(Client $comClient): self
    {
        if ($this->com_clients->removeElement($comClient)) {
            // set the owning side to null (unless already changed)
            if ($comClient->getCliCommercial() === $this) {
                $comClient->setCliCommercial(null);
            }
        }

        return $this;
    }

    public function getComService(): ?Service
    {
        return $this->com_service;
    }

    public function setComService(?Service $com_service): self
    {
        $this->com_service = $com_service;

        return $this;
    }
}
