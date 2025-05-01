<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function home(): Response
    {
        return $this->render('home/index.html.twig');
    }

    #[Route('/about', name: 'about')]
    public function about(): Response
    {
        return $this->render('home/about.html.twig');
    }

    #[Route('/contact', name: 'contact')]
    public function contact(): Response
    {
        return $this->render('home/contact.html.twig');
    }

    #[Route('/blog', name: 'blog')]
    public function blog(): Response
    {
        return $this->render('home/blog.html.twig');
    }

    #[Route('/destination', name: 'destination')]
    public function destination(): Response
    {
        return $this->render('home/destination.html.twig');
    }

    #[Route('/guide', name: 'guide')]
    public function guide(): Response
    {
        return $this->render('home/guide.html.twig');
    }

    #[Route('/package', name: 'package')]
    public function package(): Response
    {
        return $this->render('home/package.html.twig');
    }

    #[Route('/service', name: 'service')]
    public function service(): Response
    {
        return $this->render('home/service.html.twig');
    }

    #[Route('/single', name: 'single')]
    public function single(): Response
    {
        return $this->render('home/single.html.twig');
    }

    #[Route('/testimonial', name: 'testimonial')]
    public function testimonial(): Response
    {
        return $this->render('home/testimonial.html.twig');
    }
}
