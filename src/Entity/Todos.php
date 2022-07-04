<?php

namespace App\Entity;

use App\Repository\TodosRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TodosRepository::class)]
class Todos
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $name;

    #[ORM\Column(type: 'date', nullable: true)]
    private $date;

    #[ORM\Column(type: 'date')]
    private $completiondate;

    #[ORM\Column(type: 'string', length: 255)]
    private $status;



    #[ORM\Column(type: 'integer')]
    private $UserIdentity;

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

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getCompletiondate(): ?\DateTimeInterface
    {
        return $this->completiondate;
    }

    public function setCompletiondate(\DateTimeInterface $completiondate): self
    {
        $this->completiondate = $completiondate;

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



    public function getUserIdentity(): ?int
    {
        return $this->UserIdentity;
    }

    public function setUserIdentity(int $UserIdentity): self
    {
        $this->UserIdentity = $UserIdentity;

        return $this;
    }
}
