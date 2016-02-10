<?php

namespace GestionEtudiantBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        var_dump($this->getDoctrine()->getRepository('GestionEtudiantBundle:Professeur')->findAll());
        return $this->render('GestionEtudiantBundle:Default:index.html.twig');
    }
}
