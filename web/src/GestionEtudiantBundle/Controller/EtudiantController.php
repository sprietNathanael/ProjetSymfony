<?php

namespace GestionEtudiantBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EtudiantController extends Controller
{
    public function indexAction(){
        $etudiants = $this->getDoctrine()
            ->getRepository('GestionEtudiantBundle:Etudiant')
            ->findAll();
        return $this->render('GestionEtudiantBundle:Default:listetudiant.html.twig', array("etudiants"=>$etudiants));
    }

    public function ficheAction($id){
        $etudiant = $this->getDoctrine()
            ->getRepository('GestionEtudiantBundle:Etudiant')
            ->find($id);
        return $this->render('GestionEtudiantBundle:Default:fiche.html.twig', array("etudiant"=>$etudiant));
    }
}
