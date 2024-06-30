<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BlogDiteailsvideoController extends AbstractController
{
    #[Route('/blog-details-video.html', name: 'app_blog_diteailsvideo')]
    public function index(): Response
    {
        return $this->render('blog_diteailsvideo/index.html.twig', [
            'controller_name' => 'BlogDiteailsvideoController',
        ]);
    }
}
