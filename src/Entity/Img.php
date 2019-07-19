<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass="App\Repository\ImgRepository")
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
     * @ORM\ManyToOne(targetEntity="Figure", inversedBy="imgSecondary" )
     * @ORM\JoinColumn(name="figure_id", referencedColumnName="id",nullable=true)
     * @ORM\OrderBy({"order" = "DESC", "id" = "DESC"})
     */
    private $figures;

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

    public function getFigures(): ?Figure
    {
        return $this->figures;
    }

    public function setFigures(?Figure $figures): self
    {
        $this->figures = $figures;

        return $this;
    }
}
