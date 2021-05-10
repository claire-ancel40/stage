<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class EvaluationsController extends AbstractController
{
    /**
     * @Route("/evaluations", name="evaluations")
     */
    public function index()
    {
        return $this->render('evaluations/index.html.twig', [
            'controller_name' => 'EvaluationsController',
        ]);
    }
}
