<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeMovieController extends AbstractController
{
    #[Route('/home-movie.html', name: 'app_home_movie')]
    public function index(): Response
    {
        return $this->render('home_movie/index.html.twig', [
            'controller_name' => 'HomeMovieController',
        ]);
    }
}
