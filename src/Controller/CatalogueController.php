<?php

namespace App\Controller;

use App\Repository\ProduitRepository;
use App\Repository\RubriqueRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CatalogueController extends AbstractController
{
    #[Route('/catalogue/{id}', name: 'app_catalogue_actif', methods: ['GET'])]
    public function indexcat(ProduitRepository $produitRepository, RubriqueRepository $rubriqueRepository, $id): Response
    {
        return $this->render('catalogue.html.twig', [
            'produits' => $produitRepository->findAll(),
            'rubriques' => $rubriqueRepository->findAll(),
            'id' => $id,
            ]);
    }


    #[Route('/catalogue', name: 'app_catalogue')]
        public function index(ProduitRepository $produitRepository, RubriqueRepository $rubriqueRepository): Response
        {
            return $this->render('catalogue.html.twig', [
                'produits' => $produitRepository->findAll(),
                'rubriques' => $rubriqueRepository->findAll(),
                'id' => null,
                ]);
        }
}
