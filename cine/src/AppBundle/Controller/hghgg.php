<?php
/**
 * Created by PhpStorm.
 * User: local192
 * Date: 12/12/2017
 * Time: 16:50
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Cinema;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response as Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

//use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations as Rest;

class CinemaController extends Controller
{
    /**
     * @Rest\View(statusCode=Response::HTTP_CREATED)
     * @Rest\Post("/cinemas")
     */
    public function postCinemasAction(Request $request)
    {
        /* Test  d'une requete
                    $formatted = [
                    'payload'=> [
                        $request->get('nom'),
                        $request->get('adresse'),
                        $request->get('cp'),
                        $request->get('ville')
                    ]
                ];
                return new JsonResponse($formatted);
        */

        $unCinema = new Cinema();
        $unCinema->setNom($request->get('nom'));
        $unCinema->setAdresse($request->get('adresse'));
        $unCinema->setCp($request->get('cp'));
        $unCinema->setVille($request->get('ville'));

        $em = $this->get('doctrine.orm.entity_manager');
        $em->persist($unCinema);
        $em->flush();

        return $unCinema;

    }


    /**
     * @Rest\Get("/cinemas")
     */
    public function getCinemasAction(Request $request) {
        /*
                return new JsonResponse([
                    new Cinema('CGR Dragon', '8, cours des Dames', '17000', 'La Rochelle'),
                    new Cinema('MEGA CGR', 'ave Becquerel', '17000', 'La Rochelle'),
                    new Cinema('CGR Olympia', '54 rue chaudrier', '17000', 'La Rochelle')
                    ]
                );
        */
        $cinemas = $this->get('doctrine.orm.entity_manager')
            -> getRepository('AppBundle:Cinema')
            -> findAll();

        $formatted = [];
        foreach ($cinemas as $unCinema){
            $formatted[] = [
                'id' => $unCinema->getId(),
                'nom' => $unCinema->getNom(),
                'adresse' => $unCinema->getadresse(),
                'cp' => $unCinema->getCp(),
                'ville' => $unCinema->getVille()
            ];
        }

        return new JsonResponse($formatted);
    }


    /**
     * @Rest\Get("/cinemas/{cinema_id}")
     */
    public function getCinemaAction(Request $request) {
        $unCinema = $this->get('doctrine.orm.entity_manager')
            -> getRepository('AppBundle:Cinema')
            -> find($request->get('cinema_id'));

        if (empty($unCinema)) {
            return new JsonResponse(['message' => 'Cinema not found', 'status'=>Response::HTTP_NOT_FOUND]);
        }

        $formatted[] = [
            'id' => $unCinema->getId(),
            'nom' => $unCinema->getNom(),
            'adresse' => $unCinema->getadresse(),
            'cp' => $unCinema->getCp(),
            'ville' => $unCinema->getVille()
        ];

        return new JsonResponse($formatted);
    }

}