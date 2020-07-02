<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MiscController extends AbstractController
{
    /**
     * @Route("/French/Misc{page<\d+>?1}", name="divers")
     */
    

    public function miscfr(){

        return $this->render('French/Misc/index.html.twig');

    }

        /**
     * @Route("/English/Misc{page<\d+>?1}", name="misc")
     */
    

    public function misc(){

        return $this->render('English/Misc/index.html.twig');

    }
}