<?php

namespace FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class BonjourController extends Controller
{

    /**
     * @Route("/salut/{name}")
     * @Route("/salut/", defaults={"name"="Inconnu"})
     */

    public function salutAction($name)
    {
        return $this->redirectToRoute("home");
        //home faisant rf au default controller
    }

}
