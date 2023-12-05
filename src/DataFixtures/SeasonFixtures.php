<?php
namespace App\DataFixtures;

use App\Entity\Season;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;




$season = new Season();
$season->setNumber(1);
$season->setProgram($this->getReference('program_Arcane'));

$this->addReference('season1_Arcane', $season);


//src/DataFixtures/SeasonFixtures.php
$season = new Season();
$season->setNumber(1);
$season->setProgram($this->getReference('program_Walking dead'));
//... set other season's properties
$this->addReference('season1_Walking dead', $season);


//src/DataFixtures/SeasonFixtures.php
$season = new Season();
$season->setNumber(2);
$season->setProgram($this->getReference('program_Walking dead'));
//... set other season's properties
$this->addReference('season2_Walking dead', $season);


//src/DataFixtures/SeasonFixtures.php
$season = new Season();
$season->setNumber(3);
$season->setProgram($this->getReference('program_Walking dead'));
//... set other season's properties
$this->addReference('season3_Walking dead', $season);

//src/DataFixtures/SeasonFixtures.php
$season = new Season();
$season->setNumber(4);
$season->setProgram($this->getReference('program_Walking dead'));
//... set other season's properties
$this->addReference('season4_Walking dead', $season);

$season = new Season();
$season->setNumber(5);
$season->setProgram($this->getReference('program_Walking dead'));
//... set other season's properties
$this->addReference('season5_Walking dead', $season);


$season = new Season();
$season->setNumber(6);
$season->setProgram($this->getReference('program_Walking dead'));
//... set other season's properties
$this->addReference('season6_Walking dead', $season);


$season = new Season();
$season->setNumber(7);
$season->setProgram($this->getReference('program_Walking dead'));
//... set other season's properties
$this->addReference('season7_Walking dead', $season);


$season = new Season();
$season->setNumber(8);
$season->setProgram($this->getReference('program_Walking dead'));
//... set other season's properties
$this->addReference('season8_Walking dead', $season);



$season = new Season();
$season->setNumber(9);
$season->setProgram($this->getReference('program_Walking dead'));
//... set other season's properties
$this->addReference('season9_Walking dead', $season);


$season = new Season();
$season->setNumber(10);
$season->setProgram($this->getReference('program_Walking dead'));
//... set other season's properties
$this->addReference('season10_Walking dead', $season);


$season = new Season();
$season->setNumber(11);
$season->setProgram($this->getReference('program_Walking dead'));
//... set other season's properties
$this->addReference('season11_Walking dead', $season);



$season = new Season();
$season->setNumber(1);
$season->setProgram($this->getReference('program_Walking dead'));
//... set other season's properties
$this->addReference('season1_Walking dead', $season);


$season = new Season();
$season->setNumber(1);
$season->setProgram($this->getReference('program_Jujutsu Kaisen'));
//... set other season's properties
$this->addReference('season1_Jujutsu Kaisen', $season);


$season = new Season();
$season->setNumber(2);
$season->setProgram($this->getReference('program_Jujutsu Kaisen'));
//... set other season's properties
$this->addReference('season2_Jujutsu Kaisen', $season);

$season = new Season();
$season->setNumber(1);
$season->setProgram($this->getReference('program_Gen V'));
//... set other season's properties
$this->addReference('season1_Gen V', $season);

$season = new Season();
$season->setNumber(1);
$season->setProgram($this->getReference('program_Good Omens'));
//... set other season's properties
$this->addReference('season1_Good Omens', $season);

$season = new Season();
$season->setNumber(2);
$season->setProgram($this->getReference('program_Good Omens'));
//... set other season's properties
$this->addReference('season2_Good Omens', $season);


$season = new Season();
$season->setNumber(1);
$season->setProgram($this->getReference('program_kaamelott'));
//... set other season's properties
$this->addReference('season1_kaamelott', $season);

$season = new Season();
$season->setNumber(2);
$season->setProgram($this->getReference('program_kaamelott'));
//... set other season's properties
$this->addReference('season2_kaamelott', $season);

$season = new Season();
$season->setNumber(3);
$season->setProgram($this->getReference('program_kaamelott'));
//... set other season's properties
$this->addReference('season3_kaamelott', $season);

$season = new Season();
$season->setNumber(4);
$season->setProgram($this->getReference('program_kaamelott'));
//... set other season's properties
$this->addReference('season4_kaamelott', $season);


$season = new Season();
$season->setNumber(5);
$season->setProgram($this->getReference('program_kaamelott'));
//... set other season's properties
$this->addReference('season5_kaamelott', $season);


$season = new Season();
$season->setNumber(6);
$season->setProgram($this->getReference('program_kaamelott'));
//... set other season's properties
$this->addReference('season6_kaamelott', $season);


$season = new Season();
$season->setNumber(1);
$season->setProgram($this->getReference('program_American Horror Story'));
//... set other season's properties
$this->addReference('season1_American Horror Story', $season);


$season = new Season();
$season->setNumber(2);
$season->setProgram($this->getReference('program_American Horror Story'));
//... set other season's properties
$this->addReference('season2_American Horror Story', $season);


$season = new Season();
$season->setNumber(3);
$season->setProgram($this->getReference('program_American Horror Story'));
//... set other season's properties
$this->addReference('season3_American Horror Story', $season);

$season = new Season();
$season->setNumber(4);
$season->setProgram($this->getReference('program_American Horror Story'));
//... set other season's properties
$this->addReference('season4_American Horror Story', $season);

$season = new Season();
$season->setNumber(5);
$season->setProgram($this->getReference('program_American Horror Story'));
//... set other season's properties
$this->addReference('season5_American Horror Story', $season);

$season = new Season();
$season->setNumber(6);
$season->setProgram($this->getReference('program_American Horror Story'));
//... set other season's properties
$this->addReference('season6_American Horror Story', $season);

$season = new Season();
$season->setNumber(7);
$season->setProgram($this->getReference('program_American Horror Story'));
//... set other season's properties
$this->addReference('season7_American Horror Story', $season);

$season = new Season();
$season->setNumber(8);
$season->setProgram($this->getReference('program_American Horror Story'));
//... set other season's properties
$this->addReference('season8_American Horror Story', $season);

$season = new Season();
$season->setNumber(9);
$season->setProgram($this->getReference('program_American Horror Story'));
//... set other season's properties
$this->addReference('season9_American Horror Story', $season);

$season = new Season();
$season->setNumber(10);
$season->setProgram($this->getReference('program_American Horror Story'));
//... set other season's properties
$this->addReference('season10_American Horror Story', $season);


$season = new Season();
$season->setNumber(11);
$season->setProgram($this->getReference('program_American Horror Story'));
//... set other season's properties
$this->addReference('season11_American Horror Story', $season);

$season = new Season();
$season->setNumber(12);
$season->setProgram($this->getReference('program_American Horror Story'));
//... set other season's properties
$this->addReference('season12_American Horror Story', $season);

