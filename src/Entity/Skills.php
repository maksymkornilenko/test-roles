<?php

namespace App\Entity;

use App\Repository\SkillsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SkillsRepository::class)
 */
class Skills
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
    public $skill;

    /**
     * @ORM\OneToMany(targetEntity=SkillSpecialty::class, mappedBy="skill")
     */
    private $skillSpecialties;

    public function __construct()
    {
        $this->skillSpecialties = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSkill(): ?string
    {
        return $this->skill;
    }

    public function setSkill(string $skill): self
    {
        $this->skill = $skill;

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
            $skillSpecialty->setSkill($this);
        }

        return $this;
    }

    public function removeSkillSpecialty(SkillSpecialty $skillSpecialty): self
    {
        if ($this->skillSpecialties->contains($skillSpecialty)) {
            $this->skillSpecialties->removeElement($skillSpecialty);
            // set the owning side to null (unless already changed)
            if ($skillSpecialty->getSkill() === $this) {
                $skillSpecialty->setSkill(null);
            }
        }

        return $this;
    }
}
