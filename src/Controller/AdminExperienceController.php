<?php

namespace App\Controller;

use App\Entity\Experience;
use App\Service\Pagination;
use App\Entity\Ukexperience;
use App\Form\ExperienceType;
use App\Form\EnglishExperienceType;
use App\Repository\ExperienceRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\UkexperienceRepository;
use App\Controller\AdminExperienceController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminExperienceController extends AbstractController
{

// version française

    /**
     * @Route("/admin/experience/french\{page<\d+>?1}", name="admin_experience_list")
     */
    public function index(ExperienceRepository $repo,$page,Pagination $paginationService)
    {
        $paginationService->setEntityClass(Experience::class)
                        ->setPage($page)
                        //->setRoute('admin_experience_list')
                        ;

        return $this->render('admin/experience/french/index.html.twig', [
            'pagination'=>$paginationService

        ]);
    }

    /**
     * permet de creer une prestation
     * @Route("/admin/experience/french/new",name="experience_create")
     * @return response
     */

    public function create(Request $request,EntityManagerInterface $manager){

        // fabrcant de formulaire : FORMBUILDER

        $experience = new Experience();

        // on lance la fabrication et la configuration de notre formulaire

        $form = $this->createForm(ExperienceType::class,$experience);

        // recuperation des données du formulaire
        $form -> handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
           
            $manager ->persist($experience);
            $manager->flush();

            $this->addFlash('success',"Experience ajoutée avec succès");

            return $this->redirectToRoute('admin_experience_list',['slug'=>$experience->getSlug()]);
        }

        return $this->render('admin/experience/french/new.html.twig',['form'=>$form->createView()]);

    }

    /**
     * Permet de modifier une actualité dans la partie admin
     * @Route("admin/experience/french/{id}/edit",name="admin_experience_edit")
     * @param Experience $experience
     * @param Request $request
     * @param EntityManagerInterface $manager
     * @return Response
     */
    public function edit(Experience $experience,Request $request,EntityManagerInterface $manager){

        $form = $this->createForm(ExperienceType::class,$experience);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $manager->persist($experience);
            $manager->flush();

            $this->addFlash('success',"Experience modifiée avec succès");

            return $this->redirectToRoute('admin_experience_list');

        }

        return $this->render('admin/experience/french/edit.html.twig',[
            'experience'=>$experience,
            'form'=>$form->createView()
        ]);

    }

    /**
     * Suppression d une prestation
     * @Route("/admin/experience/french/{id}/delete",name="admin_experience_delete")
     * @param Experience $experience
     * @param EntityManagerInterface $manager
     * @return Response
     */
    public function delete(Experience $experience,EntityManagerInterface $manager){
     
        $manager->remove($experience);
        $manager->flush();
    
        $this->addFlash('success',"Experience supprimée avec succès.");

        return $this->redirectToRoute("admin_experience_list");}







// version anglaise

    /**
     * @Route("/admin/experience/english\{page<\d+>?1}", name="admin_experienceeng_list")
     */
    public function indexExperience(UkexperienceRepository $repo,$page,Pagination $paginationService)
    {
        $paginationService->setEntityClass(Ukexperience::class)
                        ->setPage($page)
                        //->setRoute('admin_experienceeng_list')
                        ;

        return $this->render('admin/experience/english/index.html.twig', [
            'pagination'=>$paginationService

        ]);
    }

    /**
     * permet de creer une prestation
     * @Route("/admin/experience/english/new",name="experienceeng_create")
     * @return response
     */

    public function createExperience(Request $request,EntityManagerInterface $manager){

        // fabrcant de formulaire : FORMBUILDER

        $Ukexperience = new Ukexperience();

        // on lance la fabrication et la configuration de notre formulaire

        $form = $this->createForm(EnglishExperienceType::class,$Ukexperience);

        // recuperation des données du formulaire
        $form -> handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
           
            $manager ->persist($Ukexperience);
            $manager->flush();

            $this->addFlash('success',"Experience ajoutée avec succès");

            return $this->redirectToRoute('admin_experienceeng_list',['slug'=>$Ukexperience->getSlug()]);
        }

        return $this->render('admin/experience/english/new.html.twig',['form'=>$form->createView()]);

    }

    /**
     * Permet de modifier une actualité dans la partie admin
     * @Route("admin/experience/english/{id}/edit",name="admin_experienceeng_edit")
     * @param Ukexperience $Ukexperience
     * @param Request $request
     * @param EntityManagerInterface $manager
     * @return Response
     */
    public function editExperience(Ukexperience $Ukexperience,Request $request,EntityManagerInterface $manager){

        $form = $this->createForm(EnglishExperienceType::class,$Ukexperience);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $manager->persist($Ukexperience);
            $manager->flush();

            $this->addFlash('success',"Experience modifiée avec succès");

            return $this->redirectToRoute('admin_experienceeng_list');

        }

        return $this->render('admin/experience/english/edit.html.twig',[
            'experience'=>$Ukexperience,
            'form'=>$form->createView()
        ]);

    }

    /**
     * Suppression d une prestation
     * @Route("/admin/experience/english/{id}/delete",name="admin_experienceeng_delete")
     * @param Ukexperience $Ukexperience
     * @param EntityManagerInterface $manager
     * @return Response
     */
    public function deleteExperience(Ukexperience $Ukexperience,EntityManagerInterface $manager){
     
        $manager->remove($Ukexperience);
        $manager->flush();
    
        $this->addFlash('success',"Experience supprimée avec succès.");

        return $this->redirectToRoute("admin_experienceeng_list");}
    
}
