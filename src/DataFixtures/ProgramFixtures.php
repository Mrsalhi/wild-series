<?php

namespace App\DataFixtures;

use App\Entity\Program;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class ProgramFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $program = new Program();
        $program->setTitle('Walking dead');
        $program->setSynopsis('Des zombies envahissent la terre');
        $program->setCategory($this->getReference('category_Action'));
        $manager->persist($program);
        

        $program = new Program();
        $program->setTitle('Jujutsu Kaisen');
        $program->setSynopsis('Des exorciste se battent contre des calamités');
        $program->setCategory($this->getReference('category_Animation'));
        $manager->persist($program);
       

        $program = new Program();
        $program->setTitle('Gen V');
        $program->setSynopsis('l Université des heroes de chez vought internationnal');
        $program->setCategory($this->getReference('category_Aventure'));
        $manager->persist($program);
      

        $program = new Program();
        $program->setTitle('Good Omens');
        $program->setSynopsis('un ange et un demon sont obliger allier pour arreter l armageddon');
        $program->setCategory($this->getReference('category_Fantastique'));
        $manager->persist($program);
       
        
        $program = new Program();
        $program->setTitle('American Horror Story ');
        $program->setSynopsis('constituée d épisodes indépendants ayant pour thème un univers horrifique qui fait référence à de nombreux faits divers,des légendes urbaines et des histoires paranormales.');
        $program->setCategory($this->getReference('category_Horreur'));
        $manager->persist($program);
       

        $program = new Program();
        $program->setTitle('kaamelott ');
        $program->setSynopsis('comedie ayant pour theme l univers d arthur pendragon.');
        $program->setCategory($this->getReference('category_Comedie'));
        $manager->persist($program);
        $manager->flush();
    }
    public function getDependencies()
    {
        // Tu retournes ici toutes les classes de fixtures dont ProgramFixtures dépend
        return [
          CategoryFixtures::class,
        ];
    }


}
