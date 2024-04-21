<?php

namespace App\Entity;

use App\Repository\GearRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=GearRepository::class)
 */
class Gear
{
    use TranslatableTrait;

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id = null;

    /**
     * @ORM\OneToOne(targetEntity=Translation::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private ?Translation $translation = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTranslation(): ?Translation
    {
        return $this->translation;
    }

    public function setTranslation(Translation $translation): Gear
    {
        $this->translation = $translation;

        return $this;
    }
}
