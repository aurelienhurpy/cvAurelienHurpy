<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ResourcesController extends AbstractController
{
    /**
     * @Route("/French/Resources{page<\d+>?1}", name="ressources")
     */
    

    public function resourcesfr(){

        return $this->render('French/Resources/index.html.twig');

    }

        /**
     * @Route("/English/Resources{page<\d+>?1}", name="resources")
     */
    

    public function resources(){

        return $this->render('English/Resources/index.html.twig');

    }
}