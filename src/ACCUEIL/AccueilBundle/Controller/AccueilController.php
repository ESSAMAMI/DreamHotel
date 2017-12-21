<?php

namespace ACCUEIL\AccueilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AccueilController extends Controller
{
    public function indexAction()
    {
        return $this->render('ACCUEILAccueilBundle:Accueil:accueil.html.twig');
    }
}
