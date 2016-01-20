<?php

namespace AppBundle\Entity;

/**
 * Ticket
 */
class Ticket
{
    /**
     * @var int
     */
    private $id;

    private $partenaire;
    private $reservation;
    private $code;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}
