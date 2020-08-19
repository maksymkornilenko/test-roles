<?php

namespace App\Entity\versionOOP;




class Programmer extends UserRole implements SkillsInterface
{

    protected $roles;

    public function __construct($roles, $skill)
    {
        $this->skill=$skill;
        $this->roles=$roles;
    }

    function showSkills()
    {
        return $this->SkillsList($this->roles);

    }

    public function can(){
        if (in_array($this->skill, $this->roles)){
            return true;
        }
        return false;
    }
}
