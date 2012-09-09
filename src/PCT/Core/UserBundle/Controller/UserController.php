<?php

namespace PCT\Core\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\HttpException;
use FOS\RestBundle\View\View;
use FOS\RestBundle\Request\ParamFetcher;
use FOS\RestBundle\Controller\Annotations\QueryParam;
use FOS\RestBundle\Controller\Annotations\RequestParam;

/**
 * Description of UserController
 *
 * @author quique
 * 
 * 
 * @return FOSView 
 */
class UserController extends Controller {
    public function getUsersAction() {
        $view = View::create();
        
        // Array ejemplo
        $data = ["A"=>"HOLA REST","B"=>"HOLA"];
        $view->setStatusCode(200)->setData($data);
        
        // En el caso de que devolvamos un html
        $view->setTemplate("PCTCoreUserBundle:Default:user.html.twig", array("data" => "a"));
        
        // Para lanzar excepciones
        //throw new HttpException(400, "New comment is not valid.");
        
        return $view;
    }
}

?>
