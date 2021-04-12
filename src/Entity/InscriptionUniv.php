<?php

namespace App\Entity;

use App\Repository\InscriptionUnivRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=InscriptionUnivRepository::class)
 */
class InscriptionUniv
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=16, nullable=true)
     */
    private $idEtudiant;

    /**
     * @ORM\Column(type="string", length=16, nullable=true)
     */
    private $pays;

    /**
     * @ORM\Column(type="string", length=32, nullable=true)
     */
    private $ville;

    /**
     * @ORM\Column(type="string", length=16, nullable=true)
     */
    private $niveau;

    /**
     * @ORM\Column(type="string", length=32, nullable=true)
     */
    private $universite;

    /**
     * @ORM\Column(type="string", length=128, nullable=true)
     */
    private $siteweb;

    /**
     * @ORM\Column(type="string", length=16, nullable=true)
     */
    private $statut;

    /**
     * @ORM\Column(type="string", length=11, nullable=true)
     */
    private $budget;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $infoSup;

    /**
     * @ORM\Column(type="string", length=16, nullable=true)
     */
    private $numservice;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $adresseuniversite;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdEtudiant(): ?string
    {
        return $this->idEtudiant;
    }

    public function setIdEtudiant(?string $idEtudiant): self
    {
        $this->idEtudiant = $idEtudiant;

        return $this;
    }

    public function getPays(): ?string
    {
        return $this->pays;
    }

    public function setPays(?string $pays): self
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

    public function getNiveau(): ?string
    {
        return $this->niveau;
    }

    public function setNiveau(?string $niveau): self
    {
        $this->niveau = $niveau;

        return $this;
    }

    public function getUniversite(): ?string
    {
        return $this->universite;
    }

    public function setUniversite(?string $universite): self
    {
        $this->universite = $universite;

        return $this;
    }

    public function getSiteweb(): ?string
    {
        return $this->siteweb;
    }

    public function setSiteweb(?string $siteweb): self
    {
        $this->siteweb = $siteweb;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(?string $statut): self
    {
        $this->statut = $statut;

        return $this;
    }

    public function getBudget(): ?string
    {
        return $this->budget;
    }

    public function setBudget(?string $budget): self
    {
        $this->budget = $budget;

        return $this;
    }

    public function getInfoSup(): ?string
    {
        return $this->infoSup;
    }

    public function setInfoSup(?string $infoSup): self
    {
        $this->infoSup = $infoSup;

        return $this;
    }

    public function getNumservice(): ?string
    {
        return $this->numservice;
    }

    public function setNumservice(?string $numservice): self
    {
        $this->numservice = $numservice;

        return $this;
    }

    public function getAdresseuniversite(): ?string
    {
        return $this->adresseuniversite;
    }

    public function setAdresseuniversite(?string $adresseuniversite): self
    {
        $this->adresseuniversite = $adresseuniversite;

        return $this;
    }
}
