<?php

namespace App\Controller;

use App\Entity\Apprenant;
use App\Entity\Formation;
use App\Entity\Promotion;
use App\Entity\Situations;
use App\Repository\ApprenantRepository;
use App\Repository\FormationRepository;
use App\Repository\PromotionRepository;
use App\Repository\PromoAppreRepository;
use App\Repository\SituationsRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\PostFormationRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\SuiviPostFormationRepository;
use Doctrine\Common\Annotations\AnnotationReader;
use App\Repository\SituationApprenantPeriodeRepository;
use Symfony\Component\HttpFoundation\Request as Request;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader;
use Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory;

class SuiviPostFormationController extends AbstractController
{
    /**
     * afficher un apprenant
     * @Route("/suivi/post/formation", name="suivi_post_formation")
     */
    public function index(PromoAppreRepository $promoAppreRepository, PaginatorInterface $paginator, ApprenantRepository $apprenantRepository, SuiviPostFormationRepository $suiviPostFormationRepository, PostFormationRepository $postFormationRepository, PromotionRepository $promotionRepository, FormationRepository $formationRepository, Request $request)
    {
        // dump($request->request->get("promotions"));
        $promotionsId = $request->request->get("promotions");
        $apprenants=$promoAppreRepository->findAllAppr();
        dump($promoAppreRepository);
        $selectedPromotion = $promotionRepository->findBy(['id'=>$promotionsId]);
        // dump($selectedPromotion);

        // dump($request->request->get("formation"));
        $donnee = $this->getDoctrine()->getRepository(Apprenant::class)->findAll();
        $apprenants=$paginator->paginate(
            $donnee,
            $request->query->getInt('page', 1),
            10
        );
        // $apprenants = $apprenantRepository->findAll();
        $suiviPostFormations = $suiviPostFormationRepository->findAll();
        $postFormations = $postFormationRepository->findAll();
        $promotions = $promotionRepository->findAll();        
        $formations = $formationRepository->findAll();
        return $this->render('suivi_post_formation/index.html.twig', [
            'suiviPostFormations' => $suiviPostFormations,
            'apprenants' => $apprenants,
            'postFormations' => $postFormations,
            'promotions' => $promotions,
            'formations' => $formations
        ]);        
    }
    /**
     * formulaire de saisi pour le suivi post formation des apprenants 
     * 
     * @Route("/formulaire/de/suivi/}", name="formulaire_de_suivi")
     */
    public function formlaire_suivi(SituationApprenantPeriodeRepository $situationApprenantPeriodeRepository, SituationsRepository $situationsRepository, Request $request )
    {
        $situationApprenantPeriode = $situationApprenantPeriodeRepository->findAll();
        $situations = $situationsRepository->findAll();
        dump($situationApprenantPeriode);
        // $situationsId = $request->request->get("situations");
         
        // $selectedPromotion = $promotionRepository->findBy(['id'=>$promotionsId]);
            return $this->render('suivi_post_formation/formulaireDeSuivi.html.twig', [
                'controller_name' => 'suiviPostFormation',
                'situations'=> $situations
            ]);
    }
     /**
     * @Route("/changeSelectActivite/{id}", name="changeSelectActivite")
     */
    public function changeSelectActivites(Situations $situations)
    {
        
        // $apprenant = $situations->getApprenant();
        $classMetadataFactory = new ClassMetadataFactory(new AnnotationLoader(new AnnotationReader()));
        $normalizer = new ObjectNormalizer($classMetadataFactory);
        $serializer = new Serializer([$normalizer]);
        $apprenantArray = $serializer->normalize($situations, null, ['groups' => 'group1']);
        return $this->json($situationsArray);
        
    }


    /**
     * @Route("/maj/suivi/formation", name="maj_suivi_formation")
     */
    public function maj_suivi_formation(FormationRepository $formationRepository)
    {
        return $this->render('suivi_post_formation/index.html.twig', [
            "formations" => $formationRepository->findAll()
        ]);
    }

    /**
     * @Route("/changeFormationSelect/{id}", name="changeFormationSelect")
     */
    public function changeFormationSelect(Formation $formation)
    {
        
        $promotions = $formation->getPromotions();
        $classMetadataFactory = new ClassMetadataFactory(new AnnotationLoader(new AnnotationReader()));
        $normalizer = new ObjectNormalizer($classMetadataFactory);
        $serializer = new Serializer([$normalizer]);
        $promotionsArray = $serializer->normalize($promotions, null, ['groups' => 'group1']);
        return $this->json($promotionsArray);
        
    }

    

    /**
     * récupérer des données
     * @Route("/recup/donnee"), name="recup_donnee")
     */
    //  public public function index()
    //  {
    //     return $this->render('recup_donnee.html.twig')

    //  }
    // public function apprenant(PromoAppreRepository $repo)
    // {
    //     $apprenant=$repo->findBy(['apprenant'=> $this->getUser()]);

    //     return $this->render('apprenant/profil.html.twig', [
    //         'apprenant'=>$apprenant
    //     ]);
    // } 

}


