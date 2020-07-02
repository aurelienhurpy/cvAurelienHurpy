<?php

namespace App\Controller;

use App\Entity\Training;
use App\Form\TrainingType;
use App\Entity\Ukeducation;
use App\Service\Pagination;
use App\Form\EnglishTrainingType;
use App\Repository\TrainingRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\UkeducationRepository;
use App\Controller\AdminTrainingController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminTrainingController extends AbstractController
{

// version française

    /**
     * @Route("/admin/training/french\{page<\d+>?1}", name="admin_training_list")
     */
    public function index(TrainingRepository $repo,$page,Pagination $paginationService)
    {
        $paginationService->setEntityClass(Training::class)
                        ->setPage($page)
                        //->setRoute('admin_training_list')
                        ;

        return $this->render('admin/training/french/index.html.twig', [
            'pagination'=>$paginationService

        ]);
    }

        /**
     * permet de creer une prestation
     * @Route("/admin/training/french/new",name="training_create")
     * @return response
     */

    public function create(Request $request,EntityManagerInterface $manager){

        // fabrcant de formulaire : FORMBUILDER

        $training = new Training();

        // on lance la fabrication et la configuration de notre formulaire

        $form = $this->createForm(TrainingType::class,$training);

        // recuperation des données du formulaire
        $form -> handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
           
            $manager ->persist($training);
            $manager->flush();

            $this->addFlash('success',"Formation créée avec succès");

            return $this->redirectToRoute('admin_training_list',['slug'=>$training->getSlug()]);
        }

        return $this->render('admin/training/french/new.html.twig',['form'=>$form->createView()]);

    }

    /**
     * Permet de modifier une actualité dans la partie admin
     * @Route("admin/training/french/{id}/edit",name="admin_training_edit")
     * @param Training $training
     * @param Request $request
     * @param EntityManagerInterface $manager
     * @return Response
     */
    public function edit(Training $training,Request $request,EntityManagerInterface $manager){

        $form = $this->createForm(TrainingType::class,$training);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $manager->persist($training);
            $manager->flush();

            $this->addFlash('success',"Formation modifiée avec succès");

            return $this->redirectToRoute('admin_training_list');

        }

        return $this->render('admin/training/french/edit.html.twig',[
            'experience'=>$training,
            'form'=>$form->createView()
        ]);

    }

    /**
     * Suppression d une prestation
     * @Route("/admin/training/french/{id}/delete",name="admin_training_delete")
     * @param Training $training
     * @param EntityManagerInterface $manager
     * @return Response
     */
    public function delete(Training $training,EntityManagerInterface $manager){
     
        $manager->remove($training);
        $manager->flush();
    
        $this->addFlash('success',"Formation supprimée avec succès.");

        return $this->redirectToRoute("admin_training_list");}





// version anglaise

            /**
     * @Route("/admin/training/english\{page<\d+>?1}", name="admin_trainingeng_list")
     */
    public function indexEducation(UkeducationRepository $repo,$page,Pagination $paginationService)
    {
        $paginationService->setEntityClass(Ukeducation::class)
                        ->setPage($page)
                        //->setRoute('admin_trainingeng_list')
                        ;

        return $this->render('admin/training/english/index.html.twig', [
            'pagination'=>$paginationService

        ]);
    }

        /**
     * permet de creer une prestation
     * @Route("/admin/training/english/new",name="trainingeng_create")
     * @return response
     */

    public function createEducation(Request $request,EntityManagerInterface $manager){

        // fabrcant de formulaire : FORMBUILDER

        $Ukeducation = new Ukeducation();

        // on lance la fabrication et la configuration de notre formulaire

        $form = $this->createForm(EnglishTrainingType::class,$Ukeducation);

        // recuperation des données du formulaire
        $form -> handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
           
            $manager ->persist($Ukeducation);
            $manager->flush();

            $this->addFlash('success',"Formation créée avec succès");

            return $this->redirectToRoute('admin_trainingeng_list',['slug'=>$Ukeducation->getSlug()]);
        }

        return $this->render('admin/training/english/new.html.twig',['form'=>$form->createView()]);

    }

    /**
     * Permet de modifier une actualité dans la partie admin
     * @Route("admin/training/english/{id}/edit",name="admin_trainingeng_edit")
     * @param Ukeducation $Ukeducation
     * @param Request $request
     * @param EntityManagerInterface $manager
     * @return Response
     */
    public function editeducation(Ukeducation $Ukeducation,Request $request,EntityManagerInterface $manager){

        $form = $this->createForm(EnglishTrainingType::class,$Ukeducation);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $manager->persist($Ukeducation);
            $manager->flush();

            $this->addFlash('success',"Formation modifiée avec succès");

            return $this->redirectToRoute('admin_trainingeng_list');

        }

        return $this->render('admin/training/english/edit.html.twig',[
            'experience'=>$Ukeducation,
            'form'=>$form->createView()
        ]);

    }

    /**
     * Suppression d une prestation
     * @Route("/admin/training/english/{id}/delete",name="admin_trainingeng_delete")
     * @param Ukeducation $Ukeducation
     * @param EntityManagerInterface $manager
     * @return Response
     */
    public function deleteEducation(Ukeducation $Ukeducation,EntityManagerInterface $manager){
     
        $manager->remove($Ukeducation);
        $manager->flush();
    
        $this->addFlash('success',"Formation supprimée avec succès.");

        return $this->redirectToRoute("admin_trainingeng_list");}
    
        
        
       
}