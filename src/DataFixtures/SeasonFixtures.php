<?php
//src/DataFixtures/SeasonFixtures.php
$season = new Season();
$season->setNumber(1);
$season->setProgram($this->getReference('program_Arcane'));
//... set other season's properties
$this->addReference('season1_Arcane', $season);