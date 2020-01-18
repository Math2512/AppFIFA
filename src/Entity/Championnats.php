<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ChampionnatsRepository")
 */
class Championnats
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbr_jours;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\User", inversedBy="championnats")
     */
    private $users;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Matchs", mappedBy="championnat")
     */
    private $matchs;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Classement", mappedBy="championnat", cascade={"persist", "remove"})
     */
    private $classement;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $close;
    

    public function __construct()
    {
        $this->users = new ArrayCollection();
        $this->matchs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNbrJours(): ?int
    {
        return $this->nbr_jours;
    }

    public function setNbrJours(int $nbr_jours): self
    {
        $this->nbr_jours = $nbr_jours;

        return $this;
    }

    /**
     * @return Collection|User[]
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users[] = $user;
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->users->contains($user)) {
            $this->users->removeElement($user);
        }

        return $this;
    }


    
    /**
     * @return Collection|Matchs[]
     */
    public function getMatchs(): Collection
    {
        return $this->matchs;
    }

    public function addMatch(Matchs $match): self
    {
        if (!$this->matchs->contains($match)) {
            $this->matchs[] = $match;
            $match->setChampionnat($this);
        }

        return $this;
    }

    public function removeMatch(Matchs $match): self
    {
        if ($this->matchs->contains($match)) {
            $this->matchs->removeElement($match);
            // set the owning side to null (unless already changed)
            if ($match->getChampionnat() === $this) {
                $match->setChampionnat(null);
            }
        }

        return $this;
    }

    public function getClassement(): ?Classement
    {
        return $this->classement;
    }

    public function setClassement(Classement $classement): self
    {
        $this->classement = $classement;

        // set the owning side of the relation if necessary
        if ($this !== $classement->getChampionnat()) {
            $classement->setChampionnat($this);
        }

        return $this;
    }

    public function getClose(): ?int
    {
        return $this->close;
    }

    public function setClose(?int $close): self
    {
        $this->close = $close;

        return $this;
    }

  
}
