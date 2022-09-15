<?php

namespace App\Entity;

use App\Repository\AdminRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AdminRepository::class)]
class Admin
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?bool $admin_droit = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function isAdminDroit(): ?bool
    {
        return $this->admin_droit;
    }

    public function setAdminDroit(bool $admin_droit): self
    {
        $this->admin_droit = $admin_droit;

        return $this;
    }
}
