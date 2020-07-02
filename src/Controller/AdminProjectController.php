<?php

namespace App\Controller;

use App\Entity\Project;
use App\Entity\Ukproject;
use App\Form\ProjectType;
use App\Service\Pagination;
use App\Form\EnglishProjectType;
use App\Repository\ProjectRepository;
use App\Controller\AdminNewsController;
use App\Repository\UkprojectRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminProjectController extends AbstractController
{

// version française

    /**
     * @Route("/admin/project/french\{page<\d+>?1}", name="admin_project_list")
     */
    public function index(ProjectRepository $repo,$page,Pagination $paginationService)
    {
        $paginationService->setEntityClass(Project::class)
                        ->setPage($page)
                        //->setRoute('admin_news_list')
                        ;

        return $this->render('admin/project/french/index.html.twig', [
            'pagination'=>$paginationService

        ]);
    }

        /**
     * permet de creer une annonce
     * @Route("/admin/project/french/new",name="project_create")
     * @return response
     */

    public function create(Request $request,EntityManagerInterface $manager){

        // fabrcant de formulaire : FORMBUILDER

        $project = new Project();

        // on lance la fabrication et la configuration de notre formulaire

        $form = $this->createForm(ProjectType::class,$project);

        // recuperation des données du formulaire
        $form -> handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
           
            $manager ->persist($project);
            $manager->flush();

            $this->addFlash('success',"Page projet créé avec succès");

            return $this->redirectToRoute('admin_project_list',['slug'=>$project->getSlug()]);
        }

        return $this->render('admin/project/french/new.html.twig',['form'=>$form->createView()]);

    }

    /**
     * Permet de modifier une actualité dans la partie admin
     * @Route("admin/project/french/{id}/edit",name="admin_project_edit")
     * @param Project $project
     * @param Request $request
     * @param EntityManagerInterface $manager
     * @return Response
     */
    public function edit(Project $project,Request $request,EntityManagerInterface $manager){

        $form = $this->createForm(ProjectType::class,$project);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $manager->persist($project);
            $manager->flush();

            $this->addFlash('success',"Page projet modifiée avec succès");

            return $this->redirectToRoute('admin_project_list');

        }

        return $this->render('admin/project/french/edit.html.twig',[
            'project'=>$project,
            'form'=>$form->createView()
        ]);

    }

    /**
     * Suppression d une annonce
     * @Route("/admin/project/french/{id}/delete",name="admin_project_delete")
     * @param Project $project
     * @param EntityManagerInterface $manager
     * @return Response
     */
    public function delete(Project $project,EntityManagerInterface $manager){
     
        $manager->remove($project);
        $manager->flush();
    
        $this->addFlash('success',"Projet supprimé avec succès.");

        return $this->redirectToRoute("admin_project_list");}
    
    
    

// version anglaise

    /**
     * @Route("/admin/project/english\{page<\d+>?1}", name="admin_projecteng_list")
     */
    public function indexproject(UkprojectRepository $repo,$page,Pagination $paginationService)
    {
        $paginationService->setEntityClass(Ukproject::class)
                        ->setPage($page)
                        //->setRoute('admin_projecteng_list')
                        ;

        return $this->render('admin/project/english/index.html.twig', [
            'pagination'=>$paginationService

        ]);
    }

    /**
     * permet de creer une annonce
     * @Route("/admin/project/english/new",name="projecteng_create")
     * @return response
     */

    public function createproject(Request $request,EntityManagerInterface $manager){

        // fabrcant de formulaire : FORMBUILDER

        $Ukproject = new Ukproject();

        // on lance la fabrication et la configuration de notre formulaire

        $form = $this->createForm(EnglishProjectType::class,$Ukproject);

        // recuperation des données du formulaire
        $form -> handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
           
            $manager ->persist($Ukproject);
            $manager->flush();

            $this->addFlash('success',"Page projet créé avec succès");

            return $this->redirectToRoute('admin_projecteng_list',['slug'=>$Ukproject->getSlug()]);
        }

        return $this->render('admin/project/english/new.html.twig',['form'=>$form->createView()]);

    }

    /**
     * Permet de modifier une actualité dans la partie admin
     * @Route("admin/project/english/{id}/edit",name="admin_projecteng_edit")
     * @param Ukproject $Ukproject
     * @param Request $request
     * @param EntityManagerInterface $manager
     * @return Response
     */
    public function editproject(Ukproject $Ukproject,Request $request,EntityManagerInterface $manager){

        $form = $this->createForm(EnglishProjectType::class,$Ukproject);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $manager->persist($Ukproject);
            $manager->flush();

            $this->addFlash('success',"Page projet modifiée avec succès");

            return $this->redirectToRoute('admin_projecteng_list');

        }

        return $this->render('admin/project/english/edit.html.twig',[
            'project'=>$Ukproject,
            'form'=>$form->createView()
        ]);

    }

    /**
     * Suppression d une annonce
     * @Route("/admin/project/english/{id}/delete",name="admin_projecteng_delete")
     * @param Ukproject $Ukproject
     * @param EntityManagerInterface $manager
     * @return Response
     */
    public function deleteproject(Ukproject $Ukproject,EntityManagerInterface $manager){
     
        $manager->remove($Ukproject);
        $manager->flush();
    
        $this->addFlash('success',"Projet supprimé avec succès.");

        return $this->redirectToRoute("admin_projecteng_list");}
}
