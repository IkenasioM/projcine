<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

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
