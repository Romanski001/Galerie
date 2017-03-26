<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Textile
 *
 * @ORM\Table(name="textile")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TextileRepository")
 */
class Textile
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
     * @return Textile
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
     * @return Textile
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
     * @return Textile
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
     * @return Textile
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
}

