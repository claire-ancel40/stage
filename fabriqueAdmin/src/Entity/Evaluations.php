<?php

namespace App\Entity;

use App\Repository\EvaluationsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EvaluationsRepository::class)
 */
class Evaluations
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
    private $evaluation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $TypeEvaluation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Phase;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Trace;

    /**
     * @ORM\OneToOne(targetEntity=Apprenant::class, cascade={"persist", "remove"})
     */
    private $Apprenant;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEvaluation(): ?string
    {
        return $this->evaluation;
    }

    public function setEvaluation(string $evaluation): self
    {
        $this->evaluation = $evaluation;

        return $this;
    }

    public function getTypeEvaluation(): ?string
    {
        return $this->TypeEvaluation;
    }

    public function setTypeEvaluation(string $TypeEvaluation): self
    {
        $this->TypeEvaluation = $TypeEvaluation;

        return $this;
    }

    public function getPhase(): ?string
    {
        return $this->Phase;
    }

    public function setPhase(string $Phase): self
    {
        $this->Phase = $Phase;

        return $this;
    }

    public function getTrace(): ?string
    {
        return $this->Trace;
    }

    public function setTrace(string $Trace): self
    {
        $this->Trace = $Trace;

        return $this;
    }

    public function getApprenant(): ?Apprenant
    {
        return $this->Apprenant;
    }

    public function setApprenant(?Apprenant $Apprenant): self
    {
        $this->Apprenant = $Apprenant;

        return $this;
    }
}
