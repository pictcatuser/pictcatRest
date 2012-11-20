<?php

namespace PCT\Core\SecurBundle\Controller;

use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use FOS\RestBundle\Controller\Annotations\Prefix;
use FOS\RestBundle\Controller\Annotations\NamePrefix;
use FOS\RestBundle\View\View AS FOSView;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Request\ParamFetcher;
use FOS\RestBundle\Controller\Annotations\RequestParam;
use FOS\RestBundle\Controller\Annotations\QueryParam;

/**
 * Gestiona los tokens de acceso al sistema
 * 
 */

class SecurController extends Controller
{
    /**
     * WSSE Token generation
     * 
     * @QueryParam(name="_username", description="Firstname.")
     * @QueryParam(name="_password", description="Firstname.")
     * 
     * @param ParamFetcher $paramFetcher
     * 
     * @return FOSView
     * 
     * @ApiDoc( )
     */
    public function postSecurAction(ParamFetcher $paramFetcher)
    {                
        $view = FOSView::create();
        $request = $this->getRequest();

        //$username = $request->request->get('_username');        
        //$password = $request->request->get('_password');        
        //$password = $request->get('_password');
        $username = $paramFetcher->get('_username');
        $password = $paramFetcher->get('_password');
        
        $wsseAuthService = $this->container->get('pct_core_secur.wsse_auth');
        $wsseAuthService->setUsername($username);
        $wsseAuthService->setPlainPassword($password);
        $token = $wsseAuthService->authorize();
        $data = $token->getUsernameToken();

        $view->setStatusCode(200)->setData($data);

        return $view;            
        }
}
