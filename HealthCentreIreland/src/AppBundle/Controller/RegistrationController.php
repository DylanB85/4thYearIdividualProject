<?php
/**
 * Created by PhpStorm.
 * User: dylan
 * Date: 20/11/2017
 * Time: 19:21
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Member;
use AppBundle\Form\MemberType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RegistrationController extends Controller
{
    /**
     * @Route("/register", name="registration")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function registerAction()
    {

        $form = $this->createForm(MemberType::class, new Member());
        return $this->render('registration/register.html.twig',[
            'registration_form' => $form->createView(),

        ]);
    }
}