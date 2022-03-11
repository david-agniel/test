<?php

namespace App\Entity;

use App\Repository\ImageRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ImageRepository::class)
 */
class Image
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $date_image;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $explanation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $hdurl;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $media_type;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $service_version;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $url;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateImage(): ?\DateTimeInterface
    {
        return $this->date_image;
    }

    public function setDateImage(\DateTimeInterface $date_image): self
    {
        $this->date_image = $date_image;

        return $this;
    }

    public function getExplanation(): ?string
    {
        return $this->explanation;
    }

    public function setExplanation(string $explanation): self
    {
        $this->explanation = $explanation;

        return $this;
    }

    public function getHdurl(): ?string
    {
        return $this->hdurl;
    }

    public function setHdurl(string $hdurl): self
    {
        $this->hdurl = $hdurl;

        return $this;
    }

    public function getMediaType(): ?string
    {
        return $this->media_type;
    }

    public function setMediaType(string $media_type): self
    {
        $this->media_type = $media_type;

        return $this;
    }

    public function getServiceVersion(): ?string
    {
        return $this->service_version;
    }

    public function setServiceVersion(string $service_version): self
    {
        $this->service_version = $service_version;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }
}
