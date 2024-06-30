<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeMagazineController extends AbstractController
{
    #[Route('/home-magazine.html', name: 'app_home_magazine')]
    public function index(): Response
    {
        return $this->render('home_magazine/index.html.twig', [
            'controller_name' => 'HomeMagazineController',
        ]);
    }
}
