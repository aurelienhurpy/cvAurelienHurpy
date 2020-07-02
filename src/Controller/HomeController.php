<?php

// namespace : chemin du controller

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController {

    /**
     * création premiere route
     * @Route("/", name="homepage")
     */

    public function home(){

        return $this->render('home.html.twig');

    }

}