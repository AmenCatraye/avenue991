<?php

namespace App\Entity;

use App\Repository\ShoppingsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ShoppingsRepository::class)
 */
class Shoppings
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $commentaire;

    /**
     * @ORM\Column(type="text", length=255, nullable=true)
     */
    private $orders;

    /**
     * @ORM\Column(type="string", length=16, nullable=true)
     */
    private $NumService;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $IdClient;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(?string $commentaire): self
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    public function getOrders(): ?string
    {
        return $this->orders;
    }

    public function setOrders(?string $orders): self
    {
        $this->orders = $orders;

        return $this;
    }

    public function getNumService(): ?string
    {
        return $this->NumService;
    }

    public function setNumService(?string $NumService): self
    {
        $this->NumService = $NumService;

        return $this;
    }

    public function getIdClient(): ?string
    {
        return $this->IdClient;
    }

    public function setIdClient(string $IdClient): self
    {
        $this->IdClient = $IdClient;

        return $this;
    }
}
