<?php

namespace App\Controller;

use App\Entity\Experience;
use App\Service\Pagination;
use App\Entity\Ukexperience;
use App\Repository\ExperienceRepository;
use App\Repository\UkexperienceRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ExperiencesController extends AbstractController
{
    /**
     * @Route("/French/Experience{page<\d+>?1}", name="experience")
     */
    

    public function experiencefr(ExperienceRepository $repo,Pagination $paginationService,$page){

        $paginationService->setEntityClass(Experience::class)
        ->setPage($page)
        ->setLimit(3)
        ;

        $experiencefr = $repo->findAll();

        return $this->render('French/Experience/index.html.twig', [
            'controller_name' => 'Experience',
            'pagination'=>$paginationService,
            'Experiences'=>$experiencefr
        ]);

    }

        /**
     * @Route("/English/Experiences{page<\d+>?1}", name="experiences")
     */
    

    public function experience(UkexperienceRepository $repo,Pagination $paginationService,$page){

        $paginationService->setEntityClass(Ukexperience::class)
        ->setPage($page)
        ->setLimit(3)
        ;

        $experience = $repo->findAll();

        return $this->render('English/Experiences/index.html.twig', [
            'controller_name' => 'Experiences',
            'pagination'=>$paginationService,
            'Experiences'=>$experience
        ]);

    }
}