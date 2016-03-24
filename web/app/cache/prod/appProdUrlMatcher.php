<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // gestion_etudiant_modules
        if (preg_match('#^/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gestion_etudiant_modules')), array (  '_controller' => 'GestionEtudiantBundle\\Controller\\AccueilController::modulesAction',));
        }

        // gestion_etudiant_accueil
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'gestion_etudiant_accueil');
            }

            return array (  '_controller' => 'GestionEtudiantBundle\\Controller\\AccueilController::indexAction',  '_route' => 'gestion_etudiant_accueil',);
        }

        if (0 === strpos($pathinfo, '/etudiants')) {
            // gestion_etudiant_homepage
            if (rtrim($pathinfo, '/') === '/etudiants') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'gestion_etudiant_homepage');
                }

                return array (  '_controller' => 'GestionEtudiantBundle\\Controller\\EtudiantController::indexAction',  '_route' => 'gestion_etudiant_homepage',);
            }

            // gestion_etudiant_fiche
            if (preg_match('#^/etudiants/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gestion_etudiant_fiche')), array (  '_controller' => 'GestionEtudiantBundle\\Controller\\EtudiantController::ficheAction',));
            }

        }

        // gestion_etudiant_notes
        if (preg_match('#^/(?P<id_module>[^/]++)/notes$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gestion_etudiant_notes')), array (  '_controller' => 'GestionEtudiantBundle\\Controller\\NotesController::indexAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
