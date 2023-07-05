<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function homeAction():object
    {
        return $this->render('Home/home.html.twig');
    }
    #[Route('/about', name: 'about')]
    public function aboutAction():object
    {
        return $this->render('About/about.html.twig');
    }
    #[Route('/services', name: 'services')]
    public function servicesAction():object
    {
        return $this->render('Services/services.html.twig');
    }
    #[Route('/contact', name: 'contact')]
    public function contactAction():object
    {
        return $this->render('Contact/contact.html.twig');
    }

}
