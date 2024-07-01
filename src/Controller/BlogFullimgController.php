<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BlogFullimgController extends AbstractController
{
    #[Route('/blog-details-full-img.html', name: 'app_blog_fullimg')]
    public function index(): Response
    {
        return $this->render('blog_fullimg/index.html.twig', [
            'controller_name' => 'BlogFullimgController',
        ]);
    }
}
