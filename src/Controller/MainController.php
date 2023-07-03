<?php

namespace App\Controller;

$name = 'Dawid';

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index():object
    {
        return new Response(
            '<h1>Welcome here!</h1>'
        );
    }
    #[Route('/product/{name?}', name: 'product')]
    public function products(Request $request):object
    {
        $var = $request->get('name');
        return new Response(
            '<h1>Your product is ' . $var . '!</h1>'
        );
    }
}
