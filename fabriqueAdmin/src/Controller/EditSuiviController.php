<?php

namespace App\Controller;

use App\Repository\SuiviPostFormationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class EditSuiviController extends AbstractController
{
   
   /**
     * afficher les apprenants avec une pagination 
     * 
     * @Route("/suivi_post_formation/{page<\d+>?1}", name="suivi_liste")
     */
    public function suivi_liste(SuiviPostFormationRepository $repo, $page)
    {
        $suivi = $repo->findBy(['suivi'=> $this->getUser()]);
        $limit = 10;
        $start = $page * $limit - $limit;
        $all = count($repo->findAllAppr());
        $pages = ceil($all / $limit);

        return $this->render('suivi_post_formation/suivi_liste.html.twig', [
            'suivi' => $repo->findBy(['id'=> $suivi], [], $limit, $start),
            'pages' => $pages,
            'page' =>$page
        ]);
    }
   
    /**
     * @Route("/edit/suivi", name="edit_suivi")
     */
    public function index()
    {
        return $this->render('edit_suivi/index.html.twig', [
            'controller_name' => 'EditSuiviController',
        ]);
    }
}
