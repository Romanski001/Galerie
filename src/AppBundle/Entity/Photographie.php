<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\Oeuvre;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Photographie
 *
 * @ORM\Table(name="photographie")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PhotographieRepository")
 */
class Photographie
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
     * @ORM\Column(name="Nom", type="string", length=255, unique=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="Détails", type="text", nullable=true)
     */
    private $détails;

    /**
     * @var string
     *
     * @ORM\Column(name="Dimensions", type="string", length=255, nullable=true)
     */
    private $dimensions;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date", type="date", nullable=true)
     */
    private $date;

    /**
       *@var ArrayCollection
       *
       *@ORM\OneToMany(targetEntity="Oeuvre", mappedBy="photographie")
       */
    private $oeuvres;

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
     * Set nom
     *
     * @param string $nom
     *
     * @return Photographie
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set détails
     *
     * @param string $détails
     *
     * @return Photographie
     */
    public function setDétails($détails)
    {
        $this->détails = $détails;

        return $this;
    }

    /**
     * Get détails
     *
     * @return string
     */
    public function getDétails()
    {
        return $this->détails;
    }

    /**
     * Set dimensions
     *
     * @param string $dimensions
     *
     * @return Photographie
     */
    public function setDimensions($dimensions)
    {
        $this->dimensions = $dimensions;

        return $this;
    }

    /**
     * Get dimensions
     *
     * @return string
     */
    public function getDimensions()
    {
        return $this->dimensions;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Photographie
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
    * add oeuvre
    *
    * @param Oeuvre $Oeuvre
    *
    * @return Photographie
    */
    public function addOeuvre(Oeuvre $oeuvre)
    {
        $this->oeuvres[] = $oeuvre

        return $this;
    }

    /**
    * remove oeuvre
    *
    * @param Oeuvre $Oeuvre
    *
    * @return Photographie
    */
    public function removeOeuvre(Oeuvre $oeuvre)
    {
        $this->oeuvres->removeElement($oeuvre)

        return $this;
    }

    /**
     * Set oeuvres
     *
     * @param ArrayCollection $oeuvres
     *
     * @return Photographie
     */
     public function setOeuvres(ArrayCollection $oeuvres)
     {
         $this->oeuvres = $oeuvres;
     }

     /**
     * Get oeuvres
     *
     * @return ArrayCollection
     */
     public function getOeuvres()
     {
         return $this->$oeuvres;
     }
}
