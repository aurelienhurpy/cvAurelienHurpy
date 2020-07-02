<?php

namespace App\Entity;

use App\Repository\UkintroRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UkintroRepository::class)
 */
class Ukintro
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
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
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $address;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
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
    private $dateprojet;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $mytrainingdetail;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $myprojectdetail;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tel;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getBio(): ?string
    {
        return $this->bio;
    }

    public function setBio(?string $bio): self
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

    public function setAddress(?string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getPosition(): ?string
    {
        return $this->position;
    }

    public function setPosition(?string $position): self
    {
        $this->position = $position;

        return $this;
    }

    public function getMyproject(): ?string
    {
        return $this->myproject;
    }

    public function setMyproject(?string $myproject): self
    {
        $this->myproject = $myproject;

        return $this;
    }

    public function getMyskills(): ?string
    {
        return $this->myskills;
    }

    public function setMyskills(?string $myskills): self
    {
        $this->myskills = $myskills;

        return $this;
    }

    public function getMytraining(): ?string
    {
        return $this->mytraining;
    }

    public function setMytraining(?string $mytraining): self
    {
        $this->mytraining = $mytraining;

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

    public function getMytrainingdetail(): ?string
    {
        return $this->mytrainingdetail;
    }

    public function setMytrainingdetail(?string $mytrainingdetail): self
    {
        $this->mytrainingdetail = $mytrainingdetail;

        return $this;
    }

    public function getMyprojectdetail(): ?string
    {
        return $this->myprojectdetail;
    }

    public function setMyprojectdetail(?string $myprojectdetail): self
    {
        $this->myprojectdetail = $myprojectdetail;

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
}
