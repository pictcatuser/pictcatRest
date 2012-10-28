<?php

namespace PCT\Core\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PCTCoreUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
