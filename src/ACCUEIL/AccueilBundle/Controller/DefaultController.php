<?php

namespace ACCUEIL\AccueilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ACCUEILAccueilBundle:Default:index.html.twig');
    }
}
