<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'detailcinema' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'adminBundle\\Controller\\CinemaController::detailcinemaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/detailcinema',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_cinema_detailfilm' => array (  0 =>   array (    0 => 'idFilm',  ),  1 =>   array (    '_controller' => 'adminBundle\\Controller\\CinemaController::detailfilmAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idFilm',    ),    1 =>     array (      0 => 'text',      1 => '/detailfilm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_cinema_addcinema' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'adminBundle\\Controller\\CinemaController::addcinemaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/addcinema',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_cinema_addfilm' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'adminBundle\\Controller\\CinemaController::addfilmAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/addfilm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_cinema_getfilm' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'adminBundle\\Controller\\CinemaController::getfilmAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/getfilm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_default_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'adminBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'front_bonjour_salut' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'FrontBundle\\Controller\\BonjourController::salutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/salut',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'front_bonjour_salut_1' => array (  0 =>   array (  ),  1 =>   array (    'name' => 'Inconnu',    '_controller' => 'FrontBundle\\Controller\\BonjourController::salutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/salut/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FrontBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
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
