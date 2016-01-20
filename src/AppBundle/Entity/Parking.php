<?php

namespace AppBundle\Entity;

/**
 * Parking
 */
class Parking
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $place;

    /**
     * @var int
     */
    private $placeLibre;

    /**
     * @var int
     */
    private $placePrise;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $adresse;

    /**
     * @var string
     */
    private $codePostal;

    /**
     * @var string
     */
    private $ville;

    /**
     * @var string
     */
    private $coordonnees;


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
     * @return Parking
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
     * Set place
     *
     * @param string $place
     *
     * @return Parking
     */
    public function setPlace($place)
    {
        $this->place = $place;

        return $this;
    }

    /**
     * Get place
     *
     * @return string
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Set placeLibre
     *
     * @param integer $placeLibre
     *
     * @return Parking
     */
    public function setPlaceLibre($placeLibre)
    {
        $this->placeLibre = $placeLibre;

        return $this;
    }

    /**
     * Get placeLibre
     *
     * @return int
     */
    public function getPlaceLibre()
    {
        return $this->placeLibre;
    }

    /**
     * Set placePrise
     *
     * @param integer $placePrise
     *
     * @return Parking
     */
    public function setPlacePrise($placePrise)
    {
        $this->placePrise = $placePrise;

        return $this;
    }

    /**
     * Get placePrise
     *
     * @return int
     */
    public function getPlacePrise()
    {
        return $this->placePrise;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Parking
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Parking
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set codePostal
     *
     * @param string $codePostal
     *
     * @return Parking
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Get codePostal
     *
     * @return string
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Parking
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set coordonnees
     *
     * @param string $coordonnees
     *
     * @return Parking
     */
    public function setCoordonnees($coordonnees)
    {
        $this->coordonnees = $coordonnees;

        return $this;
    }

    /**
     * Get coordonnees
     *
     * @return string
     */
    public function getCoordonnees()
    {
        return $this->coordonnees;
    }
}
