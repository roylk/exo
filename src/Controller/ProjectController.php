<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
#[Route('/project')]
class ProjectController extends AbstractController
{
    #[Route('/', name: 'list_project', methods:'GET')]
    public function list_project(): Response
    {
        return $this->render('project/index.html.twig', [
            'controller_name' => 'ProjectController',
        ]);
    }

    #[Route('/{slug}', name: 'show_project', methods:'GET')]
    public function show_project($slug): Response
    {
        return $this->render('project/index.html.twig', [
            'controller_name' => 'ProjectController',
        ]);
    }

    #[Route('/{slug}/editer', name: 'edit_project', methods:'GET,POST')]
    public function edit_project($slug)
    {
        return $this->render($lug);
    }


    #[Route('/{slug}/supprimer', name: 'delete_project', methods:'GET')]
    public function delete_project($slug)
    {
        return $this->render('project/index.html.twig', [
            'controller_name' => 'ProjectController',
        ]);
    }

    #[Route('/ajouter', name: 'add_project', methods:'GET')]
    public function add_project()
    {
        return $this->render('project/index.html.twig', [
            'controller_name' => 'ProjectController',
        ]);
    }








}
