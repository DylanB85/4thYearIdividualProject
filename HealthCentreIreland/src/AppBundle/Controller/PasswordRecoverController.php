<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\Annotations;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Routing\ClassResourceInterface;
use FOS\RestBundle\Controller\Annotations\RouteResource;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\GetResponseNullableUserEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\FOSUserEvents;
use AppBundle\Entity\Member;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @Annotations\Prefix("password")
 * @RouteResource("password", pluralize=false)
 */
class PasswordRecoverController extends FOSRestController implements ClassResourceInterface
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

    /**
     * @Route("/recover/request", name="request")
     */
    public function changePasswordAction(Request $request)
    {
        $changePassword = new ChangePassword();
        $form = $this->createForm(new ChangePasswordType(), $changePassword);

        $form -> handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            return $this->redirect($this->generateUrl('login'));
        }

        return $this->render(':security:recover.html.twig',array(
            'form' => $form->createView(),
        ));
    }
}