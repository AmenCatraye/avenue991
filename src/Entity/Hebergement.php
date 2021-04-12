<?php

namespace App\Entity;

use App\Repository\HebergementRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=HebergementRepository::class)
 */
class Hebergement
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
     * @ORM\Column(type="string", length=32, nullable=true)
     */
    private $ville;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $idClient;

    /**
     * @ORM\Column(type="string", length=16)
     */
    private $numService;

    /**
     * @ORM\Column(type="string", length=32)
     */
    private $typeHebergement;

    /**
     * @ORM\Column(type="string", length=16)
     */
    private $duree;

    /**
     * @ORM\Column(type="integer")
     */
    private $loyerMax;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $commentaire;

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

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(?string $ville): self
    {
        $this->ville = $ville;

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

    public function getTypeHebergement(): ?string
    {
        return $this->typeHebergement;
    }

    public function setTypeHebergement(string $typeHebergement): self
    {
        $this->typeHebergement = $typeHebergement;

        return $this;
    }

    public function getDuree(): ?string
    {
        return $this->duree;
    }

    public function setDuree(string $duree): self
    {
        $this->duree = $duree;

        return $this;
    }

    public function getLoyerMax(): ?int
    {
        return $this->loyerMax;
    }

    public function setLoyerMax(int $loyerMax): self
    {
        $this->loyerMax = $loyerMax;

        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(string $commentaire): self
    {
        $this->commentaire = $commentaire;

        return $this;
    }
}
