<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeGadgetController extends AbstractController
{
    #[Route('/home-gadget.html', name: 'app_home_gadget')]
    public function index(): Response
    {
        return $this->render('home_gadget/index.html.twig', [
            'controller_name' => 'HomeGadgetController',
        ]);
    }
}
