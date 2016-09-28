<?php

namespace FirstBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('FirstBundle:Default:index.html.twig');
    }

    /**
     * @Route("/contact")
     */
    public function contactAction()
    {
        return $this->render('FirstBundle:Default:contact.html.twig');
    }

    /**
     * @Route(
     *  "/article/{id}",
     *  requirements={
     *    "id": "\d+"
     *  }
     *)
     */
    public function articleAction($id)
    {
        return $this->render('FirstBundle:Default:article.html.twig', array('id'=>$id));
    }

    /**
     * @Route("/current-time")
     */
    public function currentTimeAction()
    {
        $heure = date("H:i");
        return $this->render('FirstBundle:Default:currentTime.html.twig', array('heure'=>$heure));
    }

    /**
     * @Route("/square/{number}")
     */
    public function squareAction($number)
    {
        $total = $number * $number;
        return $this->render('FirstBundle:Default:square.html.twig', array('number'=>$number, 'total'=>$total));
    }

    /**
     * @Route("/square2/{number}")
     */
    public function square2Action($number)
    {

        return $this->render('FirstBundle:Default:square2.html.twig', array('number'=>$number, 'total'=>$total));
    }
}
