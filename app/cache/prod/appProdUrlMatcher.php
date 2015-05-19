<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // suivi_vente_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'suivi_vente_homepage');
            }

            return array (  '_controller' => 'Suivi\\SuiviBundle\\Controller\\DefaultController::indexAction',  '_route' => 'suivi_vente_homepage',);
        }

        // suivi_vente_admin
        if ($pathinfo === '/admin') {
            return array (  '_controller' => 'Suivi\\SuiviBundle\\Controller\\DefaultController::adminAction',  '_route' => 'suivi_vente_admin',);
        }

        // suivi_vente_chef
        if ($pathinfo === '/chef') {
            return array (  '_controller' => 'Suivi\\SuiviBundle\\Controller\\DefaultController::chefAction',  '_route' => 'suivi_vente_chef',);
        }

        // suivi_vente_sup
        if ($pathinfo === '/sup') {
            return array (  '_controller' => 'Suivi\\SuiviBundle\\Controller\\DefaultController::supAction',  '_route' => 'suivi_vente_sup',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
