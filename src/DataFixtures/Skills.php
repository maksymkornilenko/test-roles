<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class Skills extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $skills1 = new \App\Entity\Skills();
        $skills1->setSkill('writeCode');

        $skills2 = new \App\Entity\Skills();
        $skills2->setSkill('testCode');

        $skills3 = new \App\Entity\Skills();
        $skills3->setSkill('communicateWithManager');

        $skills4 = new \App\Entity\Skills();
        $skills4->setSkill('draw');

        $skills5 = new \App\Entity\Skills();
        $skills5->setSkill('setTasks');

        $manager->persist($skills1);
        $manager->persist($skills2);
        $manager->persist($skills3);
        $manager->persist($skills4);
        $manager->persist($skills5);

        $specialties1 = new \App\Entity\Specialties();
        $specialties1->setSpecialty('programmer');

        $specialties2 = new \App\Entity\Specialties();
        $specialties2->setSpecialty('designer');

        $specialties3 = new \App\Entity\Specialties();
        $specialties3->setSpecialty('tester');

        $specialties4 = new \App\Entity\Specialties();
        $specialties4->setSpecialty('manager');

        $manager->persist($specialties1);
        $manager->persist($specialties2);
        $manager->persist($specialties3);
        $manager->persist($specialties4);

        $skillSpecialties1 = new \App\Entity\SkillSpecialty();
        $skillSpecialties1->setSpecialty($specialties1);
        $skillSpecialties1->setSkill($skills1);

        $skillSpecialties2 = new \App\Entity\SkillSpecialty();
        $skillSpecialties2->setSpecialty($specialties1);
        $skillSpecialties2->setSkill($skills2);

        $skillSpecialties3 = new \App\Entity\SkillSpecialty();
        $skillSpecialties3->setSpecialty($specialties1);
        $skillSpecialties3->setSkill($skills3);

        $skillSpecialties4 = new \App\Entity\SkillSpecialty();
        $skillSpecialties4->setSpecialty($specialties2);
        $skillSpecialties4->setSkill($skills3);

        $skillSpecialties5 = new \App\Entity\SkillSpecialty();
        $skillSpecialties5->setSpecialty($specialties2);
        $skillSpecialties5->setSkill($skills4);

        $skillSpecialties6 = new \App\Entity\SkillSpecialty();
        $skillSpecialties6->setSpecialty($specialties3);
        $skillSpecialties6->setSkill($skills2);

        $skillSpecialties7 = new \App\Entity\SkillSpecialty();
        $skillSpecialties7->setSpecialty($specialties3);
        $skillSpecialties7->setSkill($skills3);

        $skillSpecialties8 = new \App\Entity\SkillSpecialty();
        $skillSpecialties8->setSpecialty($specialties3);
        $skillSpecialties8->setSkill($skills5);

        $skillSpecialties9 = new \App\Entity\SkillSpecialty();
        $skillSpecialties9->setSpecialty($specialties4);
        $skillSpecialties9->setSkill($skills5);

        $manager->persist($skillSpecialties1);
        $manager->persist($skillSpecialties2);
        $manager->persist($skillSpecialties3);
        $manager->persist($skillSpecialties4);
        $manager->persist($skillSpecialties6);
        $manager->persist($skillSpecialties7);
        $manager->persist($skillSpecialties8);
        $manager->persist($skillSpecialties9);

        $manager->flush();
    }
}
