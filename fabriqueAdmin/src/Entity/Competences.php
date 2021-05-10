<?php

namespace App\Entity;

use App\Repository\CompetencesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CompetencesRepository::class)
 */
class Competences
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $competence;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $TypeCompetence;

    /**
     * @ORM\OneToOne(targetEntity=Evaluation::class, cascade={"persist", "remove"})
     */
    private $Evaluation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCompetence(): ?string
    {
        return $this->competence;
    }

    public function setCompetence(string $competence): self
    {
        $this->competence = $competence;

        return $this;
    }

    public function getTypeCompetence(): ?string
    {
        return $this->TypeCompetence;
    }

    public function setTypeCompetence(string $TypeCompetence): self
    {
        $this->TypeCompetence = $TypeCompetence;

        return $this;
    }

    public function getEvaluation(): ?Evaluation
    {
        return $this->Evaluation;
    }

    public function setEvaluation(?Evaluation $Evaluation): self
    {
        $this->Evaluation = $Evaluation;

        return $this;
    }
}
