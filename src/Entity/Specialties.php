<?php

namespace App\Entity;

use App\Repository\SpecialtiesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SpecialtiesRepository::class)
 */
class Specialties
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
    public $specialty;

    /**
     * @ORM\OneToMany(targetEntity=SkillSpecialty::class, mappedBy="specialty")
     */
    public $skillSpecialties;

    public function __construct()
    {
        $this->skillSpecialties = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSpecialty(): ?string
    {
        return $this->specialty;
    }

    public function setSpecialty(string $specialty): self
    {
        $this->specialty = $specialty;

        return $this;
    }

    /**
     * @return Collection|SkillSpecialty[]
     */
    public function getSkillSpecialties(): Collection
    {
        return $this->skillSpecialties;
    }

    public function addSkillSpecialty(SkillSpecialty $skillSpecialty): self
    {
        if (!$this->skillSpecialties->contains($skillSpecialty)) {
            $this->skillSpecialties[] = $skillSpecialty;
            $skillSpecialty->setSpecialty($this);
        }

        return $this;
    }

    public function removeSkillSpecialty(SkillSpecialty $skillSpecialty): self
    {
        if ($this->skillSpecialties->contains($skillSpecialty)) {
            $this->skillSpecialties->removeElement($skillSpecialty);
            // set the owning side to null (unless already changed)
            if ($skillSpecialty->getSpecialty() === $this) {
                $skillSpecialty->setSpecialty(null);
            }
        }

        return $this;
    }
}
