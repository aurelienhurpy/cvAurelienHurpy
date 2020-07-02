<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HobbiesController extends AbstractController
{
    /**
     * @Route("/French/Hobbies{page<\d+>?1}", name="activités")
     */
    

    public function hobbiesfr(){

        return $this->render('French/Hobbies/index.html.twig');

    }

        /**
     * @Route("/English/Hobbies{page<\d+>?1}", name="hobbies")
     */
    

    public function hobbies(){

        return $this->render('English/Hobbies/index.html.twig');

    }
}