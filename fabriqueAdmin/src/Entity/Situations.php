<?php

namespace App\Entity;

use App\Repository\SituationsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SituationsRepository::class)
 */
class Situations
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
    private $situation;

    /**
     * @ORM\OneToMany(targetEntity=SituationApprenantPeriode::class, mappedBy="situation")
     */
    private $situationApprenantPeriodes;

    public function __construct()
    {
        $this->situationApprenantPeriodes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSituation(): ?string
    {
        return $this->situation;
    }

    public function setSituation(string $situation): self
    {
        $this->situation = $situation;

        return $this;
    }

    /**
     * @return Collection|SituationApprenantPeriode[]
     */
    public function getSituationApprenantPeriodes(): Collection
    {
        return $this->situationApprenantPeriodes;
    }

    public function addSituationApprenantPeriode(SituationApprenantPeriode $situationApprenantPeriode): self
    {
        if (!$this->situationApprenantPeriodes->contains($situationApprenantPeriode)) {
            $this->situationApprenantPeriodes[] = $situationApprenantPeriode;
            $situationApprenantPeriode->setSituation($this);
        }

        return $this;
    }

    public function removeSituationApprenantPeriode(SituationApprenantPeriode $situationApprenantPeriode): self
    {
        if ($this->situationApprenantPeriodes->contains($situationApprenantPeriode)) {
            $this->situationApprenantPeriodes->removeElement($situationApprenantPeriode);
            // set the owning side to null (unless already changed)
            if ($situationApprenantPeriode->getSituation() === $this) {
                $situationApprenantPeriode->setSituation(null);
            }
        }

        return $this;
    }
}
