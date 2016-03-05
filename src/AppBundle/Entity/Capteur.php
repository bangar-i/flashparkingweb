<?php

namespace AppBundle\Entity;

/**
 * Capteur
 */
class Capteur
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $etat;

    private $parking;


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
     * Set etat
     *
     * @param integer $etat
     *
     * @return Capteur
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return int
     */
    public function getEtat()
    {
        return $this->etat;
    }
}
