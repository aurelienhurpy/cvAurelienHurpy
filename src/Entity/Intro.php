<?php

namespace App\Entity;

use App\Repository\IntroRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=IntroRepository::class)
 */
class Intro
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $bio;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $age;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $height;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $address;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $position;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $myproject;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $myskills;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $mytraining;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tel;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $slug;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $myprojectdetail;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $myskillsdetail;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $mytrainingdetail;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $myprojectlink;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $dateprojet;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getBio(): ?string
    {
        return $this->bio;
    }

    public function setBio(string $bio): self
    {
        $this->bio = $bio;

        return $this;
    }

    public function getAge(): ?string
    {
        return $this->age;
    }

    public function setAge(?string $age): self
    {
        $this->age = $age;

        return $this;
    }

    public function getHeight(): ?string
    {
        return $this->height;
    }

    public function setHeight(?string $height): self
    {
        $this->height = $height;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getPosition(): ?string
    {
        return $this->position;
    }

    public function setPosition(string $position): self
    {
        $this->position = $position;

        return $this;
    }

    public function getMyProject(): ?string
    {
        return $this->myproject;
    }

    public function setMyProject(?string $myproject): self
    {
        $this->myproject = $myproject;

        return $this;
    }

    public function getMySkills(): ?string
    {
        return $this->myskills;
    }

    public function setMySkills(?string $myskills): self
    {
        $this->myskills = $myskills;

        return $this;
    }

    public function getMyTraining(): ?string
    {
        return $this->mytraining;
    }

    public function setMyTraining(?string $mytraining): self
    {
        $this->mytraining = $mytraining;

        return $this;
    }

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(?string $tel): self
    {
        $this->tel = $tel;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(?string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    public function getMyProjectDetail(): ?string
    {
        return $this->myprojectdetail;
    }

    public function setMyProjectDetail(?string $myprojectdetail): self
    {
        $this->myprojectdetail = $myprojectdetail;

        return $this;
    }

    public function getMySkillsDetail(): ?string
    {
        return $this->myskillsdetail;
    }

    public function setMySkillsDetail(?string $myskillsdetail): self
    {
        $this->myskillsdetail = $myskills_detail;

        return $this;
    }

    public function getMyTrainingDetail(): ?string
    {
        return $this->mytrainingdetail;
    }

    public function setMyTrainingDetail(?string $mytrainingdetail): self
    {
        $this->mytrainingdetail = $mytrainingdetail;

        return $this;
    }

    public function getMyProjectLink(): ?string
    {
        return $this->myprojectlink;
    }

    public function setMyProjectLink(?string $myprojectlink): self
    {
        $this->myprojectlink = $myprojectlink;

        return $this;
    }

    public function getDateprojet(): ?string
    {
        return $this->dateprojet;
    }

    public function setDateprojet(?string $dateprojet): self
    {
        $this->dateprojet = $dateprojet;

        return $this;
    }
}
