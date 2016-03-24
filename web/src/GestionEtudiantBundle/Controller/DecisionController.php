<?php

namespace GestionEtudiantBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DecisionController extends Controller
{
    public function indexAction($id_etudiant){
        $decision = $this->getDoctrine()
            ->getRepository('GestionEtudiantBundle:Decisionjury')
            ->findBy(['numEtudiant'=>$id_etudiant]);
        return $this->render('GestionEtudiantBundle:Default:Decision.html.twig', array("decision"=>$decision));
    }
}
