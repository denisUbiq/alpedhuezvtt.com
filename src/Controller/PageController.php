<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Course;
use App\Entity\Instructor;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route({
 *     "fr": "/",
 *     "en": "/en"
 * })
 */
class PageController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $categories = $entityManager->getRepository(Category::class)->findAll();
        $courses = $entityManager->getRepository(Course::class)->findAll();

        return $this->render('pages/home/index.html.twig', [
            'categories' => $categories,
            'courses' => $courses,
        ]);
    }

    /**
     * @Route({
     *     "fr": "/notre-ecole",
     *     "en": "/our-school"
     * }, name="our_school")
     */
    public function instructors(EntityManagerInterface $entityManager): Response
    {
        $instructors = $entityManager->getRepository(Instructor::class)->findAll();

        return $this->render('pages/team.html.twig', [
            'instructors' => $instructors
        ]);
    }
}
