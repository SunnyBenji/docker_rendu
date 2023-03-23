<?php

namespace App\DataFixtures;

use App\Entity\Article;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i =0; $i <= 10; $i++) {
            $article = new Article();
            $article->setTitle('Mon article '.$i);
            $manager->persist($article);
        }

        $manager->flush();
    }
}
