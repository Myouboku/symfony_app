<?php

namespace App\Entity;

class Utilisateur
{
    protected $nom;
    protected $email;
    protected $date;

    function getNom()
    {
        return $this->nom;
    }
    function setNom($nom)
    {
        $this->nom = $nom;
    }

    function getEmail()
    {
        return $this->email;
    }
    function setEmail($email)
    {
        $this->email = $email;
    }

    function getDate()
    {
        return $this->date;
    }
    function setDate($date)
    {
        $this->date = $date;
    }
}
