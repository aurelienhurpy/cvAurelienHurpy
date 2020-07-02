<?php

namespace App\Controller;

use App\Entity\Intro;
use App\Form\IntroType;
use App\Service\Pagination;
use App\Repository\IntroRepository;
use App\Controller\AdminIntroController;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminInfosController extends AbstractController
{
    
    /**
     * @Route("/admin/intro/info\{page<\d+>?1}", name="admin_infos")
     */
    public function info(EntityManagerInterface $manager)
    {

        return $this->render('admin/intro/infos.html.twig');
    }

    
    /**
     * @Route("/admin/project/info\{page<\d+>?1}", name="admin_project_infos")
     */
    public function infoProject(EntityManagerInterface $manager)
    {

        return $this->render('admin/project/infos.html.twig');
    }

     /**
     * @Route("/admin/experience/info\{page<\d+>?1}", name="admin_experience_infos")
     */
    public function infoExperience(EntityManagerInterface $manager)
    {

        return $this->render('admin/experience/infos.html.twig');
    }

     /**
     * @Route("/admin/training/info\{page<\d+>?1}", name="admin_training_infos")
     */
    public function infoTraining(EntityManagerInterface $manager)
    {

        return $this->render('admin/training/infos.html.twig');
    }




       
}
