<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Post;

class PostFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);


        for($i = 0; $i <= 5; $i++)
        {
            $post = new Post();
            $post->setTitle("Example post title -> POST #{$i}");
            $post->setBody('Example post body');
            $manager->persist($post);
        }

        $manager->flush();
    }
}
