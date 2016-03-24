<?php

namespace GestionEtudiantBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NotesController extends Controller
{
    public function indexAction($id_module)
    {
        $em = $this->getDoctrine()->getManager();
        $products = $em->getRepository('GestionEtudiantBundle:Note')
            ->findBy(['idModule' => $id_module]);
        $tableau = [];
        foreach ($products as $note) {
            $tableau[$note->getAnnee()][] = $note;

        }
        $nom_module = $products[0]->getIdModule()->getNomModule();
        return $this->render('GestionEtudiantBundle:Default:listenotes.html.twig', array("notes" => $tableau, "nomModule" => $nom_module));
    }
}
