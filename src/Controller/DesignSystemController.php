<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class DesignSystemController extends AbstractController
{
    #[Route('/design-system', name: 'app_design_system')]
    public function index(): Response
    {
        return $this->render('design_system/index.html.twig', [
            'controller_name' => 'DesignSystemController',
        ]);
    }
}
