<?php

namespace AppBundle\Entity;

/**
 * Reservation
 */
class Reservation
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $heureDebutInit;

    /**
     * @var \DateTime
     */
    private $heureDebut;

    /**
     * @var \DateTime
     */
    private $heureFinInit;

    /**
     * @var \DateTime
     */
    private $heureFin;

    private $parking;
    private $tarif;


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
     * Set heureDebutInit
     *
     * @param \DateTime $heureDebutInit
     *
     * @return Reservation
     */
    public function setHeureDebutInit($heureDebutInit)
    {
        $this->heureDebutInit = $heureDebutInit;

        return $this;
    }

    /**
     * Get heureDebutInit
     *
     * @return \DateTime
     */
    public function getHeureDebutInit()
    {
        return $this->heureDebutInit;
    }

    /**
     * Set heureDebut
     *
     * @param \DateTime $heureDebut
     *
     * @return Reservation
     */
    public function setHeureDebut($heureDebut)
    {
        $this->heureDebut = $heureDebut;

        return $this;
    }

    /**
     * Get heureDebut
     *
     * @return \DateTime
     */
    public function getHeureDebut()
    {
        return $this->heureDebut;
    }

    /**
     * Set heureFinInit
     *
     * @param \DateTime $heureFinInit
     *
     * @return Reservation
     */
    public function setHeureFinInit($heureFinInit)
    {
        $this->heureFinInit = $heureFinInit;

        return $this;
    }

    /**
     * Get heureFinInit
     *
     * @return \DateTime
     */
    public function getHeureFinInit()
    {
        return $this->heureFinInit;
    }

    /**
     * Set heureFin
     *
     * @param \DateTime $heureFin
     *
     * @return Reservation
     */
    public function setHeureFin($heureFin)
    {
        $this->heureFin = $heureFin;

        return $this;
    }

    /**
     * Get heureFin
     *
     * @return \DateTime
     */
    public function getHeureFin()
    {
        return $this->heureFin;
    }
}
