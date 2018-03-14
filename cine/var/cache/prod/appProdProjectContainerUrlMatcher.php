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

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }

        if (0 === strpos($pathinfo, '/cinemas')) {
            // post_cinemas
            if ('/cinemas' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_post_cinemas;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\CinemaController::postCinemasAction',  '_format' => NULL,  '_route' => 'post_cinemas',);
            }
            not_post_cinemas:

            // remove_cinema
            if (preg_match('#^/cinemas/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_remove_cinema;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'remove_cinema')), array (  '_controller' => 'AppBundle\\Controller\\CinemaController::removeCinemaAction',  '_format' => NULL,));
            }
            not_remove_cinema:

            // update_cinema
            if (preg_match('#^/cinemas/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('PUT' !== $canonicalMethod) {
                    $allow[] = 'PUT';
                    goto not_update_cinema;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'update_cinema')), array (  '_controller' => 'AppBundle\\Controller\\CinemaController::updateCinemaAction',  '_format' => NULL,));
            }
            not_update_cinema:

            // patch_cinema
            if (preg_match('#^/cinemas/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('PATCH' !== $canonicalMethod) {
                    $allow[] = 'PATCH';
                    goto not_patch_cinema;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'patch_cinema')), array (  '_controller' => 'AppBundle\\Controller\\CinemaController::patchCinemaAction',  '_format' => NULL,));
            }
            not_patch_cinema:

            // get_cinemas
            if ('/cinemas' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_get_cinemas;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\CinemaController::getCinemasAction',  '_format' => NULL,  '_route' => 'get_cinemas',);
            }
            not_get_cinemas:

            // get_cinema
            if (preg_match('#^/cinemas/(?P<cinema_id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_get_cinema;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_cinema')), array (  '_controller' => 'AppBundle\\Controller\\CinemaController::getCinemaAction',  '_format' => NULL,));
            }
            not_get_cinema:

            // get_salles
            if (preg_match('#^/cinemas/(?P<id>[^/]++)/salles$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_get_salles;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_salles')), array (  '_controller' => 'AppBundle\\Controller\\Cinema\\SalleController::getSallesAction',  '_format' => NULL,));
            }
            not_get_salles:

            // post_salles
            if (preg_match('#^/cinemas/(?P<id>[^/]++)/salles$#s', $pathinfo, $matches)) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_post_salles;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_salles')), array (  '_controller' => 'AppBundle\\Controller\\Cinema\\SalleController::postSallesAction',  '_format' => NULL,));
            }
            not_post_salles:

            // get_salle
            if (preg_match('#^/cinemas/(?P<cine_id>[^/]++)/salles/(?P<salle_id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_get_salle;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_salle')), array (  '_controller' => 'AppBundle\\Controller\\Cinema\\SalleController::getSalleAction',  '_format' => NULL,));
            }
            not_get_salle:

        }

        elseif (0 === strpos($pathinfo, '/films')) {
            // post_films
            if ('/films' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_post_films;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\FilmController::postFilmsAction',  '_format' => NULL,  '_route' => 'post_films',);
            }
            not_post_films:

            // remove_film
            if (preg_match('#^/films/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_remove_film;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'remove_film')), array (  '_controller' => 'AppBundle\\Controller\\FilmController::removeFilmAction',  '_format' => NULL,));
            }
            not_remove_film:

            // update_film
            if (preg_match('#^/films/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('PUT' !== $canonicalMethod) {
                    $allow[] = 'PUT';
                    goto not_update_film;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'update_film')), array (  '_controller' => 'AppBundle\\Controller\\FilmController::updateFilmAction',  '_format' => NULL,));
            }
            not_update_film:

            // patch_film
            if (preg_match('#^/films/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('PATCH' !== $canonicalMethod) {
                    $allow[] = 'PATCH';
                    goto not_patch_film;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'patch_film')), array (  '_controller' => 'AppBundle\\Controller\\FilmController::patchFilmAction',  '_format' => NULL,));
            }
            not_patch_film:

            // get_films
            if ('/films' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_get_films;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\FilmController::getFilmsAction',  '_format' => NULL,  '_route' => 'get_films',);
            }
            not_get_films:

            // get_film
            if (preg_match('#^/films/(?P<film_id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_get_film;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_film')), array (  '_controller' => 'AppBundle\\Controller\\FilmController::getFilmAction',  '_format' => NULL,));
            }
            not_get_film:

        }

        // app.swagger_ui
        if ('/api/doc' === $pathinfo) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_appswagger_ui;
            }

            return array (  '_controller' => 'nelmio_api_doc.controller.swagger_ui',  '_route' => 'app.swagger_ui',);
        }
        not_appswagger_ui:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
