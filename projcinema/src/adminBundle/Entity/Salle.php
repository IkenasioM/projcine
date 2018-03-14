<?php

namespace adminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Salle
 *
 * @ORM\Table(name="salle")
 * @ORM\Entity(repositoryClass="adminBundle\Repository\SalleRepository")
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
     * @ORM\ManyToOne(targetEntity="AdminBundle\Entity\Cinema")
     * @ORM\JoinColumn(nullable=false)
     */
    private $cinema;

    /**
     * @return int
     */
    public function getCapacite()
    {
        return $this->capacite;
    }

    /**
     * @param int $capacite
     */
    public function setCapacite($capacite)
    {
        $this->capacite = $capacite;
    }

    /**
     * @var int
     *
     * @ORM\Column(name="capacite", type="integer")
     */
    private $capacite;


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
     * Set cinema
     *
     * @param \AdminBundle\Entity\Cinema $cinema
     * @return Salle
     */
    public function setCinema(\AdminBundle\Entity\Cinema $cinema) {
        $this->cinema = $cinema;
        return $this;
    }

    /**
     * Get cinema
     *
     * @return \AdminBundle\Entity\Cinema
     */

    public function getCinema()
    {
        return $this->cinema;
    }
}

