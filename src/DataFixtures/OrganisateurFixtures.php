<?php

namespace App\DataFixtures;

use App\Entity\Organisateur;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
class OrganisateurFixtures extends Fixture
{
public const NB_ORGA = 3;
public function load(ObjectManager $manager): void
{
    for ($i = 0; $i < 3; $i++) {
        $orga = new Organisateur();
        $orga->setNom("Organisateur $i");
        $orga->setSiteweb("https://www.organisateur$i.fr");
        $manager->persist($orga);
        $manager->flush();
        $this->addReference('organisateur_' . $i, $orga);// objet ajouté afin d'être accessible dans les autres fixtures
        }
    }
}

