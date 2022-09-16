<?php

namespace App\Entity;

use App\Repository\FournisseurRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: FournisseurRepository::class)]
class Fournisseur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $fourni_societe = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $fourni_nom = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $fourni_prenom = null;

    #[ORM\Column(length: 20)]
    private ?string $fourni_telephone = null;

    #[ORM\Column(length: 50)]
    #[Assert\Email(['message' => '"{{ value }}" : adresse email invalide.'])]
    private ?string $fourni_mail = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $fourni_adresse = null;

    #[ORM\Column(length: 16, nullable: true)]
    private ?string $fourni_cp = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $fourni_ville = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $fourni_region = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $fourni_pays = null;

    #[ORM\Column]
    private ?bool $fourni_constructeur = null;

    #[ORM\Column]
    private ?bool $fourni_importateur = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFourniSociete(): ?string
    {
        return $this->fourni_societe;
    }

    public function setFourniSociete(string $fourni_societe): self
    {
        $this->fourni_societe = $fourni_societe;

        return $this;
    }

    public function getFourniNom(): ?string
    {
        return $this->fourni_nom;
    }

    public function setFourniNom(?string $fourni_nom): self
    {
        $this->fourni_nom = $fourni_nom;

        return $this;
    }

    public function getFourniPrenom(): ?string
    {
        return $this->fourni_prenom;
    }

    public function setFourniPrenom(?string $fourni_prenom): self
    {
        $this->fourni_prenom = $fourni_prenom;

        return $this;
    }

    public function getFourniTelephone(): ?string
    {
        return $this->fourni_telephone;
    }

    public function setFourniTelephone(string $fourni_telephone): self
    {
        $this->fourni_telephone = $fourni_telephone;

        return $this;
    }

    public function getFourniMail(): ?string
    {
        return $this->fourni_mail;
    }

    public function setFourniMail(string $fourni_mail): self
    {
        $this->fourni_mail = $fourni_mail;

        return $this;
    }

    public function getFourniAdresse(): ?string
    {
        return $this->fourni_adresse;
    }

    public function setFourniAdresse(?string $fourni_adresse): self
    {
        $this->fourni_adresse = $fourni_adresse;

        return $this;
    }

    public function getFourniCp(): ?string
    {
        return $this->fourni_cp;
    }

    public function setFourniCp(?string $fourni_cp): self
    {
        $this->fourni_cp = $fourni_cp;

        return $this;
    }

    public function getFourniVille(): ?string
    {
        return $this->fourni_ville;
    }

    public function setFourniVille(?string $fourni_ville): self
    {
        $this->fourni_ville = $fourni_ville;

        return $this;
    }

    public function getFourniRegion(): ?string
    {
        return $this->fourni_region;
    }

    public function setFourniRegion(?string $fourni_region): self
    {
        $this->fourni_region = $fourni_region;

        return $this;
    }

    public function getFourniPays(): ?string
    {
        return $this->fourni_pays;
    }

    public function setFourniPays(?string $fourni_pays): self
    {
        $this->fourni_pays = $fourni_pays;

        return $this;
    }

    public function isFourniConstructeur(): ?bool
    {
        return $this->fourni_constructeur;
    }

    public function setFourniConstructeur(bool $fourni_constructeur): self
    {
        $this->fourni_constructeur = $fourni_constructeur;

        return $this;
    }

    public function isFourniImportateur(): ?bool
    {
        return $this->fourni_importateur;
    }

    public function setFourniImportateur(bool $fourni_importateur): self
    {
        $this->fourni_importateur = $fourni_importateur;

        return $this;
    }
}
