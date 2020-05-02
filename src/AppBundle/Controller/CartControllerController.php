<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Cart;
use AppBundle\Entity\CartItem;

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
     * @Route("/createCart")
     */
    public function createCartAction(Request $req)
    {
        $cartRepo=$this->getDoctrine()->getManager()->getRepository('AppBundle:CartItem');
        $cartItems = $cartRepo->findAll();
        $em = $this->getDoctrine()->getManager();
        $cookie = $req->cookies->get('Uid');
        $req->cookies->all();
        if ($cookie) {
            return new Response('Cookie already set!');
        }
        $newCart = $em->getRepository('AppBundle:CartItem')->findAll();
        $value = uniqid();
        $cookie = new Cookie('Uid', $value, time() + (3600));
        $resp = new Response('<div>Hello Cookie</div>');

        $resp->headers->setCookie($cookie);
        $newCart = new Cart();
        $newCart->setCookie($value);
        $newCart->setCartTime(time());
        $em->persist($newCart);
        $em->flush();
        return $this->render('AppBundle:CartController:show_cart_items.html.twig', array(
            'cartItems' => $cartItems,
            'cookie' => $cookie,
            'newCart' => $newCart,
        ));

    }

    /**
     * @Route("/addToCart")
     */
    public function addToCartAction()
    {
        $em = $this->getDoctrine();
        $cartItemRep = $em->getRepository('AppBundle:CartItem')->findAll();
        return $this->render('AppBundle:CartController:add_to_cart.html.twig', array(
            [
                'categories'=>$cartItemRep,
                'action'=>'add'
            ]
        ));
    }

    /**
     * @Route("/removeFromCart/{id}")
     */
    public function removeFromCartAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $cartItemRep = $em->getRepository('AppBundle:CartItem');
        $em->remove($cartItemRep->findOneById($id));
        $em->flush();
        return $this->render('AppBundle:CartController:show_cart_items.html.twig', array(
            'cartItems' => $cartItemRep
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
