<?php

namespace PCT\Core\HistoryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        $historia = $this->getDoctrine()->getRepository('PCTCoreHistoryBundle:Historia')->find(2);
        $name.=" ".$historia->getTitulo();
        $name.=" ".$historia->getIdZona()->getNombre();
        $name.=" ".$historia->getIdZona()->getIdPais()->getNombre();

        return $this->render('PCTCoreHistoryBundle:Default:index.html.twig', array('name' => $name));
    }
}
