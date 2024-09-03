<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\User;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $user = new User();
        $user->setUsername("developer");
        $user->setPassword('$2y$13$zyE/rhbg09arrBs7gCJ9Weok/RhBc1rsyaLBrpyR/WTEUD4nFNcV6');

        $manager->persist($user);

        $manager->flush();
    }
}
