<?php

namespace App\Entity;

use App\Repository\CommandeOcazRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommandeOcazRepository::class)
 */
class CommandeOcaz
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
    private $type_client;

    /**
     * @ORM\Column(type="string", length=8, nullable=true)
     */
    private $numCommande;

    /**
     * @ORM\Column(type="string", length=32, nullable=true)
     */
    private $typ_elem;

    /**
     * @ORM\Column(type="string", length=16, nullable=true)
     */
    private $chassis;

    /**
     * @ORM\Column(type="string", length=32, nullable=true)
     */
    private $marque;

    /**
     * @ORM\Column(type="string", length=32, nullable=true)
     */
    private $modele;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $annee;

    /**
     * @ORM\Column(type="string", length=8, nullable=true)
     */
    private $prixmax;

    /**
     * @ORM\Column(type="string", length=8, nullable=true)
     */
    private $kilometrage;

    /**
     * @ORM\Column(type="string", length=16, nullable=true)
     */
    private $boitevitesse;

    /**
     * @ORM\Column(type="string", length=16, nullable=true)
     */
    private $carburant;

    /**
     * @ORM\Column(type="string", length=2, nullable=true)
     */
    private $portes;

    /**
     * @ORM\Column(type="string", length=32, nullable=true)
     */
    private $etat;

    /**
     * @ORM\Column(type="string", length=32, nullable=true)
     */
    private $piecepour;

    /**
     * @ORM\Column(type="string", length=200, nullable=true)
     */
    private $InfoComp;

    /**
     * @ORM\Column(type="string", length=16, nullable=true)
     */
    private $ladate;

    /**
     * @ORM\Column(type="string", length=128, nullable=true)
     */
    private $nompiece;

    /**
     * @ORM\Column(type="string", length=32, nullable=true)
     */
    private $nonprenom;

    /**
     * @ORM\Column(type="string", length=64, nullable=true)
     */
    private $adressemail;

    /**
     * @ORM\Column(type="string", length=200, nullable=true)
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=16, nullable=true)
     */
    private $telephone;

    /**
     * @ORM\Column(type="string", length=32, nullable=true)
     */
    private $raisonsociale;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeClient(): ?string
    {
        return $this->type_client;
    }

    public function setTypeClient(?string $type_client): self
    {
        $this->type_client = $type_client;

        return $this;
    }

    public function getNumCommande(): ?string
    {
        return $this->numCommande;
    }

    public function setNumCommande(?string $numCommande): self
    {
        $this->numCommande = $numCommande;

        return $this;
    }

    public function getTypElem(): ?string
    {
        return $this->typ_elem;
    }

    public function setTypElem(?string $typ_elem): self
    {
        $this->typ_elem = $typ_elem;

        return $this;
    }

    public function getChassis(): ?string
    {
        return $this->chassis;
    }

    public function setChassis(?string $chassis): self
    {
        $this->chassis = $chassis;

        return $this;
    }

    public function getMarque(): ?string
    {
        return $this->marque;
    }

    public function setMarque(?string $marque): self
    {
        $this->marque = $marque;

        return $this;
    }

    public function getModele(): ?string
    {
        return $this->modele;
    }

    public function setModele(?string $modele): self
    {
        $this->modele = $modele;

        return $this;
    }

    public function getAnnee(): ?string
    {
        return $this->annee;
    }

    public function setAnnee(?string $annee): self
    {
        $this->annee = $annee;

        return $this;
    }

    public function getPrixmax(): ?string
    {
        return $this->prixmax;
    }

    public function setPrixmax(?string $prixmax): self
    {
        $this->prixmax = $prixmax;

        return $this;
    }

    public function getKilometrage(): ?string
    {
        return $this->kilometrage;
    }

    public function setKilometrage(?string $kilometrage): self
    {
        $this->kilometrage = $kilometrage;

        return $this;
    }

    public function getBoitevitesse(): ?string
    {
        return $this->boitevitesse;
    }

    public function setBoitevitesse(?string $boitevitesse): self
    {
        $this->boitevitesse = $boitevitesse;

        return $this;
    }

    public function getCarburant(): ?string
    {
        return $this->carburant;
    }

    public function setCarburant(?string $carburant): self
    {
        $this->carburant = $carburant;

        return $this;
    }

    public function getPortes(): ?string
    {
        return $this->portes;
    }

    public function setPortes(?string $portes): self
    {
        $this->portes = $portes;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(?string $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    public function getPiecepour(): ?string
    {
        return $this->piecepour;
    }

    public function setPiecepour(?string $piecepour): self
    {
        $this->piecepour = $piecepour;

        return $this;
    }

    public function getInfoComp(): ?string
    {
        return $this->InfoComp;
    }

    public function setInfoComp(?string $InfoComp): self
    {
        $this->InfoComp = $InfoComp;

        return $this;
    }

    public function getLadate(): ?string
    {
        return $this->ladate;
    }

    public function setLadate(?string $ladate): self
    {
        $this->ladate = $ladate;

        return $this;
    }

    public function getNompiece(): ?string
    {
        return $this->nompiece;
    }

    public function setNompiece(?string $nompiece): self
    {
        $this->nompiece = $nompiece;

        return $this;
    }

    public function getNonprenom(): ?string
    {
        return $this->nonprenom;
    }

    public function setNonprenom(?string $nonprenom): self
    {
        $this->nonprenom = $nonprenom;

        return $this;
    }

    public function getAdressemail(): ?string
    {
        return $this->adressemail;
    }

    public function setAdressemail(?string $adressemail): self
    {
        $this->adressemail = $adressemail;

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

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(?string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getRaisonsociale(): ?string
    {
        return $this->raisonsociale;
    }

    public function setRaisonsociale(?string $raisonsociale): self
    {
        $this->raisonsociale = $raisonsociale;

        return $this;
    }
}
