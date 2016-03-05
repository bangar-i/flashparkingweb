<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MentionsLegalesController extends Controller
{
    /**
     * @Route("/mentions-legales")
     */
    public function MentionsLegalesAction()
    {
        // replace this example code with whatever you need
        return $this->render('@App/front/mentions-legales.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
            'nav_active' => 'societe',
        ));
    }
}
