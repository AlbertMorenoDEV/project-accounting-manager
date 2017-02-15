<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class SignInController extends Controller
{
    /**
     * @Route("/signin")
     */
    public function indexAction()
    {
        return $this->render('AppBundle:SignIn:index.html.twig');
    }

}
