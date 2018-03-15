<?php

namespace adminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Unirest;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $headers = array('Accept' => 'application/json');

        $cinemasResponse = Unirest\Request::get('http://cine.ws/cinemas', $headers, null);
        $cinemas = $cinemasResponse->body;

        return $this->render('adminBundle:Default:index.html.twig', array('cinemas' => $cinemas)); //=> pour assigner

        //$repository = $this->getDoctrine()->getManager()->getRepository('adminBundle:Cinema');
        //$repositoryFilm = $this->getDoctrine()->getManager()->getRepository('adminBundle:Film');
        //$cinema = $repository->findAll();
        //$film = $repositoryFilm->findAll();
        //return $this->render('adminBundle:Default:index.html.twig', array('cinema' => $cinema, 'film' => $film)); //=> pour assigner
    }
}
