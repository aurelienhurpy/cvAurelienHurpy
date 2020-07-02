<?php

namespace App\Controller;

use App\Entity\Skills;
use App\Service\Pagination;
use App\Repository\SkillsRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SkillsController extends AbstractController
{
    /**
     * @Route("/Skills{page<\d+>?1}", name="Compétences")
     */
    

    public function home(SkillsRepository $repo,Pagination $paginationService,$page){

        $paginationService->setEntityClass(Skills::class)
        ->setPage($page)
        ->setLimit(3)
        ;

        $skills = $repo->findAll();

        return $this->render('Skills/index.html.twig', [
            'controller_name' => 'Compétences',
            'pagination'=>$paginationService,
            'compétences'=>$skills
        ]);

    }
}