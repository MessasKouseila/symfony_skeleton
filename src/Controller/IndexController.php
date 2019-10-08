<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class IndexController extends AbstractController
{
    public function indexAction()
    {
        return new JsonResponse(
            "Bienvenue sur la page d'accueil.",
            Response::HTTP_OK,
            ['Content-Type', 'application/json', 'charset=UTF-8'],
            true
        );
    }

}