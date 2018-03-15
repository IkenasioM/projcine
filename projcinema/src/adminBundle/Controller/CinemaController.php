<?php

namespace adminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use adminBundle\Entity\Cinema;
use adminBundle\Entity\Salle;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Unirest;
class CinemaController extends Controller
{
    /**
     * @Route("/detailcinema/{id}", name="detailcinema")
     */
    public function detailcinemaAction($id)
    {
        $headers = array('Accept' => 'application/json');

        $cinemaResponse = Unirest\Request::get('http://cine.ws/cinemas/'.$id, $headers, null);
        $cinema = $cinemasResponse->body;

        return $this->render('adminBundle:Cinema:detailcinema.html.twig', array('cinema' => $cinema));
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
     * @Route("/addcinema", name="addcinema")
     * @Method ({"GET"})
     */
    public function addcinemaAction(Request $request)
    {
        $form = $this->createFormBuilder()
         ->add('nom', TextType::class)
         ->add('adresse', TextType::class)
         ->add('accessiblite', CheckboxType::class, array(
             'label' => 'Est-il accesibilité aux personnes ayant un hadicape ?',
             'required' => false
         ))
         ->add('save', SubmitType::class, array('label' => 'Ajouter'))
         ->getForm();

         $form->submit($request->request->all());

         if ($form->isSubmitted() && $form->isValid()) {
             var_dump($form->handleRequest($request));
            //$headers = array('Accept' => 'application/json');
            //$cinemaResponse = Unirest::post($url, $headers, $body);
            //return $this->redirectToRoute('/a');
        }

        return $this->render('adminBundle:Cinema:addcinema.html.twig', array(
            'form' => $form->createView(),
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


    /**
     * @Route("/deletecinema/{id}", name="deletecinema")
     */
    public function deletecinemaAction($id)
    {
        $headers = array('Accept' => 'application/json');

        $cinemaResponse = Unirest\Request::delete('http://cine.ws/cinemas/'.$id, $headers, null);
        $cinema = $cinemasResponse->body;

        return $this->render('adminBundle:Default:index.html.twig', array('cinema' => $cinema));

        //return $this->redirectToRoute('homepage');
    }

}
