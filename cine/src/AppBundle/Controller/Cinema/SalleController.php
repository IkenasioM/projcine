<?php
/**
 * Created by PhpStorm.
 * User: local192
 * Date: 12/12/2017
 * Time: 16:50
 */

//
namespace AppBundle\Controller\Cinema;

use AppBundle\Entity\Salle;
use AppBundle\Form\Type\SalleType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response as Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

use FOS\RestBundle\Controller\Annotations as Rest;

class SalleController extends Controller
{
     /**
     * @Rest\View(serializerGroups={"salle"})
     * @Rest\Get("/cinemas/{id}/salles")
     */
     public function getSallesAction(Request $request) {
        $cinema = $this->get('doctrine.orm.entity_manager')->getRepository('AppBundle:Cinema')->find($request->get('id'));
        /* @var $cinema Cinema*/
        if (empty($cinema)) {
            return $this->cinemaNotFound();
        }
        return $cinema->getSalles();
    }


    /**
     * @Rest\View(statusCode=Response::HTTP_CREATED,serializerGroups={"salle"})
     * @Rest\Post("/cinemas/{id}/salles")
     */
     public function postSallesAction(Request $request) {
        $cinema = $this->get('doctrine.orm.entity_manager')->getRepository('AppBundle:Cinema')->find($request->get('id'));
        /* @var $cinema Cinema*/
        if (empty($cinema)) {
            return $this ->cinemaNotFound();
        }
        $salle = new Salle();
        $salle->setCinema($cinema);
        $form = $this->createForm(SalleType::class, $salle);
        $form->submit($request->request->all());

        if($form->isValid()) {
            $em = $this->get('doctrine.orm.entity_manager');
            $em->persist($salle);
            $em->flush();
            return $salle;
        } else {
            return $form;
        }
    }

    /**
     * @Rest\View(serializerGroups={"salle"})
     * @Rest\Get("/cinemas/{cine_id}/salles/{salle_id}")
     */
     public function getSalleAction(Request $request) {
        $uneSalle = $this->get('doctrine.orm.entity_manager')
            -> getRepository('AppBundle:Salle')
            -> find($request->get('salle_id'));
        $unCinema = $this->get('doctrine.orm.entity_manager')
            -> getRepository('AppBundle:Cinema')
            -> find($request->get('cine_id'));
        if (empty($unCinema)) {
            return $this ->cinemaNotFound();
        } else if (empty($uneSalle)){
            return $this ->salleNotFound();
        }
        return $uneSalle;
    }


    private function CinemaNotFound() {
        return \FOS\RestBundke\View\View::create(['message' => 'Cinema not found'], Response::HTTP_NOT_FOUND);
    }
    private function SalleNotFound() {
        return \FOS\RestBundke\View\View::create(['message' => 'Salle not found'], Response::HTTP_NOT_FOUND);
    }

    
}