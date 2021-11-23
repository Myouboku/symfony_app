<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ExemplesController extends AbstractController
{
    function exemple()
    {
        return $this->render("exempleTwig.html.twig");
    }
}
