<?php

namespace PCT\Core\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use FOS\RestBundle\View\View AS FOSView;
use FOS\RestBundle\Request\ParamFetcher;
use FOS\RestBundle\Controller\Annotations\QueryParam;
use FOS\RestBundle\Controller\Annotations\RequestParam;

/**
 * Description of UserController
 *
 * @author quique
 *
 *
 */
class UserController extends Controller {
    /**
     *
     * Will look for a page query parameter, ie. ?page=XX
     * If not passed it will be automatically be set to the default of "1"
     * If passed but doesn't match the requirement "\d+" it will be also be set to the default of "1"
     * Note that if the value matches the default then no validation is run.
     * So make sure the default value really matches your expectations.
     *
     * @QueryParam(name="page", requirements="\d+", default="1", description="Page of the overview.")
     *
     * Will look for a firstname request parameters, ie. firstname=foo in POST data.
     * If not passed it will error out when read out of the ParamFetcher since RequestParam defaults to strict=true
     * If passed but doesn't match the requirement "\d+" it will also error out (400 Bad Request)
     * Note that if the value matches the default then no validation is run.
     * So make sure the default value really matches your expectations.
     *
     * EJEMPLO DE POST, NO TIENE SENTIDO HACER GET Y POST A LA VEZ PERO AQUI QUEDA
     * HARE OTRO METODO POSTA PARA DIFERENCIARLO
     * (LE HE QUITADO LA @ PARA QUE NO PETE)
     * RequestParam(name="firstname", requirements="[a-z]+", description="Firstname.")
     *
     * @param ParamFetcher $paramFetcher
     *
     * @return FOSView
     *
     * @ApiDoc()
     */
    public function getUsersAction(ParamFetcher $paramFetcher) {

        $page = $paramFetcher->get('page');

        $view = FOSView::create();

        // Array ejemplo
        if ($page==1) {$data = array("A" => $page);}
        else {$data = array("A"=>"HOLA REST","B"=>"HOLA");};

        $view->setStatusCode(200)->setData($data);

        // En el caso de que devolvamos un html
        $view->setTemplate("PCTCoreUserBundle:Default:user.html.twig", array("data" => "a"));

        // Para lanzar excepciones
        //throw new HttpException(400, "New comment is not valid.");

        return $view;
    }
}

?>
