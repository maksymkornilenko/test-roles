<?php

namespace App\Entity\versionOOP;




use mysql_xdevapi\Exception;

class UserRole
{
    const ARRAY_ROLE_SKILLS=[
        'programmer'=>['writeCode','testCode','communicate'],
        'designer'=>['draw','communicate'],
        'tester'=>['testCode','communicate','setTasks'],
        'manager '=>['setTasks'],
    ];
    public $name;
    public $skill;
    public function __construct($name, $skill=null)
    {
        $this->skill=$skill;
        $this->name=$name;
    }

    private function getRole($role, $skill){
        switch ($role){
            case 'programmer':
                $model = new Programmer(self::ARRAY_ROLE_SKILLS[$role],$skill);
                break;
            case 'designer':
                $model = new Designer(self::ARRAY_ROLE_SKILLS[$role],$skill);
                break;
            case 'tester':
                $model = new Tester(self::ARRAY_ROLE_SKILLS[$role],$skill);
                break;
            case 'manager':
                $model = new Manager(self::ARRAY_ROLE_SKILLS[$role],$skill);
                break;

        }
        return $model;
    }
    protected function SkillsList($skillsArray){
        $str='';
        foreach ($skillsArray as $skill){
            $str .= $skill.' ';
        }
        return $str;
    }
    public function show()
    {
            $role=self::getRole($this->name, $this->skill);

            if ($this->skill!=null){
                return $role->can();
            }
        return $role->showSkills();
    }
}
