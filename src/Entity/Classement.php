<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ClassementRepository")
 */
class Classement
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Championnats", inversedBy="classement", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $championnat;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="classement", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\Column(type="integer")
     */
    private $mj;

    /**
     * @ORM\Column(type="integer")
     */
    private $g;

    /**
     * @ORM\Column(type="integer")
     */
    private $n;

    /**
     * @ORM\Column(type="integer")
     */
    private $bp;

    /**
     * @ORM\Column(type="integer")
     */
    private $bc;

    /**
     * @ORM\Column(type="integer")
     */
    private $db;

    /**
     * @ORM\Column(type="integer")
     */
    private $pts;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $d;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getChampionnat(): ?Championnats
    {
        return $this->championnat;
    }

    public function setChampionnat(Championnats $championnat): self
    {
        $this->championnat = $championnat;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getMj(): ?int
    {
        return $this->mj;
    }

    public function setMj(int $mj): self
    {
        $this->mj = $mj;

        return $this;
    }

    public function getG(): ?int
    {
        return $this->g;
    }

    public function setG(int $g): self
    {
        $this->g = $g;

        return $this;
    }

    public function getN(): ?int
    {
        return $this->n;
    }

    public function setN(int $n): self
    {
        $this->n = $n;

        return $this;
    }

    public function getBp(): ?int
    {
        return $this->bp;
    }

    public function setBp(int $bp): self
    {
        $this->bp = $bp;

        return $this;
    }

    public function getBc(): ?int
    {
        return $this->bc;
    }

    public function setBc(int $bc): self
    {
        $this->bc = $bc;

        return $this;
    }

    public function getDb(): ?int
    {
        return $this->db;
    }

    public function setDb(int $db): self
    {
        $this->db = $db;

        return $this;
    }

    public function getPts(): ?int
    {
        return $this->pts;
    }

    public function setPts(int $pts): self
    {
        $this->pts = $pts;

        return $this;
    }

    public function getD(): ?int
    {
        return $this->d;
    }

    public function setD(?int $d): self
    {
        $this->d = $d;

        return $this;
    }
}
