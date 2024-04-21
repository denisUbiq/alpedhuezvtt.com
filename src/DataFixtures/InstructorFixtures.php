<?php

namespace App\DataFixtures;

use App\Entity\Instructor;
use App\Entity\Translation;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class InstructorFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $fixtures = [
            [
                'slug' => 'riton',
                'name' => 'Riton',
                'title' => [
                    'fr' => 'riton d\'huez',
                    'en' => 'riton from huez',
                ],
                'catchphrase' => [
                    'fr' => 'rouler ou mourrir',
                    'en' => 'bike or die',
                ],
            ],
            [
                'slug' => 'phil',
                'name' => 'Phil',
                'title' => [
                    'fr' => 'phil le mono',
                    'en' => 'phil el instructor',
                ],
                'catchphrase' => [
                    'fr' => 'rouler ou mourrir, mais pas trop',
                    'en' => 'bike or die, but not too much',
                ],
            ],
        ];

        foreach ($fixtures as $fixture) {
            $title = new Translation();
            $title->setFr($fixture['title']['fr']);
            $title->setEn($fixture['title']['en']);
            $catchphrase = new Translation();
            $catchphrase->setFr($fixture['catchphrase']['fr']);
            $catchphrase->setEn($fixture['catchphrase']['en']);

            $instructor = new Instructor();
            $instructor->setSlug($fixture['slug']);
            $instructor->setName($fixture['name']);
            $instructor->setTitle($title);
            $instructor->setCatchphrase($catchphrase);
            $manager->persist($instructor);
        }

        $manager->flush();
    }
}
