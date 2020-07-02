<?php

namespace App\Controller;

use App\Entity\Skills;
use App\Form\SkillsType;
use App\Service\Pagination;
use App\Repository\SkillsRepository;
use App\Controller\AdminSkillsController;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminSkillsController extends AbstractController
{
    /**
     * @Route("/admin/skills\{page<\d+>?1}", name="admin_skills_list")
     */
    public function index(SkillsRepository $repo,$page,Pagination $paginationService)
    {
        $paginationService->setEntityClass(Skills::class)
                        ->setPage($page)
                        //->setRoute('admin_skills_list')
                        ;

        return $this->render('admin/skills/index.html.twig', [
            'pagination'=>$paginationService

        ]);
    }

        /**
     * permet de creer une prestation
     * @Route("/admin/skills/new",name="skills_create")
     * @return response
     */

    public function create(Request $request,EntityManagerInterface $manager){

        // fabrcant de formulaire : FORMBUILDER

        $skills = new Skills();

        // on lance la fabrication et la configuration de notre formulaire

        $form = $this->createForm(SkillsType::class,$skills);

        // recuperation des données du formulaire
        $form -> handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
           
            $manager ->persist($skills);
            $manager->flush();

            $this->addFlash('success',"Compétence créée avec succès");

            return $this->redirectToRoute('admin_skills_list',['slug'=>$skills->getSlug()]);
        }

        return $this->render('admin/skills/new.html.twig',['form'=>$form->createView()]);

    }

    /**
     * Permet de modifier une actualité dans la partie admin
     * @Route("admin/skills/{id}/edit",name="admin_skills_edit")
     * @param Skills $skills
     * @param Request $request
     * @param EntityManagerInterface $manager
     * @return Response
     */
    public function edit(Skills $skills,Request $request,EntityManagerInterface $manager){

        $form = $this->createForm(SkillsType::class,$skills);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $manager->persist($skills);
            $manager->flush();

            $this->addFlash('success',"Compétence modifiée avec succès");

            return $this->redirectToRoute('admin_skills_list');

        }

        return $this->render('admin/skills/edit.html.twig',[
            'skills'=>$skills,
            'form'=>$form->createView()
        ]);

    }

    /**
     * Suppression d une prestation
     * @Route("/admin/skills/{id}/delete",name="admin_skills_delete")
     * @param Skills $skills
     * @param EntityManagerInterface $manager
     * @return Response
     */
    public function delete(Skills $skills,EntityManagerInterface $manager){
     
        $manager->remove($skills);
        $manager->flush();
    
        $this->addFlash('success',"Compétence supprimée avec succès.");

        return $this->redirectToRoute("admin_skills_list");}
    
    
       
}