<?php

namespace App\Controller;

use App\Entity\Intro;
use App\Entity\Ukintro;
use App\Service\Pagination;
use App\Repository\IntroRepository;
use App\Repository\UkintroRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends AbstractController
{
    /**
     * @Route("/French/Accueil{page<\d+>?1}", name="accueil")
     */
    

    public function mainfr(IntroRepository $repo,Pagination $paginationService,$page){

        $paginationService->setEntityClass(Intro::class)
        ->setPage($page)
        ->setLimit(3)
        ;

        $introduction = $repo->findAll();

        return $this->render('French/Accueil/index.html.twig', [
            'controller_name' => 'Main',
            'pagination'=>$paginationService,
            'introduction'=>$introduction
        ]);

    }

        /**
     * @Route("/English/Home{page<\d+>?1}", name="home")
     */
    

    public function main(UkintroRepository $repo,Pagination $paginationService,$page){

        $paginationService->setEntityClass(Ukintro::class)
        ->setPage($page)
        ->setLimit(3)
        ;

        $intro = $repo->findAll();

        return $this->render('English/Home/index.html.twig', [
            'controller_name' => 'Main',
            'pagination'=>$paginationService,
            'intro'=>$intro
        ]);

    }
}