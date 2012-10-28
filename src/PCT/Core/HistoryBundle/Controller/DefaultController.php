<?php

namespace PCT\Core\HistoryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PCTCoreHistoryBundle:Default:index.html.twig', array('name' => $name));
    }
}
