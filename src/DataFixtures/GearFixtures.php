<?php

namespace App\DataFixtures;

use App\Entity\Gear;
use App\Entity\Translation;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class GearFixtures extends Fixture implements DependentFixtureInterface
{
    public const GEAR_0_REFERENCE = '0-gear';
    public const GEAR_1_REFERENCE = '1-gear';
    public const GEAR_2_REFERENCE = '2-gear';
    public const GEAR_3_REFERENCE = '3-gear';
    public const GEAR_4_REFERENCE = '4-gear';
    public const GEAR_5_REFERENCE = '5-gear';
    public const GEAR_6_REFERENCE = '6-gear';
    public const GEAR_7_REFERENCE = '7-gear';
    public const GEAR_8_REFERENCE = '8-gear';
    public const GEAR_9_REFERENCE = '9-gear';
    public const GEAR_10_REFERENCE = '10-gear';
    public const GEAR_11_REFERENCE = '11-gear';
    public const GEAR_12_REFERENCE = '12-gear';
    public const GEAR_13_REFERENCE = '13-gear';
    public const GEAR_14_REFERENCE = '14-gear';
    public const GEAR_15_REFERENCE = '15-gear';
    public const GEAR_16_REFERENCE = '16-gear';
    public const GEAR_17_REFERENCE = '17-gear';


    public function load(ObjectManager $manager): void
    {
        // $fixtures = [
        //     [
        //         'ref' => self::GEAR_0_REFERENCE,
        //         'category_ref' => LevelFixtures::CHILDREN_0_REFERENCE,
        //         'fr' => 'Aucun',
        //         'en' => '',
        //     ],
        //     [
        //         'ref' => self::GEAR_1_REFERENCE,
        //         'category_ref' => LevelFixtures::CHILDREN_MINI_REFERENCE,
        //         'fr' => 'Draisienne ou vélo enfant 14 ou 16 pouces; les pieds doivent être à plat sur le sol',
        //         'en' => '',
        //     ],
        //     [
        //         'ref' => self::GEAR_2_REFERENCE,
        //         'category_ref' => LevelFixtures::CHILDREN_MINI_REFERENCE,
        //         'fr' => 'Casque de vélo et gants <b>OBLIGATOIRES</b>',
        //         'en' => '',
        //     ],
        //     [
        //         'ref' => self::GEAR_3_REFERENCE,
        //         'category_ref' => LevelFixtures::CHILDREN_PITCHOUN_REFERENCE,
        //         'fr' => 'VTT enfant 16-20 pouces. Protections : casque et protection intégrale dès le deuxième jour',
        //         'en' => '',
        //     ],
        //     [
        //         'ref' => self::GEAR_4_REFERENCE,
        //         'category_ref' => LevelFixtures::CHILDREN_PITCHOUN_REFERENCE,
        //         'fr' => 'Vêtements jambes longues manches longues',
        //         'en' => '',
        //     ],
        //     [
        //         'ref' => self::GEAR_5_REFERENCE,
        //         'category_ref' => LevelFixtures::CHILDREN_KIDS_REFERENCE,
        //         'fr' => 'VTT enfant 20-24 pouces. Protections : casque intégral et protection intégrale dès le premier jour',
        //         'en' => '',
        //     ],
        //     [
        //         'ref' => self::GEAR_6_REFERENCE,
        //         'category_ref' => LevelFixtures::CHILDREN_KIDS_REFERENCE,
        //         'fr' => 'Vêtements jambes longues manches longues',
        //         'en' => '',
        //     ],
        //     [
        //         'ref' => self::GEAR_7_REFERENCE,
        //         'category_ref' => LevelFixtures::ADULTS_1_REFERENCE,
        //         'fr' => 'VTT avec fourche suspendue Casque intégral, gants, coudière et genouillères',
        //         'en' => '',
        //     ],
        //     [
        //         'ref' => self::GEAR_8_REFERENCE,
        //         'category_ref' => LevelFixtures::ADULTS_1_REFERENCE,
        //         'fr' => 'Vêtements jambes longues manches longues',
        //         'en' => '',
        //     ],
        //     [
        //         'ref' => self::GEAR_9_REFERENCE,
        //         'category_ref' => LevelFixtures::ADULTS_2_REFERENCE,
        //         'fr' => 'VTT avec fourche suspendue. Casque intégral, gants, coudière et genouillères',
        //         'en' => '',
        //     ],
        //     [
        //         'ref' => self::GEAR_10_REFERENCE,
        //         'category_ref' => LevelFixtures::ADULTS_2_REFERENCE,
        //         'fr' => 'Vêtements jambes longues manches longues',
        //         'en' => '',
        //     ],
        //     [
        //         'ref' => self::GEAR_11_REFERENCE,
        //         'category_ref' => LevelFixtures::ADULTS_3_REFERENCE,
        //         'fr' => 'VTT tout suspendu. Casque intégral, dorsale, gants, coudière et genouillères',
        //         'en' => '',
        //     ],
        //     [
        //         'ref' => self::GEAR_12_REFERENCE,
        //         'category_ref' => LevelFixtures::ADULTS_3_REFERENCE,
        //         'fr' => 'Vêtements jambes longues manches longues',
        //         'en' => '',
        //     ],
        //     [
        //         'ref' => self::GEAR_13_REFERENCE,
        //         'category_ref' => LevelFixtures::ADULTS_4_REFERENCE,
        //         'fr' => 'VTT tout suspendu. Casque intégral, dorsale, gants, coudière et genouillères',
        //         'en' => '',
        //     ],
        //     [
        //         'ref' => self::GEAR_14_REFERENCE,
        //         'category_ref' => LevelFixtures::ADULTS_4_REFERENCE,
        //         'fr' => 'Vêtements jambes longues manches longues',
        //         'en' => '',
        //     ],
        //     [
        //         'ref' => self::GEAR_15_REFERENCE,
        //         'category_ref' => LevelFixtures::ADULTS_5_REFERENCE,
        //         'fr' => 'VTT tout suspendu. Casque intégral, dorsale, gants, coudière et genouillères',
        //         'en' => '',
        //     ],
        //     [
        //         'ref' => self::GEAR_16_REFERENCE,
        //         'category_ref' => LevelFixtures::ADULTS_5_REFERENCE,
        //         'fr' => 'Vêtements jambes longues manches longues',
        //         'en' => 'Vêtements jambes longues manches longues',
        //     ],
        //     [
        //         'ref' => self::GEAR_17_REFERENCE,
        //         'category_ref' => LevelFixtures::ADULTS_5_REFERENCE,
        //         'fr' => '<b>Enduro</b> : Tenue légère. Short tee shirt, casque au choix, genouillères et coudières. A la demande du moniteur',
        //         'en' => '',
        //     ],
        // ];

        // foreach ($fixtures as $fixture) {
        //     $translation = new Translation();
        //     $translation->setFr($fixture['fr']);
        //     $translation->setEn($fixture['en']);


        //     $level = new Gear();
        //     $level->setTranslation($translation);
        //     $level->setLevel($this->getReference($fixture['category_ref']));
        //     $manager->persist($level);

        //     $this->addReference($fixture['ref'], $level);
        // }

        // $manager->flush();
    }

    public function getDependencies()
    {
        return [
            CourseFixtures::class,
        ];
    }
}
