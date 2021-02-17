<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IncidenciaController extends AbstractController
{
    /**
     * @Route("/incidencia", name="incidencia")
     */
    public function index(): Response
    {
        return $this->render('incidencia/index.html.twig', [
            'controller_name' => 'IncidenciaController',
        ]);
    }
}
