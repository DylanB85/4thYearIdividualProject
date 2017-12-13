<?php
/**
 * Created by PhpStorm.
 * User: dylan
 * Date: 19/11/2017
 * Time: 16:42
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class IllnessController extends Controller
{
    /**
     * @Route("/illness", name="arthritis")
     */
    public function arthritisAction()
    {
        return $this->render('illness/arthritis.html.twig',[
        ]);
    }
}