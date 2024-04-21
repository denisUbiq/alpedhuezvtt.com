<?php

namespace App\Entity;

use App\Repository\CategoryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CategoryRepository::class)
 */
class Category
{
    use TranslatableTrait;

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id = null;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private ?string $slug = null;

    /**
     * @ORM\OneToOne(targetEntity=Translation::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private ?Translation $name = null;

    /**
     * @ORM\ManyToMany(targetEntity=Course::class, mappedBy="categories")
     */
    private Collection $courses;

    public function __construct()
    {
        $this->courses = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): Category
    {
        $this->slug = $slug;

        return $this;
    }

    public function getName(): ?Translation
    {
        return $this->name;
    }

    public function setName(Translation $name): Category
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection<int, Course>
     */
    public function getCourses(): Collection
    {
        return $this->courses;
    }

    public function addCourse(Course $course): Category
    {
        if (!$this->courses->contains($course)) {
            $this->courses->add($course);
            $course->addCategory($this);
        }

        return $this;
    }

    public function removeCourse(Course $course): Category
    {
        if ($this->courses->removeElement($course)) {
            $course->removeCategory($this);
        }

        return $this;
    }
}
