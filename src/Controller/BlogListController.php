<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BlogListController extends AbstractController
{
    #[Route('/blog-list.html', name: 'app_blog_list')]
    public function index(): Response
    {
        return $this->render('blog_list/index.html.twig', [
            'controller_name' => 'BlogListController',
        ]);
    }
}
