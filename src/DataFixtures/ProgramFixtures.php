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
        $program->setPoster('ttt');
        $program->setCountry(('Americain'));
        $program->setYear((0));
        $this->addReference('program_Walking dead', $program);
        $manager->persist($program);

        $program = new Program();
        $program->setTitle('Jujutsu Kaisen');
        $program->setSynopsis('Des exorciste se battent contre des calamités');
        $program->setCategory($this->getReference('category_Animation'));
        $program->setPoster('ttt');
        $program->setCountry(('Japon'));
        $program->setYear((0));
        $this->addReference('program_Jujutsu Kaisen', $program);
        $manager->persist($program);
       
   
        $program = new Program();
        $program->setTitle('Arcane');
        $program->setSynopsis('Arcane est une série télévisée d animation américano-française dont le scénario prend place dans l univers du jeu vidéo League of Legendss');
        $program->setCategory($this->getReference('category_Animation'));
        $program->setPoster('ttt');
        $program->setCountry(('francais'));
        $program->setYear((0));
        $this->addReference('program_Arcane', $program);
        $manager->persist($program);

        $program = new Program();
        $program->setTitle('Gen V');
        $program->setSynopsis('l Université des heroes de chez vought internationnal');
        $program->setCategory($this->getReference('category_Aventure'));
        $program->setPoster('ttt');
        $program->setCountry(('americain'));
        $program->setYear((0));
        $this->addReference('program_Gen V', $program);
        $manager->persist($program);
      

        $program = new Program();
        $program->setTitle('Good Omens');
        $program->setSynopsis('un ange et un demon sont obliger allier pour arreter l armageddon');
        $program->setCategory($this->getReference('category_Fantastique'));
        $program->setPoster('ttt');
        $program->setCountry(('anglais'));
        $program->setYear((0));
        $this->addReference('program_Good Omens', $program);
       $manager->persist($program);
        
        
        $program = new Program();
        $program->setTitle('American Horror Story ');
        $program->setSynopsis('constituée d épisodes indépendants ayant pour thème un univers horrifique qui fait référence à de nombreux faits divers,des légendes urbaines et des histoires paranormales.');
        $program->setCategory($this->getReference('category_Horreur'));
        $program->setPoster('ttt');
        $program->setCountry(('americain'));
        $program->setYear((0));
        $this->addReference('program_American Horror Story', $program);
        $manager->persist($program);
       

        $program = new Program();
        $program->setTitle('kaamelott ');
        $program->setSynopsis('comedie ayant pour theme l univers d arthur pendragon.');
        $program->setCategory($this->getReference('category_Comedie'));
        $program->setPoster('ttt');
        $program->setCountry(('francais'));
        $program->setYear((0));
        $this->addReference('program_kaamelott', $program);
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
