<?php

/**
 * Created by PhpStorm.
 * User: local192
 * Date: 12/12/2017
 * Time: 16:50
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @ORM\Entity()
 * @ORM\Table(name="cinema", uniqueConstraints={@ORM\UniqueConstraint(name="cinema_unique", columns={"nom", "cp"})})
 */
class Cinema
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    /**
     * @ORM\Column(type="string")
     */
    protected $nom;
    /**
     * @ORM\Column(type="string")
     */
    protected $adresse;

    /**
     * @return Salles[]
     */
    public function getSalle()
    {
        return $this->salle;
    }

    /**
     * @param Salles[] $salle
     */
    public function setSalle($salle)
    {
        $this->salle = $salle;
    }

    /**
     * @var boolean
     *
     * @ORM\Column(name="accessibilite", type="boolean")
     */
    private $accessibilite;

    /**
     * @return bool
     */
    public function isAccessibilite()
    {
        return $this->accessibilite;
    }

    /**
     * @param bool $accessibilite
     */
    public function setAccessibilite($accessibilite)
    {
        $this->accessibilite = $accessibilite;
    }

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Salle", mappedBy="cinema")
     * @var Salles[]
     */
    protected $salle;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

        
    public function __construct()
    {
        $this->salles = new ArrayCollection();
     }   

    /**
    * @return Salle[] 
    */
    public function getSalles() {
        return $this->salle;
    }

    /**
    * @param Salle[] $salles
    */
    public function setSalles($salles) {
        return $this->salle = $salles;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }
}