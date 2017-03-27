<?php

namespace AppBundle\Entity;

use AppBundle\Entity\Photographie;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Oeuvre
 *
 * @ORM\Table(name="oeuvre")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OeuvreRepository")
 */
class Oeuvre
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Type", type="string", length=255, unique=true)
     */
    private $type;

    /**
    * @var Importance
    * @ORM\ManyToOne(targetEntity="Photographie", inversedBy="Oeuvre")
    * @ORM\JoinColumn(name="nom_id" , referencedColumnName="id")
    */
    private $photographie;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Oeuvre
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set photographie
     *
     * @param Photographie $photographie
     *
     * @return Oeuvre
     */
     public function setPhotographie(Photographie $photographie)
     {
         $this->photographie = $photographie;

         return $this;
     }

     /**
     * Get Photographie
     *
     * @return Photographie
     */
     public function getPhotographie()
     {
         return $this->photographie;
     }
}
