<?php

namespace App\Entity;

use App\Repository\UkprojectRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UkprojectRepository::class)
 */
class Ukproject
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
    private $title;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $slug;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $paragraph1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $paragraph2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $paragraph3;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $paragraph4;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $paragraph5;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $paragraph;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $paragraph6;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $paragraph7;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $paragraph8;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $yes;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

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

    public function getParagraph1(): ?string
    {
        return $this->paragraph1;
    }

    public function setParagraph1(?string $paragraph1): self
    {
        $this->paragraph1 = $paragraph1;

        return $this;
    }

    public function getParagraph2(): ?string
    {
        return $this->paragraph2;
    }

    public function setParagraph2(?string $paragraph2): self
    {
        $this->paragraph2 = $paragraph2;

        return $this;
    }

    public function getParagraph3(): ?string
    {
        return $this->paragraph3;
    }

    public function setParagraph3(?string $paragraph3): self
    {
        $this->paragraph3 = $paragraph3;

        return $this;
    }

    public function getParagraph4(): ?string
    {
        return $this->paragraph4;
    }

    public function setParagraph4(?string $paragraph4): self
    {
        $this->paragraph4 = $paragraph4;

        return $this;
    }

    public function getParagraph5(): ?string
    {
        return $this->paragraph5;
    }

    public function setParagraph5(?string $paragraph5): self
    {
        $this->paragraph5 = $paragraph5;

        return $this;
    }

    public function getParagraph(): ?string
    {
        return $this->paragraph;
    }

    public function setParagraph(?string $paragraph): self
    {
        $this->paragraph = $paragraph;

        return $this;
    }

    public function getParagraph6(): ?string
    {
        return $this->paragraph6;
    }

    public function setParagraph6(?string $paragraph6): self
    {
        $this->paragraph6 = $paragraph6;

        return $this;
    }

    public function getParagraph7(): ?string
    {
        return $this->paragraph7;
    }

    public function setParagraph7(?string $paragraph7): self
    {
        $this->paragraph7 = $paragraph7;

        return $this;
    }

    public function getParagraph8(): ?string
    {
        return $this->paragraph8;
    }

    public function setParagraph8(string $paragraph8): self
    {
        $this->paragraph8 = $paragraph8;

        return $this;
    }

    public function getYes(): ?string
    {
        return $this->yes;
    }

    public function setYes(?string $yes): self
    {
        $this->yes = $yes;

        return $this;
    }
}
