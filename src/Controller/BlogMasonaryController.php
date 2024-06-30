<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BlogMasonaryController extends AbstractController
{
    #[Route('/blog-masonary.html', name: 'app_blog_masonary')]
    public function index(): Response
    {
        return $this->render('blog_masonary/index.html.twig', [
            'controller_name' => 'BlogMasonaryController',
        ]);
    }
}
