<?php

namespace App\Entity;

use App\Repository\AdresseRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: AdresseRepository::class)]
class Adresse
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $adr_adresse = null;

    #[ORM\Column(length: 16)]
    private ?string $adr_cp = null;

    #[ORM\Column(length: 50)]
    private ?string $adr_ville = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $adr_region = null;

    #[ORM\Column(length: 50)]
    private ?string $adr_pays = null;

    #[ORM\Column]
    private ?bool $adr_facturation = null;

    #[ORM\Column]
    private ?bool $adr_livraison = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAdrAdresse(): ?string
    {
        return $this->adr_adresse;
    }

    public function setAdrAdresse(string $adr_adresse): self
    {
        $this->adr_adresse = $adr_adresse;

        return $this;
    }

    public function getAdrCp(): ?string
    {
        return $this->adr_cp;
    }

    public function setAdrCp(string $adr_cp): self
    {
        $this->adr_cp = $adr_cp;

        return $this;
    }

    public function getAdrVille(): ?string
    {
        return $this->adr_ville;
    }

    public function setAdrVille(string $adr_ville): self
    {
        $this->adr_ville = $adr_ville;

        return $this;
    }

    public function getAdrRegion(): ?string
    {
        return $this->adr_region;
    }

    public function setAdrRegion(?string $adr_region): self
    {
        $this->adr_region = $adr_region;

        return $this;
    }

    public function getAdrPays(): ?string
    {
        return $this->adr_pays;
    }

    public function setAdrPays(string $adr_pays): self
    {
        $this->adr_pays = $adr_pays;

        return $this;
    }

    public function isAdrFacturation(): ?bool
    {
        return $this->adr_facturation;
    }

    public function setAdrFacturation(bool $adr_facturation): self
    {
        $this->adr_facturation = $adr_facturation;

        return $this;
    }

    public function isAdrLivraison(): ?bool
    {
        return $this->adr_livraison;
    }

    public function setAdrLivraison(bool $adr_livraison): self
    {
        $this->adr_livraison = $adr_livraison;

        return $this;
    }
}
