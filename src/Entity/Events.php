<?php

namespace App\Entity;

use App\Repository\EventsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EventsRepository::class)
 */
class Events
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $date_time_start;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $date_time_end;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $describe;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $status;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getDateTimeStart(): ?string
    {
        return $this->date_time_start;
    }

    public function setDateTimeStart(string $date_time_start): self
    {
        $this->date_time_start = $date_time_start;

        return $this;
    }

    public function getDateTimeEnd(): ?string
    {
        return $this->date_time_end;
    }

    public function setDateTimeEnd(string $date_time_end): self
    {
        $this->date_time_end = $date_time_end;

        return $this;
    }

    public function getDescribe(): ?string
    {
        return $this->describe;
    }

    public function setDescribe(?string $describe): self
    {
        $this->describe = $describe;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }
}
