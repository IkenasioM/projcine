<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Salle
 *
 * @ORM\Table(name="salle")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SalleRepository")
 */
class Salle
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
     * @ORM\Column(name="nomsalle", type="string", length=60)
     */
    private $nomsalle;

     /**
     * @var int
     *
     * @ORM\Column(name="capacite", type="integer")
     */
    private $capacite;


    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Cinema")
     * @ORM\JoinColumn(nullable=false)
     */
    private $cinema;



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
     * Set nomsalle
     *
     * @param string $nomsalle
     *
     * @return Salle
     */
    public function setNomsalle($nomsalle)
    {
        $this->nomsalle = $nomsalle;

        return $this;
    }

    /**
     * Get nomsalle
     *
     * @return string
     */
    public function getNomsalle()
    {
        return $this->nomsalle;
    }

    /**
     * Set capacite
     *
     * @param string $capacite
     *
     * @return capacite
     */
    public function setCapacite($capacite)
    {
        $this->capacite = $capacite;

        return $this;
    }

    /**
     * Get capacite
     *
     * @return string
     */
    public function getcapacite()
    {
        return $this->capacite;
    }


    /**
     * Set cinema
     *
     * @param \AppBundle\Entity\Cinema $cinema
     * @return Salle
     */
    public function setCinema(\AppBundle\Entity\Cinema $cinema) {
        $this->cinema = $cinema;
        return $this;
    }

    /**
     * Get cinema
     *
     * @return \AppBundle\Entity\Cinema
     */

    public function getCinema()
    {
        return $this->cinema;
    }
}

