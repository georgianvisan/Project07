<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class CartControllerController extends Controller
{
    /**
     * @Route("/showCartItems", name="show_cart_items")
     */
    public function showCartItemsAction()
    {
        $cartRepo=$this->getDoctrine()->getManager()->getRepository('AppBundle:Cart');
        $cartItems = $cartRepo->findAll();
        return $this->render('AppBundle:CartController:show_cart_items.html.twig', array(
            'cartItems' => $cartItems
        ));
    }

    /**
     * @Route("/addToCart")
     */
    public function addToCartAction()
    {
        return $this->render('AppBundle:CartController:add_to_cart.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/removeFromCart")
     */
    public function removeFromCartAction()
    {
        return $this->render('AppBundle:CartController:remove_from_cart.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/changeCart")
     */
    public function changeCartAction()
    {
        return $this->render('AppBundle:CartController:change_cart.html.twig', array(
            // ...
        ));
    }

}
