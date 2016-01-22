<?php

namespace AppBundle\Controller\Backend;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ReservationsController extends Controller
{
    /**
     * @Route("/reservations")
     */
    public function showAction()
    {
        return $this->render('@App/backend/reservations.html.twig', array(

        ));
    }
}
