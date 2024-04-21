<?php

namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\Translation;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    public const CHILDREN_REFERENCE = 'category-children';
    public const ADULTS_REFERENCE = 'category-adults';
    public const ROAD_REFERENCE = 'category-road';
    public const PRIVATE_REFERENCE = 'category-private';

    public function load(ObjectManager $manager): void
    {
        $fixtures = [
            [
                'ref' => self::CHILDREN_REFERENCE,
                'slug' => 'children',
                'fr' => 'Enfants',
                'en' => 'Children',
            ],
            [
                'ref' => self::ADULTS_REFERENCE,
                'slug' => 'adults',
                'fr' => 'Adultes',
                'en' => 'Adults',
            ],
            [
                'ref' => self::ROAD_REFERENCE,
                'slug' => 'road',
                'fr' => 'Route',
                'en' => 'Road',
            ],
            [
                'ref' => self::PRIVATE_REFERENCE,
                'slug' => 'private',
                'fr' => 'Leçons particulières',
                'en' => 'Private lessons',
            ],
        ];

        foreach ($fixtures as $fixture) {
            $name = new Translation();
            $name->setFr($fixture['fr']);
            $name->setEn($fixture['en']);

            $category = new Category();
            $category->setSlug($fixture['slug']);
            $category->setName($name);
            $manager->persist($category);

            $this->addReference($fixture['ref'], $category);
        }

        $manager->flush();
    }
}
