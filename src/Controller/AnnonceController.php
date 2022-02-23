<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Annonce;

class AnnonceController extends AbstractController
{
    /**
     * @Route("listeAnnonces", name="listeAnnonces")
     */

     function listeAnnonces(){
         $listeAnnonces=$this->getDoctrine()->getRepository(Annonce::class)->findAll();
         return $this->render('annonces.html.twig',['listeannonces'=>$listeAnnonces]);
     }

     function ajoutAnnonce(){
         return $this->render('ajoutannonce.html.twig');
     }
}