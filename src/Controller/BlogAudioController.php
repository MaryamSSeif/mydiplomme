<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BlogAudioController extends AbstractController
{
    #[Route('blog-details-audio.html', name: 'app_blog_audio')]
    public function index(): Response
    {
        return $this->render('blog_audio/index.html.twig', [
            'controller_name' => 'BlogAudioController',
        ]);
    }
}
