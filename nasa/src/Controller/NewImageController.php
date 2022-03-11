<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NewImageController extends AbstractController
{
    /**
     * @Route("/new/image", name="app_new_image")
     */
    public function index(): Response
    {
        return $this->render('new_image/index.html.twig', [
            'controller_name' => 'NewImageController',
        ]);
    }
}
