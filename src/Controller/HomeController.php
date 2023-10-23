<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home.html.twig',[

        ]);
    }

    #[Route('/categoria', name: 'app_category')]
    public function category(): Response
    {
        return $this->render('category.html.twig',[

        ]);
    }
}