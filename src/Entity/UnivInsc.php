<?php

namespace App\Entity;

use App\Repository\UnivInscRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UnivInscRepository::class)
 */
class UnivInsc
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=32)
     */
    private $idetudiant;

    /**
     * @ORM\Column(type="string", length=16)
     */
    private $pays;

    /**
     * @ORM\Column(type="string", length=32)
     */
    private $ville;

    /**
     * @ORM\Column(type="string", length=16)
     */
    private $annee;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $universite;

    /**
     * @ORM\Column(type="string", length=64, nullable=true)
     */
    private $siteweb;

    /**
     * @ORM\Column(type="string", length=16)
     */
    private $statut;

    /**
     * @ORM\Column(type="integer")
     */
    private $budget;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $infoSup;

    /**
     * @ORM\Column(type="string", length=16)
     */
    private $numservice;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $adresseuniversite;

    /**
     * @ORM\Column(type="string", length=128, nullable=true)
     */
    private $ServiceAvenir;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdetudiant(): ?string
    {
        return $this->idetudiant;
    }

    public function setIdetudiant(string $idetudiant): self
    {
        $this->idetudiant = $idetudiant;

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

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getAnnee(): ?string
    {
        return $this->annee;
    }

    public function setAnnee(string $annee): self
    {
        $this->annee = $annee;

        return $this;
    }

    public function getUniversite(): ?string
    {
        return $this->universite;
    }

    public function setUniversite(string $universite): self
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

    public function setStatut(string $statut): self
    {
        $this->statut = $statut;

        return $this;
    }

    public function getBudget(): ?int
    {
        return $this->budget;
    }

    public function setBudget(int $budget): self
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

    public function setNumservice(string $numservice): self
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

    public function getServiceAvenir(): ?string
    {
        return $this->ServiceAvenir;
    }

    public function setServiceAvenir(?string $ServiceAvenir): self
    {
        $this->ServiceAvenir = $ServiceAvenir;

        return $this;
    }
}
