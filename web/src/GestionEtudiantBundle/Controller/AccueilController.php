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
<<<<<<< HEAD
        $semestres = $em->getRepository('GestionEtudiantBundle:Ue')->createQueryBuilder('ue')
            ->select('ue.semestre')
            ->groupBy('ue.semestre')
            ->getQuery()->getResult();
        return $this->render('GestionEtudiantBundle:Default:listesemestre.html.twig', array("semestres"=>$semestres));
=======
        $notes = $em->getRepository('GestionEtudiantBundle:Note')->createQueryBuilder('note')
            ->select('note')
            ->getQuery()->getResult();
        foreach($notes as $note){
            
        }
        return $this->render('GestionEtudiantBundle:Default:listesemestre.html.twig', array("semestres"=>$semestre));
>>>>>>> cc41e682a3ade1a532f92796f4a319c8330958d6
    }
}
