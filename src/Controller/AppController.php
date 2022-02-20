<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        return $this->render('app/index.html.twig', 
        );
    }


    #[Route('/a-propos', name: 'about')]
    public function about(): Response
    {
        return $this->render('app/about.html.twig');
    }

    #[Route('/contact', name: 'contact')]
    public function contact(): Response
    {
        return $this->render('app/contact.html.twig', [
            'controller_name' => 'AppController',
        ]);
    }

    #[Route('/blog', name: 'blog')]
    public function blog(): Response
    {
        $articles =[
            ['title'=>'Titre 1', 
            'description'=>'description 1',
            'content'=>'blablablabla    blaaa'],

            ['title'=>'Titre 2', 
            'description'=>'description 1',
            'content'=>'blablablabla    blaaa'],
            
            ['title'=>'Titre 2', 
            'description'=>'description 1',
            'content'=>'blablablabla    blaaa'],
            
        ];
        return $this->render('app/blog.html.twig', [
            'articles' => $articles,
        ]);
    }




}
