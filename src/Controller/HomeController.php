<?php

namespace App\Controller;

use App\Entity\Visiteur;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="connexion")
     */
    public function connexion(): Response
    {
        return $this->render('home/connection.html.twig');
    }

    /**
     * @Route("/menu/{id}", name="menu")
     */
    public function menu($id): Response
    {
        $repository = $this->getDoctrine()->getRepository(Visiteur::class);
        $visiteur = $repository->find($id);
        $mois=$this->getNameMonth();
        $fiches = $visiteur->getFiches();
        $lastFicheNum = \count($fiches) - 1;
        $lastFiche = $fiches[$lastFicheNum];
        dump($lastFiche);
        return $this->render('home/menu.html.twig', ['lesFiches' => $fiches,'mois' => $mois,'lastFiche' => $lastFiche]);
    }
















    
    public function getNameMonth()
    {
        $name="Janvier";
        $i=date("m");
        switch ($i) 
        {
            case "01":
                break;
            case "02":
                $name="Février";
                break;
            case "03":
                $name="Mars";
                break;
            case "04":
                $name="Avril";
                break;
            case "05":
                $name="Mai";
            break;
            case "06":
                $name="Juin";
            break;
            case "07":
                $name="Juillet";
            break;
            case "08":
                $name="Août";
            break;
            case "09":
                $name="Septembre";
            break;
            case "10":
                $name="Octobre";
            break;
            case "11":
                $name="Novembre";
            break;
            case "12":
                $name="Décembre";
            break;
        }
        return $name;
    }
}
