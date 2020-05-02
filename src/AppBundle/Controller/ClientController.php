<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Category;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class ClientController extends Controller
{
    /**
     * @Route("/logIn")
     */
    public function logInAction()
    {
        $clientRep = $this->getDoctrine()->getManager()->getRepository('AppBundle:Client');
        $clients=$clientRep->findAll();
        return $this->render('AppBundle:Client:log_in.html.twig', array(
            'clients' => $clients
        ));
    }

    /**
     * @Route("/register")
     */
    public function registerAction()
    {
        return $this->render('AppBundle:Client:register.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/showClient")
     */
    public function showClientAction(Request $request)
    {
        $log=[];
        $log['username']=$request->request->get('username');
        $log['password']=$request->request->get('password');
        echo "<br>";
        var_dump($log);
        echo "<br>";
        echo "<br>";
        $clientRep = $this->getDoctrine()->getManager()->getRepository('AppBundle:Client');
        $clients=$clientRep->findOneBy(array('email'=>'Butters@ion.com'));
        if (isset($clients)){
            print_r ($clients);
        }
        return $this->render('AppBundle:Client:show_client.html.twig', array(
            // ...
        ));
    }

}
