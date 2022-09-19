<?php

namespace App\Entity;

use App\Repository\ClientRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ClientRepository::class)]
class Client
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $cli_societe = null;

    #[ORM\Column(length: 50)]
    private ?string $cli_nom = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $cli_prenom = null;

    #[ORM\Column(length: 20)]
    private ?string $cli_telephone = null;

    #[ORM\Column(length: 50)]
    #[Assert\Email(['message' => '"{{ value }}" : adresse email invalide.'])]
    private ?string $cli_mail = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $cli_siret = null;

    #[ORM\Column(length: 50)]
    private ?string $cli_reference = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 5, scale: 2)]
    private ?string $cli_coefficient = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 5, scale: 2)]
    private ?string $cli_reduction = null;

    #[ORM\OneToMany(mappedBy: 'adr_client_id', targetEntity: Adresse::class)]
    private Collection $cli_adresse;

    #[ORM\ManyToOne(inversedBy: 'com_clients')]
    private ?Commercial $cli_commercial = null;

    public function __construct()
    {
        $this->cli_adresse = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCliSociete(): ?string
    {
        return $this->cli_societe;
    }

    public function setCliSociete(?string $cli_societe): self
    {
        $this->cli_societe = $cli_societe;

        return $this;
    }

    public function getCliNom(): ?string
    {
        return $this->cli_nom;
    }

    public function setCliNom(string $cli_nom): self
    {
        $this->cli_nom = $cli_nom;

        return $this;
    }

    public function getCliPrenom(): ?string
    {
        return $this->cli_prenom;
    }

    public function setCliPrenom(?string $cli_prenom): self
    {
        $this->cli_prenom = $cli_prenom;

        return $this;
    }

    public function getCliTelephone(): ?string
    {
        return $this->cli_telephone;
    }

    public function setCliTelephone(string $cli_telephone): self
    {
        $this->cli_telephone = $cli_telephone;

        return $this;
    }

    public function getCliMail(): ?string
    {
        return $this->cli_mail;
    }

    public function setCliMail(string $cli_mail): self
    {
        $this->cli_mail = $cli_mail;

        return $this;
    }

    public function getCliSiret(): ?string
    {
        return $this->cli_siret;
    }

    public function setCliSiret(?string $cli_siret): self
    {
        $this->cli_siret = $cli_siret;

        return $this;
    }

    public function getCliReference(): ?string
    {
        return $this->cli_reference;
    }

    public function setCliReference(string $cli_reference): self
    {
        $this->cli_reference = $cli_reference;

        return $this;
    }

    public function getCliCoefficient(): ?string
    {
        return $this->cli_coefficient;
    }

    public function setCliCoefficient(string $cli_coefficient): self
    {
        $this->cli_coefficient = $cli_coefficient;

        return $this;
    }

    public function getCliReduction(): ?string
    {
        return $this->cli_reduction;
    }

    public function setCliReduction(string $cli_reduction): self
    {
        $this->cli_reduction = $cli_reduction;

        return $this;
    }

    /**
     * @return Collection<int, Adresse>
     */
    public function getCliAdresse(): Collection
    {
        return $this->cli_adresse;
    }

    public function addCliAdresse(Adresse $cliAdresse): self
    {
        if (!$this->cli_adresse->contains($cliAdresse)) {
            $this->cli_adresse->add($cliAdresse);
            $cliAdresse->setAdrClientId($this);
        }

        return $this;
    }

    public function removeCliAdresse(Adresse $cliAdresse): self
    {
        if ($this->cli_adresse->removeElement($cliAdresse)) {
            // set the owning side to null (unless already changed)
            if ($cliAdresse->getAdrClientId() === $this) {
                $cliAdresse->setAdrClientId(null);
            }
        }

        return $this;
    }

    public function getCliCommercial(): ?Commercial
    {
        return $this->cli_commercial;
    }

    public function setCliCommercial(?Commercial $cli_commercial): self
    {
        $this->cli_commercial = $cli_commercial;

        return $this;
    }
}
