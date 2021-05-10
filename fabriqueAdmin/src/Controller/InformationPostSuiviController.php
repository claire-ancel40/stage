<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class InformationPostSuiviController extends AbstractController
{
    /**
     * @Route("/information/post/suivi", name="information_post_suivi")
     */
    public function index()
    {
        return $this->render('information_post_suivi/index.html.twig', [
            'controller_name' => 'InformationPostSuiviController',
        ]);
    }
}
