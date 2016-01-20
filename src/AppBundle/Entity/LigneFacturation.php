<?php

namespace AppBundle\Entity;

/**
 * LigneFacturation
 */
class LigneFacturation
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $quantite;

    private $tarif;
    private $facturation;


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
     * Set quantite
     *
     * @param integer $quantite
     *
     * @return LigneFacturation
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return int
     */
    public function getQuantite()
    {
        return $this->quantite;
    }
}
