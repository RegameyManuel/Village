<?php

namespace App\Entity;

use App\Repository\ServiceRepository;
use Doctrine\ORM\Mapping as ORM;

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
    private ?string $serv_mail = null;

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
}
