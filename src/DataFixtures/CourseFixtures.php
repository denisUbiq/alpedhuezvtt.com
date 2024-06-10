<?php

namespace App\DataFixtures;

use App\Entity\Course;
use App\Entity\Translation;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class CourseFixtures extends Fixture implements DependentFixtureInterface
{
    public const MINIBIKER_REFERENCE = 'minibiker-course';
    public const KIDS_REFERENCE = 'kids-course';
    public const SUMMERCAMP_REFERENCE = 'summercamp-course';
    public const ROAD_REFERENCE = 'road-course';
    public const PRIVATE_REFERENCE = 'private-course';


    public function load(ObjectManager $manager): void
    {
        $fixtures = [
            [
                'ref' => self::MINIBIKER_REFERENCE,
                'slug' => 'mini-biker',
                'categories' => [CategoryFixtures::CHILDREN_REFERENCE],
                'title' => [
                    'fr' => 'Mini Biker',
                    'en' => 'Mini Biker',
                ],
                'meetingPoint' => [
                    'fr' => 'Kid Park',
                    'en' => 'Kid Park',
                ],
                'meetingPointLongitude' => '45.099108',
                'meetingPointLatitude' => '6.070151',
                'description' => [
                    'fr' => 'Mini-Biker c’est la formule VTT de l’Ecole MCF pour les tout petits à partir de 5 ans pour une une progression dans le plaisir et le jeu grâce au savoir faire de nos moniteurs.',
                    'en' => '',
                ],
                'target' => [
                    'fr' => 'Enfants à partir de 5 ans',
                    'en' => '',
                ],
                'schedule' => [
                    'fr' => '14h à 16h',
                    'en' => '',
                ],
                'cost' => [
                    'fr' => '35€ par séance <br /> 145€ pour le stage de 5 jours',
                    'en' => '',
                ],
                'texts' => [
                    'fr' => [
                        'C’est la formule VTT de l’Ecole MCF pour les tout petits. Le stage est composé de 5 séances de VTT totalement adaptées à leur âge; pour une une progression dans le plaisir et le jeu grâce au savoir faire de nos moniteurs.',
                        'Au cours de la semaine de stage ils vont acquérir de l’autonomie, et apprendre à manier le vélo. Ils vont ainsi développer équilibre, sens des trajectoires et des déplacements en deux roues. Enfin ils apprendront à freiner sur tout type de terrain.'
                    ],
                    'en' => [],
                ],
                'points' => [
                    'fr' => [
                        'Les après-midi du lundi au vendredi de 14:00 à 16:00',
                        'Casque et gants obligatoires',
                        'Prix Hors remontées mécaniques et matériel',
                        'Paiement sur place',
                    ],
                    'en' => [],
                ],
            ],
            [
                'ref' => self::KIDS_REFERENCE,
                'slug' => 'kids-biker',
                'categories' => [CategoryFixtures::CHILDREN_REFERENCE],
                'title' => [
                    'fr' => 'Kids / Pitchouns',
                    'en' => 'Kids / PItchouns',
                ],
                'meetingPoint' => [
                    'fr' => 'Kid Park',
                    'en' => 'Kid Park',
                ],
                'meetingPointLongitude' => '45.099108',
                'meetingPointLatitude' => '6.070151',
                'description' => [
                    'fr' => 'Kids / Pitchouns bikers c\'est notre formule enfant. Des groupes de niveau et âge sont proposé afin de faire progresser vos petits dans les meilleurs conditions.',
                    'en' => '',
                ],
                'target' => [
                    'fr' => 'Enfants à partir de 6 ans',
                    'en' => '',
                ],
                'schedule' => [
                    'fr' => '14h à 16h',
                    'en' => '',
                ],
                'cost' => [
                    'fr' => '35€ par séance <br /> 145€ pour le stage de 5 jours',
                    'en' => '',
                ],
                'texts' => [
                    'fr' => [
                        'Nous évoluons sur le domaine de Marmotteland, un terrain ludique et adapté pour rouler et progresser en toute sécurité',
                        'Pour les plus jeunes, l\'apprentissage des bases du VTT se fait dans un espace sécurisé avec tapis roulant. Nous abordons les différents fondamentaux techniques appropriés à leur niveau sur fond de jeu et d’amusement.',
                        'Pour les plus grands, c\'est montée en cabine et enchaînement des descentes, dérapages et sauts. En fin de semaine, tous les enfants se retrouvent pour une longue descente',
                        'Attention les parents, entraînez-vous, car ils iront plus vite que vous ! Minimum 4pax.'
                    ],
                    'en' => [],
                ],
                'points' => [
                    'fr' => [
                        'Les après-midi du lundi au vendredi de 14:00 à 16:00',
                        'Casque et gants obligatoires',
                        'Prix Hors remontées mécaniques et matériel',
                        'Paiement sur place',
                    ],
                    'en' => [],
                ],
            ],
            [
                'ref' => self::SUMMERCAMP_REFERENCE,
                'slug' => 'summer-camp',
                'categories' => [CategoryFixtures::ADULTS_REFERENCE],
                'title' => [
                    'fr' => 'Summer camp',
                    'en' => '',
                ],
                'meetingPoint' => [
                    'fr' => 'Kid Park',
                    'en' => 'Kid Park',
                ],
                'meetingPointLongitude' => '45.099108',
                'meetingPointLatitude' => '6.070151',
                'description' => [
                    'fr' => 'Rejoignez nous à nouveau cet été. Vous retrouverez vos anciens partenaires de ride ou en rencontrerez de nouveaux dans ce cours collectif organisé en sessions de trois heures.',
                    'en' => '',
                ],
                'target' => [
                    'fr' => 'Adultes tous niveau',
                    'en' => '',
                ],
                'schedule' => [
                    'fr' => '9h15 à 12h15',
                    'en' => '',
                ],
                'cost' => [
                    'fr' => '35€ par séance <br /> 29€ par personne à partir de 5 demi-journées consécutives',
                    'en' => '',
                ],
                'texts' => [
                    'fr' => [
                        'Rejoignez nous à nouveau cet été. Vous retrouverez vos anciens partenaires de ride ou en rencontrerez de nouveaux dans ce cours collectif organisé en sessions de trois heures.',
                        'En VTT de descente/enduro, vous chercher à progresser sur des apprentissages techniques ou vous voulez explorer les spots secrets et rouler sur de nouveaux trails. Les moniteurs seront contents de vous guider sur une séance ou une semaine complète et de vous faire partager le splendide grand domaine VTT de l’Alpe d’Huez.',
                    ],
                    'en' => [],
                ],
                'points' => [
                    'fr' => [
                        'Les matins du lundi au vendredi',
                        'Minimum 4Pax',
                        'Uniquement pendant les périodes d’ouverture des remontées mécaniques',
                        'Paiement sur place',
                    ],
                    'en' => [],
                ],
            ],
            [
                'ref' => self::ROAD_REFERENCE,
                'slug' => 'road',
                'categories' => [CategoryFixtures::ROAD_REFERENCE],
                'title' => [
                    'fr' => 'Route',
                    'en' => 'Road',
                ],
                'meetingPoint' => [
                    'fr' => 'Kid Park',
                    'en' => 'Kid Park',
                ],
                'meetingPointLongitude' => '45.099108',
                'meetingPointLatitude' => '6.070151',
                'description' => [
                    'fr' => '',
                    'en' => '',
                ],
                'target' => [
                    'fr' => 'Adultes tous niveau',
                    'en' => '',
                ],
                'schedule' => [
                    'fr' => '9h15 à 12h15',
                    'en' => '',
                ],
                'cost' => [
                    'fr' => '35€ par séance <br /> 29€ par personne à partir de 5 demi-journées consécutives',
                    'en' => '',
                ],
                'texts' => [
                    'fr' => [
                    ],
                    'en' => [],
                ],
                'points' => [
                    'fr' => [
                    ],
                    'en' => [],
                ],
            ],
            [
                'ref' => self::PRIVATE_REFERENCE,
                'slug' => 'private',
                'categories' => [CategoryFixtures::PRIVATE_REFERENCE, CategoryFixtures::CHILDREN_REFERENCE, CategoryFixtures::ADULTS_REFERENCE, CategoryFixtures::ROAD_REFERENCE],
                'title' => [
                    'fr' => 'Leçons particulières',
                    'en' => 'Private lessons',
                ],
                'meetingPoint' => [
                    'fr' => 'Kid Park',
                    'en' => 'Kid Park',
                ],
                'meetingPointLongitude' => '45.099108',
                'meetingPointLatitude' => '6.070151',
                'description' => [
                    'fr' => '',
                    'en' => '',
                ],
                'target' => [
                    'fr' => 'Adultes tous niveau',
                    'en' => '',
                ],
                'schedule' => [
                    'fr' => '9h15 à 12h15',
                    'en' => '',
                ],
                'cost' => [
                    'fr' => '35€ par séance <br /> 29 euros par personne à partir de 5 demi-journées consécutives',
                    'en' => '',
                ],
                'texts' => [
                    'fr' => [
                    ],
                    'en' => [],
                ],
                'points' => [
                    'fr' => [
                    ],
                    'en' => [],
                ],
            ],
            // [
            //     'ref' => self::CHILDREN_MINI_REFERENCE,
            //     'category_ref' => CategoryFixtures::CHILDREN_REFERENCE,
            //     'title' => [
            //         'fr' => 'Mini Biker<br />4 – 6 ans',
            //         'en' => '',
            //     ],
            //     'description' => [
            //         'fr' => 'Je débute la draisienne ou le vélo. J’évolue sans roulettes, j’ai des notions d’équilibre à deux roues',
            //         'en' => '',
            //     ]
            // ],
            // [
            //     'ref' => self::CHILDREN_PITCHOUN_REFERENCE,
            //     'category_ref' => CategoryFixtures::CHILDREN_REFERENCE,
            //     'title' => [
            //         'fr' => 'Pitchouns<br />6 – 8 ans',
            //         'en' => '',
            //     ],
            //     'description' => [
            //         'fr' => 'Je sais faire du vélo, je découvre le VTT en montagne et les technique de base dans un environnement très ludique',
            //         'en' => '',
            //     ]
            // ],
            // [
            //     'ref' => self::CHILDREN_KIDS_REFERENCE,
            //     'category_ref' => CategoryFixtures::CHILDREN_REFERENCE,
            //     'title' => [
            //         'fr' => 'Kids<br />9 – 10 ans',
            //         'en' => '',
            //     ],
            //     'description' => [
            //         'fr' => 'Je sais faire du VTT en montagne. Je gère les freinages dans la pente et je contrôle ma vitesse et mes trajectoires. Les moniteurs ont validé mon passage en kids l’année dernière',
            //         'en' => '',
            //     ]
            // ],
            // [
            //     'ref' => self::ADULTS_1_REFERENCE,
            //     'category_ref' => CategoryFixtures::ADULTS_REFERENCE,
            //     'title' => [
            //         'fr' => 'Niveau 1',
            //         'en' => 'Level 1',
            //     ],
            //     'description' => [
            //         'fr' => 'Je sais faire du vélo. Je suis débutant en VTT de montagne',
            //         'en' => '',
            //     ]
            // ],
            // [
            //     'ref' => self::ADULTS_2_REFERENCE,
            //     'category_ref' => CategoryFixtures::ADULTS_REFERENCE,
            //     'title' => [
            //         'fr' => 'Niveau 2',
            //         'en' => 'Level 2',
            //     ],
            //     'description' => [
            //         'fr' => ' Je roule sur les pistes faciles d’un domaine VTT; les pistes vertes',
            //         'en' => '',
            //     ]
            // ],
            // [
            //     'ref' => self::ADULTS_3_REFERENCE,
            //     'category_ref' => CategoryFixtures::ADULTS_REFERENCE,
            //     'title' => [
            //         'fr' => 'Niveau 3',
            //         'en' => 'Level 3',
            //     ],
            //     'description' => [
            //         'fr' => 'Je roule régulièrement en VTT cross-country, je peux descendre les pistes bleues',
            //         'en' => '',
            //     ]
            // ],
            // [
            //     'ref' => self::ADULTS_4_REFERENCE,
            //     'category_ref' => CategoryFixtures::ADULTS_REFERENCE,
            //     'title' => [
            //         'fr' => 'Niveau 4',
            //         'en' => 'Level 4',
            //     ],
            //     'description' => [
            //         'fr' => 'Je roule régulièrement sur des pistes de VTT de descente, je sais évaluer le danger. Je peux descendre les pistes rouges',
            //         'en' => '',
            //     ]
            // ],
            // [
            //     'ref' => self::ADULTS_5_REFERENCE,
            //     'category_ref' => CategoryFixtures::ADULTS_REFERENCE,
            //     'title' => [
            //         'fr' => 'Niveau 5',
            //         'en' => 'Level 5',
            //     ],
            //     'description' => [
            //         'fr' => 'Je suis un descendeur VTT. Je maîtrise les techniques de descente, de freinage et de sauts à vive allure sur des pistes noires',
            //         'en' => '',
            //     ]
            // ],
        ];

        foreach ($fixtures as $fixture) {
            $course = new Course();
            $course->setSlug($fixture['slug']);
            $course->setMeetingPointLongitude($fixture['meetingPointLongitude']);
            $course->setMeetingPointLatitude($fixture['meetingPointLatitude']);
            foreach ($fixture['categories'] as $category) {
                $course->addCategory($this->getReference($category));
            }

            $translations = [
                'title',
                'description',
                'meetingPoint',
                'target',
                'schedule',
                'cost',
                'texts', 
                'points',
            ];
            foreach ($translations as $key) {
                $method = 'set' . ucfirst($key);
                $translation = new Translation();
                $contentFr = $fixture[$key]['fr'];
                $contentEn = $fixture[$key]['en'];
                $translation->setFr(is_array($contentFr) ? json_encode($contentFr) : $contentFr);
                $translation->setEn(is_array($contentEn) ? json_encode($contentEn) : $contentEn);
                $course->$method($translation);
            }

            $manager->persist($course);

            $this->addReference($fixture['ref'], $course);
        }

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            CategoryFixtures::class,
        ];
    }
}
