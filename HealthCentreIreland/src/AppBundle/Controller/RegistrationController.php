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
use Symfony\Component\HttpFoundation\Request;

class RegistrationController extends Controller
{
    /**
     * @Route("/register", name="registration")
     * @return \Symfony\Component\HttpFoundation\Response
     * @throws \LogicException
     */
    public function registerAction(Request $request)
    {
        $member = new Member();

        $form = $this->createForm(MemberType::class, $member);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $password = $this->get('security.password_encoder')
                ->encodePassword($member, $member->getPlainPassword());

            $member->setPassword($password);

            $em = $this->getDoctrine()->getManager();

            $em->persist($member);
            $em->flush();
            $this->addFlash('success', 'You are now registered');

            return $this->redirectToRoute('login');
        }

        return $this->render('registration/register.html.twig',[
            'registration_form' => $form->createView(),

        ]);
    }
}