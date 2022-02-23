<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BonjourController extends AbstractController
{
    /**
     * @Route("bonjour/{parametre}", requirements = {"parametre"="\d+"}, methods={"GET"})
     */

    function bonjourNombre($parametre)
    {
        $bienvenue = "Bonjour " . $parametre;

        // déclaration et initialisation de la variable $titre
        $titre = "liste des utilisateurs - accès via un nombre";
        /* 
        déclaration et initialisation du tableau stockant une liste d'utilisateurs
        comment pour toute méthode (déclaration et appel), il n'est pas nécessaire d'avoir une correspondance
        exacte entre les noms des variables php et ceux des variables de twig
        */
        $listeUtilisateurs = ["Jean", "Pierre", "Louis", "Olivier"];
        /*
        appel de la méthode render
        2 paramètres :
        - le nom de la vue (le template)
        - un tableau associatif contenant les paramètres à passer au template :
            association des variables php aux variables twig
        */
        return $this->render("bonjour.html.twig", [
            "titre" => $titre,
            "array" => $listeUtilisateurs,
            "bienvenue" => $bienvenue
        ]);

        // déclaration d'une variable $parametres qui contient l'ensemble des paramètres de la requête GET
        // $parametres = $request->query->all();
        // traitement pour afficher chaque paramètre
        /*
        $message = "Les paramètres qui ont été passés par l'URL sont : <br>";
        foreach ($parametres as $key => $value) {
            $message = $message . ' - ' . $key . ' : ' . $value . '<br>';
        }
        return new Response($message);
        */
    }

    /**
     * @Route("bonjour/{parametre}")
     */

    function bonjourDefaut($parametre)
    {
        $bienvenue = "Bonjour " . $parametre;

        // déclaration et initialisation de la variable $titre
        $titre = "liste des utilisateurs - accès via une chaîne de caractères";
        /* 
        déclaration et initialisation du tableau stockant une liste d'utilisateurs
        comment pour toute méthode (déclaration et appel), il n'est pas nécessaire d'avoir une correspondance
        exacte entre les noms des variables php et ceux des variables de twig
        */
        $listeUtilisateurs = ["Jean", "Pierre", "Louis", "Olivier"];
        /*
        appel de la méthode render
        2 paramètres :
        - le nom de la vue (le template)
        - un tableau associatif contenant les paramètres à passer au template :
            association des variables php aux variables twig
        */
        return $this->render("bonjour.html.twig", [
            "titre" => $titre,
            "array" => $listeUtilisateurs,
            "bienvenue" => $bienvenue
        ]);

        // déclaration d'une variable $parametres qui contient l'ensemble des paramètres de la requête GET
        // $parametres = $request->query->all();
        // traitement pour afficher chaque paramètre
        /*
        $message = "Les paramètres qui ont été passés par l'URL sont : <br>";
        foreach ($parametres as $key => $value) {
            $message = $message . ' - ' . $key . ' : ' . $value . '<br>';
        }
        return new Response($message);
        */
    }

    /**
     * @Route("bienvenue")
     */
    function bienvenue()
    {
        return $this->render("bienvenue.html.twig");
    }

    /**
     * @Route("bienvenue/{nom}", name="bienvenueAvecNom")
     */
    function bienvenueAvecNom($nom)
    {
        return new Response('Bienvenue ' . $nom);
    }
}
