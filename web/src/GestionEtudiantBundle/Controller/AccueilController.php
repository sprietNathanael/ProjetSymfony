<?php

namespace GestionEtudiantBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AccueilController extends Controller
{
    public function modulesAction($id){
        $em = $this->getDoctrine()->getManager();
        $products = $em->getRepository('GestionEtudiantBundle:Ue')
            ->findBy(['semestre' => $id]);
        return $this->render('GestionEtudiantBundle:Default:listemodules.html.twig', array("ues"=>$products));
    }



    public function indexAction(){
        $em = $this->getDoctrine()->getManager();
        $semestre = $em->getRepository('GestionEtudiantBundle:Ue')->createQueryBuilder('ue')
            ->select('ue.semestre')
            ->groupBy('ue.semestre')
            ->getQuery()->getResult();

        return $this->render('GestionEtudiantBundle:Default:listesemestre.html.twig', array("semestres"=>$semestre));
    }
}
