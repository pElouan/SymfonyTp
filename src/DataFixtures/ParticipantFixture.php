<?php

namespace App\DataFixtures;

use App\Entity\Participant;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
class ParticipantFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 0; $i < 5; $i++) {
            $part = new Participant();
            $part ->setNom("Nom participant $i");
            $part ->setPrenom("Prenom participant $i");
            $part ->setEmail("email_participant$i@test.com");
            $manager->persist($part);
        }
        $manager->flush();
    }
}
