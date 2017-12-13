<?php
/**
 * Created by PhpStorm.
 * User: dylan
 * Date: 20/11/2017
 * Time: 01:01
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use AppBundle\Security\AuthenticationSuccessHandler;
use AppBundle\Security\AuthenticationFailedHandler;

class SecurityController extends Controller
{
    /**
     * @Route("/login", name="login")
     */
    public function loginAction()
    {
        if($this->container->get('security.authorization_checker')->isGranted('ROLE_USER'))
        {
            return $this->redirectToRoute('arthritis');
        }
            return $this->render('security/login.html.twig',[
            ]);
    }


    /**
     * @Route("/logout", name="logout")
     */
    public function logoutAction()
    {
        throw new \RuntimeException(('This should never be called directly'));
    }
}