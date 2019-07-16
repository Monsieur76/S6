<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass="App\Repository\FigureRepository")
 * @UniqueEntity("nameFigure",message="Ce nom est déjà utilisé")
 */
class Figure
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @ORM\OrderBy({"order" = "ASC", "id" = "ASC"})
     */
    private $id;

    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(
     *      min = 2,
     *      max = 50,
     *      minMessage = "Votre nom doit contenir au minimum {{ limit }}charactère",
     *      maxMessage = "Votre nom doit contenir au maximum {{ limit }} charactère"
     * )
     */
    private $nameFigure;

    /**
     * @ORM\Column(type="datetime")
     */
    private $creatDate;

    /**
     * @ORM\Column(type="text")
     * @Assert\Length(
     *      min = 2,
     *      max = 50,
     *      minMessage = "Le champ reenseignement doit contenir au minimum {{ limit }}charactère",
     *      maxMessage = "Le champ reenseignement doit contenir au maximum {{ limit }} charactère"
     * )
     */
    private $content;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Comment", mappedBy="Figure", orphanRemoval=true)
     */
    private $comments;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Img", mappedBy="Figure", orphanRemoval=true)
     *
     */
    private $imgSecondary;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(
     *      min = 6,
     *      max = 255,
     *      minMessage = "Votre fichier doit contenir au minimum {{ limit }}charactère",
     *      maxMessage = "Votre fichier doit contenir au maximum {{ limit }} charactère"
     * )
     */

    private $imgFigure;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Video", mappedBy="Figure",orphanRemoval=true)
     */
    private $videos;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\GroupNumberFigure", inversedBy="figures")
     */
    private $groupNumber;

    public function __construct()
    {
        $this->comments = new ArrayCollection();
        $this->imgSecondary = new ArrayCollection();
        $this->creatDate = new \DateTime();
        $this->videos = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameFigure(): ?string
    {
        return $this->nameFigure;
    }

    public function setNameFigure(string $nameFigure): self
    {
        $this->nameFigure = $nameFigure;

        return $this;
    }

    public function getCreatDate(): ?\DateTimeInterface
    {
        return $this->creatDate;
    }

    public function toString(): ?string
    {
        return $this->getCreatDate() ;
    }

    public function setCreatDate(\DateTimeInterface $creatDate): self
    {
        $this->creatDate = $creatDate;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    /**
     * @return Collection|Comment[]
     */
    public function getComments(): Collection
    {
        return $this->comments;
    }

    public function addComment(Comment $comment): self
    {
        if (!$this->comments->contains($comment)) {
            $this->comments[] = $comment;
            $comment->setFigure($this);
        }

        return $this;
    }

    public function removeComment(Comment $comment): self
    {
        if ($this->comments->contains($comment)) {
            $this->comments->removeElement($comment);
            // set the owning side to null (unless already changed)
            if ($comment->getFigure() === $this) {
                $comment->setFigure(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Img[]
     */
    public function getImgSecondary(): Collection
    {
        return $this->imgSecondary;
    }

    public function addImg(Figure $img): self
    {
        if (!$this->imgSecondary->contains($img)) {
            $this->imgSecondary[] = $img;
            $img->setFigure($this);
        }

        return $this;
    }

    public function removeImg(Figure $img): self
    {
        if ($this->imgSecondary->contains($img)) {
            $this->imgSecondary->removeElement($img);
            // set the owning side to null (unless already changed)
            if ($img->getFigure() === $this) {
                $img->setFigure(null);
            }
        }

        return $this;
    }

    public function getImgFigure(): ?string
    {
        return $this->imgFigure;
    }

    public function setFigure(string $imgFigure): self
    {
        $this->imgFigure = $imgFigure;

        return $this;
    }

    /**
     * @return Collection|Video[]
     */
    public function getVideos(): Collection
    {
        return $this->videos;
    }

    public function addVideo(Video $video): self
    {
        if (!$this->videos->contains($video)) {
            $this->videos[] = $video;
            $video->setFigure($this);
        }

        return $this;
    }

    public function removeVideo(Video $video): self
    {
        if ($this->videos->contains($video)) {
            $this->videos->removeElement($video);
            // set the owning side to null (unless already changed)
            if ($video->getFigure() === $this) {
                $video->setFigure(null);
            }
        }

        return $this;
    }

    public function getGroupNumber(): ?GroupNumberFigure
    {
        return $this->groupNumber;
    }

    public function setGroupNumber(?GroupNumberFigure $groupNumber): self
    {
        $this->groupNumber = $groupNumber;

        return $this;
    }
}
