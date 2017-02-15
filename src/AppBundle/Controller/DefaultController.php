<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @throws \LogicException
     */
    public function indexAction(Request $request)
    {
        if (!$this->isGranted(AuthenticatedVoter::IS_AUTHENTICATED_FULLY)) {
            return $this->redirect('/signin');
        }


        return $this->render('default/index.html.twig');
    }
}
