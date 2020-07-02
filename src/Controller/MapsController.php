<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MapsController extends AbstractController
{
    /**
     * @Route("/French/Maps{page<\d+>?1}", name="map")
     */
    

    public function mapsfr(){

        return $this->render('French/Maps/index.html.twig');

    }

        /**
     * @Route("/English/Maps{page<\d+>?1}", name="maps")
     */
    

    public function maps(){

        return $this->render('English/Maps/index.html.twig');

    }
}