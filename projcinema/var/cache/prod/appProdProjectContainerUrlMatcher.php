<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        // detailcinema
        if (0 === strpos($pathinfo, '/detailcinema') && preg_match('#^/detailcinema/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'detailcinema')), array (  '_controller' => 'adminBundle\\Controller\\CinemaController::detailcinemaAction',));
        }

        // admin_cinema_detailfilm
        if (0 === strpos($pathinfo, '/detailfilm') && preg_match('#^/detailfilm/(?P<idFilm>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cinema_detailfilm')), array (  '_controller' => 'adminBundle\\Controller\\CinemaController::detailfilmAction',));
        }

        // admin_cinema_addcinema
        if ('/addcinema' === $pathinfo) {
            return array (  '_controller' => 'adminBundle\\Controller\\CinemaController::addcinemaAction',  '_route' => 'admin_cinema_addcinema',);
        }

        // admin_cinema_addfilm
        if ('/addfilm' === $pathinfo) {
            return array (  '_controller' => 'adminBundle\\Controller\\CinemaController::addfilmAction',  '_route' => 'admin_cinema_addfilm',);
        }

        // admin_cinema_getfilm
        if ('/getfilm' === $pathinfo) {
            return array (  '_controller' => 'adminBundle\\Controller\\CinemaController::getfilmAction',  '_route' => 'admin_cinema_getfilm',);
        }

        // admin_default_index
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'admin_default_index');
            }

            return array (  '_controller' => 'adminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'admin_default_index',);
        }

        if (0 === strpos($pathinfo, '/salut')) {
            // front_bonjour_salut
            if (preg_match('#^/salut/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'front_bonjour_salut')), array (  '_controller' => 'FrontBundle\\Controller\\BonjourController::salutAction',));
            }

            // front_bonjour_salut_1
            if ('/salut' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'front_bonjour_salut_1');
                }

                return array (  'name' => 'Inconnu',  '_controller' => 'FrontBundle\\Controller\\BonjourController::salutAction',  '_route' => 'front_bonjour_salut_1',);
            }

        }

        // home
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'home');
            }

            return array (  '_controller' => 'FrontBundle\\Controller\\DefaultController::indexAction',  '_route' => 'home',);
        }

        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
