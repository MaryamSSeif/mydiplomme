<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeSportsController extends AbstractController
{
    #[Route('/home-sports.html', name: 'app_home_sports')]
    public function index(): Response
    {
        return $this->render('home_sports/index.html.twig', [
            'controller_name' => 'HomeSportsController',
        ]);
    }
}
