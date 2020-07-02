<?php

namespace App\Controller;

use App\Entity\Intro;
use App\Entity\Ukintro;
use App\Form\IntroType;
use App\Service\Pagination;
use App\Form\EnglishIntroType;
use App\Repository\IntroRepository;
use App\Repository\UkintroRepository;
use App\Controller\AdminIntroController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminIntroController extends AbstractController
{

// version française

    /**
     * @Route("/admin/intro/french\{page<\d+>?1}", name="admin_intro_list")
     */
    public function index(IntroRepository $repo,$page,Pagination $paginationService)
    {
        $paginationService->setEntityClass(Intro::class)
                        ->setPage($page)
                        //->setRoute('admin_intro_list')
                        ;

        return $this->render('admin/intro/french/index.html.twig', [
            'pagination'=>$paginationService

        ]);
    }

        /**
     * permet de creer une annonce
     * @Route("/admin/intro/french/new",name="intro_create")
     * @return response
     */

    public function create(Request $request,EntityManagerInterface $manager){

        // fabrcant de formulaire : FORMBUILDER

        $intro = new Intro();

        // on lance la fabrication et la configuration de notre formulaire

        $form = $this->createForm(IntroType::class,$intro);

        // recuperation des données du formulaire
        $form -> handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            // si le fomulaire est soumis Et si le formulaire est valide, on demande à doctrine de sauvegarder ces données dans l'objet manager( dans la bdd)
            //pour chaque image supplémentaire ajoutée

            // foreach($intro->getCoverImage() as $image){

            //     // on relie l'image à l'annonce et on modifie l'annonce
            //     $image->setIntro($intro);

            //     // on sauvegarde les images

            //     $manager->persist($image);
            // }

           
            $manager ->persist($intro);
            $manager->flush();

            $this->addFlash('success',"Eléments de présentation créés avec succès");

            return $this->redirectToRoute('admin_intro_list',['slug'=>$intro->getSlug()]);
        }

        return $this->render('admin/intro/french/new.html.twig',['form'=>$form->createView()]);

    }

    /**
     * Permet de modifier une annonce dans la partie admin
     * @Route("admin/intro/french/{id}/edit",name="admin_intro_edit")
     * @param Intro $intro
     * @param Request $request
     * @param EntityManagerInterface $manager
     * @return Response
     */
    public function edit(Intro $intro,Request $request,EntityManagerInterface $manager){

        $form = $this->createForm(IntroType::class,$intro);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $manager->persist($intro);
            $manager->flush();

            $this->addFlash('success',"Page de présentation modifiée avec succès");

            return $this->redirectToRoute('admin_intro_list');

        }

        return $this->render('admin/intro/french/edit.html.twig',[
            'intro'=>$intro,
            'form'=>$form->createView()
        ]);

    }



// version anglaise

    /**
     * @Route("/admin/intro/english\{page<\d+>?1}", name="admin_introEnglish_list")
     */
    public function indexIntro(UkintroRepository $repo,$page,Pagination $paginationService)
    {
        $paginationService->setEntityClass(Ukintro::class)
                        ->setPage($page)
                        //->setRoute('admin_introEnglish_list')
                        ;

        return $this->render('admin/intro/english/index.html.twig', [
            'pagination'=>$paginationService

        ]);
    }

        /**
     * permet de creer une annonce
     * @Route("/admin/intro/english/new",name="intro_create_english")
     * @return response
     */

    public function createIntro(Request $request,EntityManagerInterface $manager){

        // fabrcant de formulaire : FORMBUILDER

        $Ukintro = new Ukintro();

        // on lance la fabrication et la configuration de notre formulaire

        $form = $this->createForm(EnglishIntroType::class,$Ukintro);

        // recuperation des données du formulaire
        $form -> handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            // si le fomulaire est soumis Et si le formulaire est valide, on demande à doctrine de sauvegarder ces données dans l'objet manager( dans la bdd)
            //pour chaque image supplémentaire ajoutée

            // foreach($intro->getCoverImage() as $image){

            //     // on relie l'image à l'annonce et on modifie l'annonce
            //     $image->setIntro($intro);

            //     // on sauvegarde les images

            //     $manager->persist($image);
            // }

           
            $manager ->persist($Ukintro);
            $manager->flush();

            $this->addFlash('success',"Eléments de présentation créés avec succès");

            return $this->redirectToRoute('admin_introEnglish_list',['slug'=>$Ukintro->getSlug()]);
        }

        return $this->render('admin/intro/english/new.html.twig',['form'=>$form->createView()]);

    }

    /**
     * Permet de modifier une annonce dans la partie admin
     * @Route("admin/intro/english/{id}/edit",name="admin_introenglish_edit")
     * @param Ukintro $Ukintro
     * @param Request $request
     * @param EntityManagerInterface $manager
     * @return Response
     */
    public function editIntro(Ukintro $Ukintro,Request $request,EntityManagerInterface $manager){

        $form = $this->createForm(EnglishIntroType::class,$Ukintro);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $manager->persist($Ukintro);
            $manager->flush();

            $this->addFlash('success',"Page de présentation modifiée avec succès");

            return $this->redirectToRoute('admin_introEnglish_list');

        }

        return $this->render('admin/intro/english/edit.html.twig',[
            'intro'=>$Ukintro,
            'form'=>$form->createView()
        ]);

    }

       
}
