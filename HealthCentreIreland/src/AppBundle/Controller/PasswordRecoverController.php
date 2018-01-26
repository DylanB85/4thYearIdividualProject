<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PasswordRecoverController extends Controller
{
    /**
     * @Route("/recover", name="recover")
     * @return \Symfony\Component\HttpFoundation\Response
     * @throws \LogicException
     */
    public function recoverPassword()
    {
        if($this->container->get('security.authorization_checker')->isGranted('ROLE_USER'))
        {
            return $this->redirectToRoute('#');
        }
        return $this->render('security/recover.html.twig',[

        ]);
    }
}