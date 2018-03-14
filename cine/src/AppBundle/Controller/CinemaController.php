<?php
/**
 * Created by PhpStorm.
 * User: local192
 * Date: 12/12/2017
 * Time: 16:50
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Cinema;
use AppBundle\Form\Type\CinemaType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response as Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

use FOS\RestBundle\Controller\Annotations as Rest;

class CinemaController extends Controller
{
    /**
     * @Rest\View(statusCode=Response::HTTP_CREATED, serializerGroups={"cinema"})
     * @Rest\Post("/cinemas")
     */
    public function postCinemasAction(Request $request)
    {
        $unCinema = new Cinema();
        $form = $this->createForm(CinemaType::class, $unCinema);

        $form->submit($request->request->all());

        if ($form->isValid()) {
            $em = $this->get('doctrine.orm.entity_manager');
            $em->persist($unCinema);
            $em->flush();

            return $unCinema;
        } else {
            return $form;
        }


        /*

                $unCinema = new Cinema();
                $unCinema->setNom($request->get('nom'));
                $unCinema->setAdresse($request->get('adresse'));
                $unCinema->setCp($request->get('cp'));
                $unCinema->setVille($request->get('ville'));

                $em = $this->get('doctrine.orm.entity_manager');
                $em->persist($unCinema);
                $em->flush();

                return $unCinema;
        */
        /*Test  d'une requete
        $formatted = [
            'payload'=> [
                $request->get('nom'),
                $request->get('adresse'),
                $request->get('cp'),
                $request->get('ville')
            ]
        ];
        return $formatted;
        */
    }

    /**
     * @Rest\View(statusCode=Response::HTTP_NO_CONTENT, serializerGroups={"cinema"})
     * @Rest\Delete("/cinemas/{id}")
     */
    public function removeCinemaAction(Request $request)
    {
        $em = $this->get('doctrine.orm.entity_manager');
        $unCinema = $em->getRepository('AppBundle:Cinema')->find($request->get('id'));

        if (!$unCinema) {
            return;
        }
        foreach ($unCinema ->getSalles() as $salle) {
            $em->remove($salle);
        }

        if ($unCinema) {
            $em->remove($unCinema);
            $em->flush();
        }

    }

    /**
     * @Rest\View(serializerGroups={"cinema"})
     * @Rest\Put("/cinemas/{id}")
     */
    public function updateCinemaAction(Request $request)
    {
        return $this->updateCinema($request, true);
    }

    /**
     * @Rest\View(serializerGroups={"cinema"})
     * @Rest\Patch("/cinemas/{id}")
     */
    public function patchCinemaAction(Request $request)
    {
        return $this->updateCinema($request, false);
    }

    private function updateCinema(Request $request, $clearMissing)
    {
        $uncinema = $this->get('doctrine.orm.entity_manager')
            ->getRepository('AppBundle:Cinema')
            ->find($request->get('id'));

        if (empty($uncinema)) {
            return new JsonResponse(['message'=> 'Cinema not found'], Response::HTTP_NOT_FOUND);
        }
        $form = $this->createForm(CinemaType::class, $uncinema);

        $form->submit($request->request->all(),$clearMissing);

        if ($form->isValid()) {
            $em = $this->get('doctrine.orm.entity_manager');
            $em->merge($uncinema);
            $em->flush();
            return $uncinema;
        } else {
            return $form;
        }
    }

    /**
    *@Rest\View(serializerGroups={"cinema"})
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

        // $formatted = [];
        // foreach ($cinemas as $unCinema){
        //     $formatted[] = [
        //         'id' => $unCinema->getId(),
        //         'nom' => $unCinema->getNom(),
        //         'adresse' => $unCinema->getadresse(),
        //         'cp' => $unCinema->getCp(),
        //         'ville' => $unCinema->getVille()
        //     ];
        // }

        // return new JsonResponse($formatted);
        return $cinemas;
    }

    
    /**
    *@Rest\View(serializerGroups={"cinema"})
     * @Rest\Get("/cinemas/{cinema_id}")
     */
    public function getCinemaAction(Request $request) {
        $unCinema = $this->get('doctrine.orm.entity_manager')
            -> getRepository('AppBundle:Cinema')
            -> find($request->get('cinema_id'));

        // if (empty($unCinema)) {
        //     return new JsonResponse(['message' => 'Cinema not found', 'status'=>Response::HTTP_NOT_FOUND]);
        // }

        // $formatted[] = [
        //     'id' => $unCinema->getId(),
        //     'nom' => $unCinema->getNom(),
        //     'adresse' => $unCinema->getadresse(),
        //     'cp' => $unCinema->getCp(),
        //     'ville' => $unCinema->getVille()
        // ];

        return $unCinema;
    }
}