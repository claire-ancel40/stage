<?php

namespace App\Entity;

use App\Repository\PostFormationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PostFormationRepository::class)
 */
class PostFormation
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
    private $periode;

    /**
     * @ORM\OneToMany(targetEntity=SituationApprenantPeriode::class, mappedBy="periode")
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

    public function getPeriode(): ?string
    {
        return $this->periode;
    }

    public function setPeriode(string $periode): self
    {
        $this->periode = $periode;

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
            $situationApprenantPeriode->setPeriode($this);
        }

        return $this;
    }

    public function removeSituationApprenantPeriode(SituationApprenantPeriode $situationApprenantPeriode): self
    {
        if ($this->situationApprenantPeriodes->contains($situationApprenantPeriode)) {
            $this->situationApprenantPeriodes->removeElement($situationApprenantPeriode);
            // set the owning side to null (unless already changed)
            if ($situationApprenantPeriode->getPeriode() === $this) {
                $situationApprenantPeriode->setPeriode(null);
            }
        }

        return $this;
    }

    
}
