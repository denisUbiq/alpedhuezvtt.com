<?php

namespace App\Entity;

use App\Repository\CourseRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CourseRepository::class)
 */
class Course
{
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
    private ?Translation $title = null;

    /**
     * @ORM\OneToOne(targetEntity=Translation::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private ?Translation $description = null;

    /**
     * @ORM\ManyToMany(targetEntity=Category::class, inversedBy="courses")
     */
    private Collection $categories;

    /**
     * @ORM\OneToOne(targetEntity=Translation::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private ?Translation $meetingPoint = null;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private ?float $meetingPointLongitude = null;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private ?float $meetingPointLatitude = null;

    /**
     * @ORM\OneToOne(targetEntity=Translation::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private ?Translation $target = null;

    /**
     * @ORM\OneToOne(targetEntity=Translation::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private ?Translation $schedule = null;

    /**
     * @ORM\OneToOne(targetEntity=Translation::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private ?Translation $cost = null;

    /**
     * @ORM\OneToOne(targetEntity=Translation::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private ?Translation $texts = null;

    /**
     * @ORM\OneToOne(targetEntity=Translation::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private ?Translation $points = null;

    public function __construct()
    {
        $this->categories = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): Course
    {
        $this->slug = $slug;

        return $this;
    }

    public function getTitle(): ?Translation
    {
        return $this->title;
    }

    public function setTitle(Translation $title): Course
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?Translation
    {
        return $this->description;
    }

    public function setDescription(Translation $description): Course
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Collection<int, Category>
     */
    public function getCategories(): Collection
    {
        return $this->categories;
    }

    public function addCategory(Category $category): Course
    {
        if (!$this->categories->contains($category)) {
            $this->categories->add($category);
        }

        return $this;
    }

    public function removeCategory(Category $category): Course
    {
        $this->categories->removeElement($category);

        return $this;
    }

    public function getMeetingPoint(): ?Translation
    {
        return $this->meetingPoint;
    }

    public function setMeetingPoint(Translation $meetingPoint): Course
    {
        $this->meetingPoint = $meetingPoint;

        return $this;
    }

    public function getMeetingPointLongitude(): ?float
    {
        return $this->meetingPointLongitude;
    }

    public function setMeetingPointLongitude(float $meetingPointLongitude): Course
    {
        $this->meetingPointLongitude = $meetingPointLongitude;

        return $this;
    }

    public function getMeetingPointLatitude(): ?float
    {
        return $this->meetingPointLatitude;
    }

    public function setMeetingPointLatitude(float $meetingPointLatitude): Course
    {
        $this->meetingPointLatitude = $meetingPointLatitude;

        return $this;
    }

    public function getTarget(): ?Translation
    {
        return $this->target;
    }

    public function setTarget(Translation $target): Course
    {
        $this->target = $target;

        return $this;
    }

    public function getSchedule(): ?Translation
    {
        return $this->schedule;
    }

    public function setSchedule(Translation $schedule): Course
    {
        $this->schedule = $schedule;

        return $this;
    }

    public function getCost(): ?Translation
    {
        return $this->cost;
    }

    public function setCost(Translation $cost): Course
    {
        $this->cost = $cost;

        return $this;
    }

    public function getTexts(): ?Translation
    {
        return $this->texts;
    }

    public function setTexts(Translation $texts): Course
    {
        $this->texts = $texts;

        return $this;
    }


    public function getPoints(): ?Translation
    {
        return $this->points;
    }

    public function setPoints(?Translation $points): Course
    {
        $this->points = $points;

        return $this;
    }
}
