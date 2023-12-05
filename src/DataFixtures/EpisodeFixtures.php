<?php

namespace App\DataFixtures;

use App\Entity\Episode;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

//src/DataFixtures/EpisodeFixtures.php
$episode = new Episode();
$episode->setTitle('Welcome to the Playground');
$episode->setNumber(1);
$episode->setSeason($this->getReference('season1_Arcane'));
$episode->setSynopsis('Les sœurs orphelines Vi et Powder causent des remous dans les rues souterraines de Zaun à la suite d un braquage dans le très huppé Piltover. ');

$episode = new Episode();
$episode->setTitle('Certains mystères ne devraient jamais être résolus');
$episode->setNumber(2);
$episode->setSeason($this->getReference('season1_Arcane'));
$episode->setSynopsis('Idéaliste, le chercheur Jayce tente de maîtriser la magie par la science malgré les avertissements de son mentor. Le criminel Silco teste une substance puissante.');

$episode = new Episode();
$episode->setTitle('Cette violence crasse nécessaire au changement');
$episode->setNumber(3);
$episode->setSeason($this->getReference('season1_Arcane'));
$episode->setSynopsis('Deux anciens rivaux s affrontent lors d un défi spectaculaire qui se révèle fatidique pour Zaun. Jayce et Viktor prennent de gros risques pour leurs recherches.'); 

$episode = new Episode();
$episode->setTitle('Joyeuse Fête du progrès !');
$episode->setNumber(4);
$episode->setSeason($this->getReference('season1_Arcane'));
$episode->setSynopsis('Alors que Piltover profite de leur technologie, Jayce et Viktor réfléchissent à ce qu ils vont faire. Un visage familier ressort de Zaun pour semer la pagaille.');


$episode = new Episode();
$episode->setTitle('L ennemi commun');
$episode->setNumber(5);
$episode->setSeason($this->getReference('season1_Arcane'));
$episode->setSynopsis('Caitlyn, la pacifieuse qui n en fait qu à sa tête, arpente les bas-fonds pour trouver Silco. Jayce devient une cible en combattant la corruption à Piltover.');


$episode = new Episode();
$episode->setTitle('Quand l empire s effondre');
$episode->setNumber(6);
$episode->setSeason($this->getReference('season1_Arcane'));
$episode->setSynopsis('Un protégé discrédite son mentor devant le Conseil à cause de l évolution rapide d une technologie magique. Poursuivie par les autorités, Jinx doit affronter son passé.');

$episode = new Episode();
$episode->setTitle('Le petit sauveur');
$episode->setNumber(7);
$episode->setSeason($this->getReference('season1_Arcane'));
$episode->setSynopsis('Caitlyn et Vi retrouvent un allié dans les rues de Zaun et se déchaînent contre une ennemie commune. Viktor prend une décision désespérée.');


$episode = new Episode();
$episode->setTitle('L eau et l huile');
$episode->setNumber(8);
$episode->setSeason($this->getReference('season1_Arcane'));
$episode->setSynopsis('L héritière désavouée Mel et sa mère échangent des tactiques de combat. Caitlyn et Vi forgent une alliance improbable. Jinx subit une étonnante transformation.');


$episode = new Episode();
$episode->setTitle('Rouages et engrenages');
$episode->setNumber(9);
$episode->setSeason($this->getReference('season1_Arcane'));
$episode->setSynopsis('À deux doigts d entrer en guerre, les chefs de Piltover et de Zaun sont face à un ultimatum, jusqu à ce qu un affrontement fatidique bouleverse les deux villes à jamais.');


$episode = new Episode();
$episode->setTitle('');
$episode->setNumber(1);
$episode->setSeason($this->getReference('season1_'));
$episode->setSynopsis(' ');


$episode = new Episode();
$episode->setTitle('');
$episode->setNumber(1);
$episode->setSeason($this->getReference('season1_'));
$episode->setSynopsis(' ');


$episode = new Episode();
$episode->setTitle('');
$episode->setNumber(1);
$episode->setSeason($this->getReference('season1_'));
$episode->setSynopsis(' ');


$episode = new Episode();
$episode->setTitle('');
$episode->setNumber(1);
$episode->setSeason($this->getReference('season1_'));
$episode->setSynopsis(' ');

$episode = new Episode();
$episode->setTitle('');
$episode->setNumber(1);
$episode->setSeason($this->getReference('season1_'));
$episode->setSynopsis(' ');

$episode = new Episode();
$episode->setTitle('');
$episode->setNumber(1);
$episode->setSeason($this->getReference('season1_'));
$episode->setSynopsis(' ');