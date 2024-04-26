<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Voto;
use App\Entity\Allergene;
use Faker\Factory as Faker;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Faker::create('it_IT');

        //seeding Voto table
        for ($i = 1; $i <= 10; $i++) {
            $new_voto = new Voto();
            $new_voto->setValue($i);
            $manager->persist($new_voto);
        }

        //seeding Allergene
        $allergeni_list = ['glutine', 'crostacei', 'uova', 'pesce', 'arachidi', 'soia', 'latte', 'frutta a guscio', 'sedano', 'senape', 'sesamo', 'anidride solforosa', 'lupini', 'molluschi'];
        for ($i = 0; $i < count($allergeni_list); $i++) {
            $allergene = $allergeni_list[$i];
            $new_allergene = new Allergene();
            $new_allergene->setName($allergene);
            $new_allergene->setDescription($faker->text());
            $manager->persist($new_allergene);


            $manager->flush();
        }
    }
}
