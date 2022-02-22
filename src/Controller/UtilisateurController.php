<?php

namespace App\Controller;

use App\Entity\Nouvutilisateur;
use App\Form\UtilisateurType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class UtilisateurController extends AbstractController
{

    /**
     * @Route("utilisateurForm")
     */

    function createUtilisateurForm()
    {
        $utilisateur = new Nouvutilisateur();
        $request = Request::createFromGlobals();

        /*
        appel de la méthode createFormBuilder appartenant à AbstractController
        elle prend 1 paramètre : l'instance de l'entité
        */

        /*
        $form = $this->createFormBuilder($utilisateur);
        $form->add('nom', TextType::class);
        $form->add('email', EmailType::class);
        $form->add('date', DateType::class);
        $form->add('sauvegarde', SubmitType::class);
        $form = $form->getForm();
        */
        $form = $this->createForm(UtilisateurType::class, $utilisateur);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // récupération d'un objet contenant les valeurs saisies dans le formulaire
            $utilisateurInfos = $form->getData();
            /* création d'un objet $entityManager qui va s'occuper de toutes nos entités et
            permet les intéractions entre entités et bases de données */
            $entityManager = $this->getDoctrine()->getManager();
            /* demande à l'entityManager de faire persister l'objet que l'on vient de créer,
            $utilisateurInfos
            la méthode persist prépare l'opération */
            $entityManager->persist($utilisateurInfos);
            // demande d'exécution de l'opération de la méthode flush
            $entityManager->flush();

            return new Response(('Formulaire valide'));
        } else {
            return $this->render('form.html.twig', ['utilisateurForm' => $form->createView()]);
        }
    }
}
