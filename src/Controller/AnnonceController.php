<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AnnonceController extends AbstractController
{
    /**
     * @Route("listeAnnonces", name="listeAnnonces")
     */

     function listeAnnonces(){
         $listeAnnonces=$this->getDoctrine()->getRepository(Annonce::class)->findAll();
         return $this->render('annonces.html.twig',['listeannonces'=>$listeAnnonces]);
     }
}