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


class IllnessController
{
    /**
     * @Route("/illness")
     */
    public function showAction()
    {
        return new Response("Arthritis");
    }
}