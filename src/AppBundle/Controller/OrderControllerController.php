<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class OrderControllerController extends Controller
{
    /**
     * @Route("/addClient")
     */
    public function addClientAction()
    {
        return $this->render('AppBundle:OrderController:add_client.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/previewOrder")
     */
    public function previewOrderAction()
    {
        return $this->render('AppBundle:OrderController:preview_order.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/createOrder")
     */
    public function createOrderAction()
    {
        return $this->render('AppBundle:OrderController:create_order.html.twig', array(
            // ...
        ));
    }

}
