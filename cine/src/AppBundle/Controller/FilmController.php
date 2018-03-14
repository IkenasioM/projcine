<?php
/**
 * Created by PhpStorm.
 * User: local192
 * Date: 10/01/2018
 * Time: 15:50
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Film;
use AppBundle\Form\Type\FilmType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response as Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

use FOS\RestBundle\Controller\Annotations as Rest;

class FilmController extends Controller
{
    /**
     * @Rest\View(statusCode=Response::HTTP_CREATED, serializerGroups={"film"})
     * @Rest\Post("/films")
     */
    public function postFilmsAction(Request $request)
    {
        $unFilm = new Film();
        $form = $this->createForm(FilmType::class, $unFilm);

        $form->submit($request->request->all());

        if ($form->isValid()) {
            $em = $this->get('doctrine.orm.entity_manager');
            $em->persist($unFilm);
            $em->flush();

            return $unFilm;
        } else {
            return $form;
        }
    }

    /**
     * @Rest\View(statusCode=Response::HTTP_NO_CONTENT, serializerGroups={"film"})
     * @Rest\Delete("/films/{id}")
     */
    public function removeFilmAction(Request $request)
    {
        $em = $this->get('doctrine.orm.entity_manager');
        $unFilm = $em->getRepository('AppBundle:Film')->find($request->get('id'));

        if ($unFilm) {
            $em->remove($unFilm);
            $em->flush();
        }

    }

    /**
     * @Rest\View(serializerGroups={"film"})
     * @Rest\Put("/films/{id}")
     */
    public function updateFilmAction(Request $request)
    {
        return $this->updateFilm($request, true);
    }

    /**
     * @Rest\View(serializerGroups={"film"})
     * @Rest\Patch("/films/{id}")
     */
    public function patchFilmAction(Request $request)
    {
        return $this->updateFilm($request, false);
    }

    private function updateFilm(Request $request, $clearMissing)
    {
        $unFilm = $this->get('doctrine.orm.entity_manager')
            ->getRepository('AppBundle:Film')
            ->find($request->get('id'));

        if (empty($unFilm)) {
            return new JsonResponse(['message'=> 'Film not found'], Response::HTTP_NOT_FOUND);
        }
        $form = $this->createForm(FilmType::class, $unFilm);

        $form->submit($request->request->all(),$clearMissing);

        if ($form->isValid()) {
            $em = $this->get('doctrine.orm.entity_manager');
            $em->merge($unFilm);
            $em->flush();
            return $unFilm;
        } else {
            return $form;
        }
    }


    /**
     * @Rest\View(serializerGroups={"film"})
     * @Rest\Get("/films")
     */
    public function getFilmsAction(Request $request) {

/*                return new JsonResponse([
                    new Film('CGR Dragon', '8, cours des Dames', '17000', 'La Rochelle'),
                    new Film('MEGA CGR', 'ave Becquerel', '17000', 'La Rochelle'),
                    new Film('CGR Olympia', '54 rue chaudrier', '17000', 'La Rochelle')
                    ]
                );*/

        $films = $this->get('doctrine.orm.entity_manager')
            -> getRepository('AppBundle:Film')
            -> findAll();

        // $formatted = [];
        // foreach ($films as $unFilm){
        //     $formatted[] = [
        //         'id' => $unFilm->getId(),
        //         'titre' => $unFilm->getTitre(),
        //         'resume' => $unFilm->getResume(),
        //         'duree' => $unFilm->getDuree()
        //     ];
        // }

        return $films;
    }


    /**
     * @Rest\View(serializerGroups={"film"})
     * @Rest\Get("/films/{film_id}")
     */
    public function getFilmAction(Request $request) {
        $unFilm = $this->get('doctrine.orm.entity_manager')
            -> getRepository('AppBundle:Film')
            -> find($request->get('film_id'));

        if (empty($unFilm)) {
            return new JsonResponse(['message' => 'Film not found', 'status'=>Response::HTTP_NOT_FOUND]);
        }

        // $formatted[] = [
        //     'id' => $unFilm->getId(),
        //     'titre' => $unFilm->getTitre(),
        //     'resume' => $unFilm->getResume(),
        //     'duree' => $unFilm->getDuree()
        // ];

        return $unFilm;
    }
}