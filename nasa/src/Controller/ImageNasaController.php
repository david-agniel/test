<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ImageNasaController extends AbstractController
{
    /**
     * @Route("/", name="app_image_nasa")
     */
    public function index(): Response
    {
        return $this->render('image_nasa/index.html.twig', [
            'controller_name' => 'ImageNasaController',
        ]);
    }
}
