<?php

namespace App\Entity;

class Annonce{
    private $id;
    private $titre;
    private $auteur;
    private $contenu;

    function getId(){
        return $this->id;
    }
    function setId($id){
        $this->id = $id;
    }

    function getTitre(){
        return $this->titre;
    }
    function setTitre($titre){
        $this->titre=$titre;
    }

    function getAuteur(){
        return $this->auteur;
    }
    function setAuteur($auteur){
        $this->auteur = $auteur;
    }

    function getContenu(){
        return $this->contenu;
    }
    function setContenu($contenu){
        $this->contenu = $contenu;
    }
}