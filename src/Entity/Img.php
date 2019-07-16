<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass="App\Repository\FigureRepository")
 */
class Img
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     * @Assert\Length(
     *      min = 6,
     *      max = 255,
     *      minMessage = "Votre fichier doit contenir au minimum {{ limit }}charactère",
     *      maxMessage = "Votre fichier doit contenir au maximum {{ limit }} charactère"
     * )
     */
    private $nameImg;

    /**
     * @ORM\ManyToOne(targetEntity="Img", inversedBy="imgSecondary" )
     * @ORM\JoinColumn(nullable=false)
     * @ORM\OrderBy({"order" = "DESC", "id" = "DESC"})
     */
    private $figure;

    public function __construct()
    {
        $this->nameImg = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameImg(): ?string
    {
        return $this->nameImg;
    }

    public function setNameImg(string $nameImg): self
    {
        $this->nameImg = $nameImg;

        return $this;
    }

    public function getFigure(): ?Figure
    {
        return $this->figure;
    }

    public function setFigure(?Figure $figure): self
    {
        $this->figure = $figure;

        return $this;
    }
}
