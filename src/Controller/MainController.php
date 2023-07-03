<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function indexAction():object
    {
        return $this->render('index.html.twig');
    }
    #[Route('/product/{name?}', name: 'product')]
    public function productsAction(Request $request):object
    {
        $product = $request->get('product');
        return $this->render('base.html.twig');
    }
}
