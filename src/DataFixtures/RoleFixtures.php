<?php

namespace App\DataFixtures;

use App\Entity\Role;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class RoleFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $admin = new Role();
        $admin->setNom('ADMIN');
        $manager->persist($admin);

        $membre = new Role();
        $membre->setNom('MEMBRE');
        $manager->persist($membre);

        $manager->flush();
    }
}
