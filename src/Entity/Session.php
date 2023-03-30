<?php

namespace App\Entity;

use App\Repository\SessionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SessionRepository::class)]
class Session
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'string', length: 128)]
    private ?string $sessId = null;

    #[ORM\Column(type: Types::BINARY)]
    private $sessData = null;

    #[ORM\Column]
    private ?int $sessLifetime = null;

    #[ORM\Column]
    private ?int $sessTime = null;

    public function getSessId(): ?int
    {
        return $this->sessId;
    }

    public function getSessData()
    {
        return $this->sessData;
    }

    public function setSessData($sessData): self
    {
        $this->sessData = $sessData;

        return $this;
    }

    public function getSessLifetime(): ?int
    {
        return $this->sessLifetime;
    }

    public function setSessLifetime(int $sessLifetime): self
    {
        $this->sessLifetime = $sessLifetime;

        return $this;
    }

    public function getSessTime(): ?int
    {
        return $this->sessTime;
    }

    public function setSessTime(int $sessTime): self
    {
        $this->sessTime = $sessTime;

        return $this;
    }
}
