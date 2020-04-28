<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class CategoryController extends Controller
{
    /**
     * @Route("/showAll")
     */
    public function showAllAction()
    {
        return $this->render('AppBundle:Category:show_all.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/filter")
     */
    public function filterAction()
    {
        return $this->render('AppBundle:Category:filter.html.twig', array(
            // ...
        ));
    }

}
