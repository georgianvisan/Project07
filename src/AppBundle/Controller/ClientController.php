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
    public function logInAction(Request $request)
    {
        $clientRep = $this->getDoctrine()->getManager()->getRepository('AppBundle:Client');
        $clients=$clientRep->findAll();
        $test = $request->request->get('username');
        print_r($test);
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
        $log['password']=$request->request->get('password'); // take through post from logIn page
        $clientRep = $this->getDoctrine()->getManager()->getRepository('AppBundle:Client');
        $clients=$clientRep->findBy(['email' => $log['username']]);
        if (isset($clients[0])){
            if ($clients[0]->password === $log['password']) {
                return $this->render('AppBundle:Client:show_client.html.twig', array(
                    'client'=> $clients,
                    'pass'=>''
                ));
            }else return $this->render('AppBundle:Client:show_client.html.twig', array(
                'client' => '',
                'pass' => 'WRONGPASS'
            ));
        }else return $this->render('AppBundle:Client:register.html.twig', array());
        // find client by e-mail in database
        //if ($clients['password'] == $log['password']) {  //check if password matches
         //   return $this->render('AppBundle:Client:show_client.html.twig', array(
           //     'client' => $clients,
             //   'log' => $log
            // ));
        // }else echo "password not ok";
    }

}
