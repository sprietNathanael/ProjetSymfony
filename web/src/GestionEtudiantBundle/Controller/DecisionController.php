<?php

namespace GestionEtudiantBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DecisionController extends Controller
{
    public function indexAction($annee, $semestre, $id_etudiant){
        $repository = $this->getDoctrine()
            ->getRepository('GestionEtudiantBundle:Decisionjury');
        $query = $repository->createQueryBuilder('d')
            ->where('d.numEtudiant = :numEtu')
            ->andWhere('d.semestre = :semestre')
            ->andWhere('d.annee = :annee')
            ->setParameter('numEtu', $id_etudiant)
            ->setParameter('semestre', $semestre)
            ->setParameter('annee', $annee)
            ->getQuery();
        $product = $query->setMaxResults(1)->getOneOrNullResult();
        return $this->render('GestionEtudiantBundle:Default:decision.html.twig', array("decision"=>$product));
    }
}
