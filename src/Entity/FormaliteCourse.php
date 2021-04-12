<?php

namespace App\Entity;

use App\Repository\FormaliteCourseRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FormaliteCourseRepository::class)
 */
class FormaliteCourse
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $idClient;

    /**
     * @ORM\Column(type="text")
     */
    private $detailsCourse;

    /**
     * @ORM\Column(type="string", length=16)
     */
    private $numService;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getDetailsCourse(): ?string
    {
        return $this->detailsCourse;
    }

    public function setDetailsCourse(string $detailsCourse): self
    {
        $this->detailsCourse = $detailsCourse;

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
}
