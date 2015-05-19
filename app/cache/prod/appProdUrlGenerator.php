<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'suivi_vente_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Suivi\\SuiviBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'suivi_vente_admin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Suivi\\SuiviBundle\\Controller\\DefaultController::adminAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'suivi_vente_chef' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Suivi\\SuiviBundle\\Controller\\DefaultController::chefAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/chef',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'suivi_vente_sup' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Suivi\\SuiviBundle\\Controller\\DefaultController::supAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/sup',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
