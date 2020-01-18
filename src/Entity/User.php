<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Security\Core\User\UserInterface;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation\Uploadable;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @Vich\Uploadable()
 */
class User implements UserInterface,\Serializable
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $filename;

    /**
     * @Vich\UploadableField(mapping="user_image", fileNameProperty="filename")
     * @Assert\Image(mimeTypes = "image/jpeg")
     * @var File|null
     */
    private $imageFile;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $updated_at;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Championnats", mappedBy="users")
     */
    private $championnats;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Matchs", mappedBy="Joueurs1")
     */
    private $matchs;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $victory;


    public function __construct(){
        $this->updated_at = new \DateTime();
        $this->championnats = new ArrayCollection();
        $this->matchs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getFilename(): ?string
    {
        return $this->filename;
    }

    public function setFilename(?string $filename): self
    {
        $this->filename = $filename;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(?\DateTimeInterface $updated_at): self
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    public function eraseCredentials(){}

    public function getSalt(){}
    
    public function getRoles(){
        return ['ROLE_ADMIN'];
    }

    public function serialize(){
        return serialize([
            $this->id,
            $this->username,
            $this->password
        ]);
    }

    public function unserialize($serialized){
        list(
            $this->id,
            $this->username,
            $this->password
        ) = unserialize($serialized, ['allowed_classes' => false ] );
    }

    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }

    public function setImageFile($imageFile): self
    {
        $this->imageFile = $imageFile;
        if($this->imageFile instanceof UploadedFile)
        {
            $this->updated_at = new \DateTime('now');
        }

        return $this;
    }

    /**
     * @return Collection|Championnats[]
     */
    public function getChampionnats(): Collection
    {
        return $this->championnats;
    }

    public function addChampionnat(Championnats $championnat): self
    {
        if (!$this->championnats->contains($championnat)) {
            $this->championnats[] = $championnat;
            $championnat->addUser($this);
        }

        return $this;
    }

    public function removeChampionnat(Championnats $championnat): self
    {
        if ($this->championnats->contains($championnat)) {
            $this->championnats->removeElement($championnat);
            $championnat->removeUser($this);
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
            $match->setJoueurs1($this);
        }

        return $this;
    }

    public function removeMatch(Matchs $match): self
    {
        if ($this->matchs->contains($match)) {
            $this->matchs->removeElement($match);
            // set the owning side to null (unless already changed)
            if ($match->getJoueurs1() === $this) {
                $match->setJoueurs1(null);
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
        if ($this !== $classement->getUser()) {
            $classement->setUser($this);
        }

        return $this;
    }

    public function getVictory(): ?int
    {
        return $this->victory;
    }

    public function setVictory(?int $victory): self
    {
        $this->victory = $victory;

        return $this;
    }
}
