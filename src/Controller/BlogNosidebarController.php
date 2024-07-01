<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BlogNosidebarController extends AbstractController
{
    #[Route('/blog-details-nosidebar.html', name: 'app_blog_nosidebar')]
    public function index(): Response
    {
        return $this->render('blog_nosidebar/index.html.twig', [
            'controller_name' => 'BlogNosidebarController',
        ]);
    }
}
