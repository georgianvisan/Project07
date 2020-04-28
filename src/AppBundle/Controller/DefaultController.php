<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Category;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        $catRepo = $this->getDoctrine()->getManager()->getRepository('AppBundle:Category');
        $prodRepo = $this->getDoctrine()->getManager()->getRepository('AppBundle:Product');
        $orderRepo = $this->getDoctrine()->getManager()->getRepository('AppBundle:Orders');
        $categories = $catRepo->findAll();
        $products = $prodRepo->findAll();
        $orders = $orderRepo->findAll();
        return $this->render('AppBundle:Default:home.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')) . DIRECTORY_SEPARATOR,
            'categories' => $categories,
            'products' => $products,
        ]);
    }

    public function notifications()
    {
        // get the user information and notifications somehow
        $userFirstName = '...';
        $userNotifications = ['...', '...'];

        // the template path is the relative file path from `templates/`
        return $this->render('user/notifications.html.twig', [
            // this array defines the variables passed to the template,
            // where the key is the variable name and the value is the variable value
            // (Twig recommends using snake_case variable names: 'foo_bar' instead of 'fooBar')
            'user_first_name' => $userFirstName,
            'notifications' => $userNotifications,
        ]);
    }

    /**
     *
     * @Route("/category/{id}", name="category")
     *
     */
    public function categoryAction(string $id): Response
    {
        $catRepo = $this->getDoctrine()->getManager()->getRepository('AppBundle:Category');
        $prodRepo = $this->getDoctrine()->getManager()->getRepository('AppBundle:Product');
        $categories = $catRepo->findAll();
        $products = $prodRepo->findByCategoryId($id);
        return $this->render('AppBundle:Category:show_all.html.twig', [
            'categories' => $categories,
            'products' => $products,
        ]);

    }


    /**
     * @Method({"GET"})
     * @Route("/product/{id}", name="product")
     *
     */
    public function productAction(): Response
    {
        $catRepo = $this->getDoctrine()->getManager()->getRepository('AppBundle:Category');
        $prodRepo = $this->getDoctrine()->getManager()->getRepository('AppBundle:Product');
        $categories = $catRepo->findAll();
        $products = $prodRepo->findAll();
        return $this->render('AppBundle:Default:home.html.twig', [
            'categories' => $categories,
            'products' => $products,
        ]);
        //return new Response("<html><body>PRODUCT ACTION</body></html>");
    }

    /**
     * @Method({"POST"})
     * @Route("/search", name="search")
     *
     */
    public function searchAction(): Response
    {
        return new Response("<html><body>SEARCH </body></html>");
    }


}
