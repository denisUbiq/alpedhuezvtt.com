<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Course;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route({
 *     "fr": "/nos-cours",
 *     "en": "/en/our-courses"
 * }, name="courses_")
 */
class CoursesController extends AbstractController
{
    /**
     * @Route("/{slug}", name="course")
     */
    public function course(Course $course): Response
    {
        return $this->render('pages/course.html.twig', [
            'course' => $course
        ]);
    }

    /**
     * @Route({
     *     "fr": "/categorie/{slug}",
     *     "en": "/category/{slug}"
     * }, name="category")
     */
    public function category(Category $category): Response
    {
        return $this->render('pages/category.html.twig', [
            'category' => $category
        ]);
    }
}
