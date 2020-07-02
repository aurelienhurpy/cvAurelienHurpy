<?php

namespace App\Controller;

use App\Entity\Project;
use App\Entity\Ukproject;
use App\Service\Pagination;
use App\Repository\ProjectRepository;
use App\Repository\UkprojectRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProjectController extends AbstractController
{
    /**
     * @Route("/French/Projet{page<\d+>?1}", name="projet")
     */
    

    public function projet(ProjectRepository $repo,Pagination $paginationService,$page){

        $paginationService->setEntityClass(Project::class)
                        ->setPage($page)
                        ->setLimit(3)
                        ;

        $projet = $repo->findAll();

        return $this->render('French/Projet/index.html.twig',[
            'controller_name'=>'Project',
            'pagination'=>$paginationService,
            'project'=>$projet
        ]);

    }

        /**
     * @Route("/English/Project{page<\d+>?1}", name="project")
     */
    

    public function project(UkprojectRepository $repo,Pagination $paginationService,$page){

        $paginationService->setEntityClass(Ukproject::class)
                        ->setPage($page)
                        ->setLimit(3)
                        ;

        $project = $repo->findAll();

        return $this->render('English/Project/index.html.twig',[
            'controller_name'=>'Project',
            'pagination'=>$paginationService,
            'project'=>$project
        ]);

    }
}