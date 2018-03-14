<?php

namespace adminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use adminBundle\Entity\Cinema;
use adminBundle\Entity\Salle;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class CinemaController extends Controller
{
    /**
     * @Route("/detailcinema/{id}", name="detailcinema")
    )
     */
    public function detailcinemaAction($id) //On lui demande un id du coup pour qu'il puisse le recuperer il faut le lui mettre en parametre
    {
        $repository = $this->getDoctrine()->getManager()->getRepository('adminBundle:Cinema'); // Les films sont avec pas besoin de les rappeler
        $repositorySalle = $this->getDoctrine()->getManager()->getRepository('adminBundle:Salle');
        $cinema = $repository->find($id);
        $salle = $repositorySalle->findBy(array ('cinema' => $cinema)); //on a plusieurs salles pour un cinema findbycinema permet de retrouver toutes les salles correspondantes
        if ( null === $cinema ){
            throw new NotFoundHttpException( "Ce cinema n'existe pas" );
        }

        return $this->render('adminBundle:Cinema:detailcinema.html.twig', array('salle' => $salle, 'cinema' => $cinema)); //render permet de faire la traduction du twig vers du HTML
    }

    /**
     * @Route("/detailfilm/{idFilm}")
     */
    public function detailfilmAction()
    {
        return $this->render('adminBundle:Cinema:detailfilm.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/addcinema")
     */
    public function addcinemaAction()
    {
        return $this->render('adminBundle:Cinema:addcinema.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/addfilm")
     */
    public function addfilmAction()
    {
        return $this->render('adminBundle:Cinema:addfilm.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/getfilm")
     */
    public function getfilmAction()
    {
        return $this->render('adminBundle:Cinema:gestfilm.html.twig', array(
            // ...
        ));
    }

}
