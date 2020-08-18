<?php

namespace App\Entity;

use App\Repository\SkillSpecialtyRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SkillSpecialtyRepository::class)
 */
class SkillSpecialty
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Specialties::class, inversedBy="skillSpecialties")
     * @ORM\JoinColumn(nullable=false)
     */
    private $specialty;

    /**
     * @ORM\ManyToOne(targetEntity=Skills::class, inversedBy="skillSpecialties")
     * @ORM\JoinColumn(nullable=false)
     */
    public $skill;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSpecialty(): ?Specialties
    {
        return $this->specialty;
    }

    public function setSpecialty(?Specialties $specialty): self
    {
        $this->specialty = $specialty;

        return $this;
    }

    public function getSkill(): ?Skills
    {
        return $this->skill;
    }

    public function setSkill(?Skills $skill): self
    {
        $this->skill = $skill;

        return $this;
    }
}
