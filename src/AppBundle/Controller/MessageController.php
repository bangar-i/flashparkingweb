<?php
/**
 * Created by PhpStorm.
 * User: Nani
 * Date: 20/01/2016
 * Time: 21:29
 */
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MessageController extends Controller
{
    /**
     * @Route("/message/plaintes")
     */
    public function messageAction()
    {
        // replace this example code with whatever you need
        return $this->render('@App/message/plaintes.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
            'nav_active' => 'contact',
        ));
    }
}