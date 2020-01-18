<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MatchsRepository")
 */
class Matchs
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="matchs")
     */
    private $Joueurs1;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $resultat_j1;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="matchs")
     */
    private $Joueurs2;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $resultat_j2;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Championnats", inversedBy="matchs")
     */
    private $championnat;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $journee;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getJoueurs1(): ?User
    {
        return $this->Joueurs1;
    }

    public function setJoueurs1(?User $Joueurs1): self
    {
        $this->Joueurs1 = $Joueurs1;

        return $this;
    }

    public function getResultatJ1(): ?int
    {
        return $this->resultat_j1;
    }

    public function setResultatJ1(?int $resultat_j1): self
    {
        $this->resultat_j1 = $resultat_j1;

        return $this;
    }

    public function getJoueurs2(): ?User
    {
        return $this->Joueurs2;
    }

    public function setJoueurs2(?User $Joueurs2): self
    {
        $this->Joueurs2 = $Joueurs2;

        return $this;
    }

    public function getResultatJ2(): ?int
    {
        return $this->resultat_j2;
    }

    public function setResultatJ2(?int $resultat_j2): self
    {
        $this->resultat_j2 = $resultat_j2;

        return $this;
    }

    public function getChampionnat(): ?Championnats
    {
        return $this->championnat;
    }

    public function setChampionnat(?Championnats $championnat): self
    {
        $this->championnat = $championnat;

        return $this;
    }

    public function getJournee(): ?int
    {
        return $this->journee;
    }

    public function setJournee(?int $journee): self
    {
        $this->journee = $journee;

        return $this;
    }
}
