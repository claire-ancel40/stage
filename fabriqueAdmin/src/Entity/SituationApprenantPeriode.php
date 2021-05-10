<?php

namespace App\Entity;

use App\Repository\SituationApprenantPeriodeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SituationApprenantPeriodeRepository::class)
 */
class SituationApprenantPeriode
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Apprenant::class, inversedBy="situationApprenantPeriodes")
     */
    private $apprenant;

    /**
     * @ORM\ManyToOne(targetEntity=Situations::class, inversedBy="situationApprenantPeriodes")
     */
    private $situation;

    /**
     * @ORM\ManyToOne(targetEntity=PostFormation::class, inversedBy="situationApprenantPeriodes")
     */
    private $periode;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getApprenant(): ?Apprenant
    {
        return $this->apprenant;
    }

    public function setApprenant(?Apprenant $apprenant): self
    {
        $this->apprenant = $apprenant;

        return $this;
    }

    public function getSituation(): ?Situations
    {
        return $this->situation;
    }

    public function setSituation(?Situations $situation): self
    {
        $this->situation = $situation;

        return $this;
    }

    public function getPeriode(): ?PostFormation
    {
        return $this->periode;
    }

    public function setPeriode(?PostFormation $periode): self
    {
        $this->periode = $periode;

        return $this;
    }
}
