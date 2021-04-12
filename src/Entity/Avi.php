<?php

namespace App\Entity;

use App\Repository\AviRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AviRepository::class)
 */
class Avi
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=16)
     */
    private $pays;

    /**
     * @ORM\Column(type="string", length=128, nullable=true)
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=32)
     */
    private $frequence;

    /**
     * @ORM\Column(type="integer")
     */
    private $montant;

    /**
     * @ORM\Column(type="string", length=32)
     */
    private $motif;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $idClient;

    /**
     * @ORM\Column(type="string", length=16)
     */
    private $numService;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $commentaires;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPays(): ?string
    {
        return $this->pays;
    }

    public function setPays(string $pays): self
    {
        $this->pays = $pays;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getFrequence(): ?string
    {
        return $this->frequence;
    }

    public function setFrequence(string $frequence): self
    {
        $this->frequence = $frequence;

        return $this;
    }

    public function getMontant(): ?int
    {
        return $this->montant;
    }

    public function setMontant(int $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    public function getMotif(): ?string
    {
        return $this->motif;
    }

    public function setMotif(string $motif): self
    {
        $this->motif = $motif;

        return $this;
    }

    public function getIdClient(): ?string
    {
        return $this->idClient;
    }

    public function setIdClient(string $idClient): self
    {
        $this->idClient = $idClient;

        return $this;
    }

    public function getNumService(): ?string
    {
        return $this->numService;
    }

    public function setNumService(string $numService): self
    {
        $this->numService = $numService;

        return $this;
    }

    public function getCommentaires(): ?string
    {
        return $this->commentaires;
    }

    public function setCommentaires(?string $commentaires): self
    {
        $this->commentaires = $commentaires;

        return $this;
    }
}
