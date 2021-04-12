<?php

namespace App\Entity;

use App\Repository\TransportRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TransportRepository::class)
 */
class Transport
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
    private $numService;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $idClient;

    /**
     * @ORM\Column(type="string", length=16)
     */
    private $pays;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $aeroport;

    /**
     * @ORM\Column(type="string", length=16)
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=16)
     */
    private $heureArrivee;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbrPassager;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $commentaires;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getIdClient(): ?string
    {
        return $this->idClient;
    }

    public function setIdClient(string $idClient): self
    {
        $this->idClient = $idClient;

        return $this;
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

    public function getAeroport(): ?string
    {
        return $this->aeroport;
    }

    public function setAeroport(string $aeroport): self
    {
        $this->aeroport = $aeroport;

        return $this;
    }

    public function getDate(): ?string
    {
        return $this->date;
    }

    public function setDate(string $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getHeureArrivee(): ?string
    {
        return $this->heureArrivee;
    }

    public function setHeureArrivee(string $heureArrivee): self
    {
        $this->heureArrivee = $heureArrivee;

        return $this;
    }

    public function getNbrPassager(): ?int
    {
        return $this->nbrPassager;
    }

    public function setNbrPassager(int $nbrPassager): self
    {
        $this->nbrPassager = $nbrPassager;

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
