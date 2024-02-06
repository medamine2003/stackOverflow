<?php

namespace App\Entity;

use App\Repository\MemberRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MemberRepository::class)]
class Member
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $Registration_date = null;

    #[ORM\Column(length: 255)]
    private ?string $biography = null;

    #[ORM\Column(length: 255)]
    private ?string $reputation = null;

    #[ORM\Column]
    private ?bool $validated = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRegistrationDate(): ?\DateTimeInterface
    {
        return $this->Registration_date;
    }

    public function setRegistrationDate(\DateTimeInterface $Registration_date): static
    {
        $this->Registration_date = $Registration_date;

        return $this;
    }

    public function getBiography(): ?string
    {
        return $this->biography;
    }

    public function setBiography(string $biography): static
    {
        $this->biography = $biography;

        return $this;
    }

    public function getReputation(): ?string
    {
        return $this->reputation;
    }

    public function setReputation(string $reputation): static
    {
        $this->reputation = $reputation;

        return $this;
    }

    public function isValidated(): ?bool
    {
        return $this->validated;
    }

    public function setValidated(bool $validated): static
    {
        $this->validated = $validated;

        return $this;
    }
}
