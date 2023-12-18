<?php

namespace App\DataFixtures;

use Faker\Factory;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use App\DataFixtures\actor;

class ActorFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $faker = Factory::create();

        for($i = 0; $i < 10; $i++) {
            $actor = new actor();
           
            $actor->setNumber($faker->numberBetween(1, 10));
            $actor->setname($faker->name());
            $actor->setprogram($faker->program(3, true));
       
            $manager->persist($actor);
        }
        $manager->flush();
    }
}
