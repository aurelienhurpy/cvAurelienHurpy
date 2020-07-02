<?php

namespace App\Controller;

use App\Entity\Training;
use App\Entity\Ukeducation;
use App\Service\Pagination;
use App\Repository\TrainingRepository;
use App\Repository\UkeducationRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class EducationController extends AbstractController
{
    /**
     * @Route("/English/Education{page<\d+>?1}", name="education")
     */
    

    public function education(UkeducationRepository $repo,Pagination $paginationService,$page){

        $paginationService->setEntityClass(Ukeducation::class)
        ->setPage($page)
        ->setLimit(4)
        ;

        $education = $repo->findAll();

        return $this->render('English/Education/index.html.twig', [
            'controller_name' => 'Education',
            'pagination'=>$paginationService,
            'formation'=>$education
        ]);

    }


     /**
     * @Route("/French/Formation{page<\d+>?1}", name="Formation")
     */
    

    public function formation(TrainingRepository $repo,Pagination $paginationService,$page){

        $paginationService->setEntityClass(Training::class)
        ->setPage($page)
        ->setLimit(4)
        ;

        $training = $repo->findAll();

        return $this->render('French/Formation/index.html.twig', [
            'controller_name' => 'Formation',
            'pagination'=>$paginationService,
            'formation'=>$training
        ]);

    }
}