<?php

/* GestionEtudiantBundle:Default:fiche.html.twig */
class __TwigTemplate_d608644a9c667ffb7ec2242ccf41a18005c690b31d2d4da7c7ef4da5717adb67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GestionEtudiantBundle::index.html.twig", "GestionEtudiantBundle:Default:fiche.html.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GestionEtudiantBundle::index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0aed275c584344df817005d95b2ed9cd8c83d0e276c034574e2adaff98a8169a = $this->env->getExtension("native_profiler");
        $__internal_0aed275c584344df817005d95b2ed9cd8c83d0e276c034574e2adaff98a8169a->enter($__internal_0aed275c584344df817005d95b2ed9cd8c83d0e276c034574e2adaff98a8169a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionEtudiantBundle:Default:fiche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0aed275c584344df817005d95b2ed9cd8c83d0e276c034574e2adaff98a8169a->leave($__internal_0aed275c584344df817005d95b2ed9cd8c83d0e276c034574e2adaff98a8169a_prof);

    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        $__internal_bd1df59ed55f59ecb73b9e73ffa0df93296d1e4039afbaa707cd8c5413143f13 = $this->env->getExtension("native_profiler");
        $__internal_bd1df59ed55f59ecb73b9e73ffa0df93296d1e4039afbaa707cd8c5413143f13->enter($__internal_bd1df59ed55f59ecb73b9e73ffa0df93296d1e4039afbaa707cd8c5413143f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 3
        echo "    <h1 class=\"mdl-typography--text-center\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "nom", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "id", array()), "html", null, true);
        echo ")</h1>

    <div class=\"mdl-grid\">
        <div class=\"mdl-cell mdl-cell--12-col\">
            <div class=\"mdl-card mdl-shadow--2dp\">
                <h2>Semestre 1</h2>
                <!-- Pour chaque module du semestre-->
                <div>
                    <!-- Remplacer le contenu des span par des {}Twig -->
                    <p><span>Nom module</span> (<span>Code Apogée</span>) - <span>Nom Prof</span></p>
                    <p></p>
                    <p>Avis du professeur</p>
                    <div class=\"mdl-textfield mdl-js-textfield\">
                        <textarea class=\"mdl-textfield__input\" style=\"width:800px;\"type=\"text\" id=\"avis_prof\"></textarea>
                    </div>
                    <div>
                        <button class=\"mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent\">
                            Modifier
                        </button>
                        <hr>
                    </div>
                </div>
                <!-- Fin Pour chaque module du semestre -->
            </div>
        </div>
    </div>
    <!-- Pour chaque semestre de la formation -->

    <!-- Fin Pour chaque semestre de la formation -->
";
        
        $__internal_bd1df59ed55f59ecb73b9e73ffa0df93296d1e4039afbaa707cd8c5413143f13->leave($__internal_bd1df59ed55f59ecb73b9e73ffa0df93296d1e4039afbaa707cd8c5413143f13_prof);

    }

    public function getTemplateName()
    {
        return "GestionEtudiantBundle:Default:fiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "GestionEtudiantBundle::index.html.twig"%}*/
/* {%block container%}*/
/*     <h1 class="mdl-typography--text-center">{{etudiant.nom}} ({{etudiant.id}})</h1>*/
/* */
/*     <div class="mdl-grid">*/
/*         <div class="mdl-cell mdl-cell--12-col">*/
/*             <div class="mdl-card mdl-shadow--2dp">*/
/*                 <h2>Semestre 1</h2>*/
/*                 <!-- Pour chaque module du semestre-->*/
/*                 <div>*/
/*                     <!-- Remplacer le contenu des span par des {}Twig -->*/
/*                     <p><span>Nom module</span> (<span>Code Apogée</span>) - <span>Nom Prof</span></p>*/
/*                     <p></p>*/
/*                     <p>Avis du professeur</p>*/
/*                     <div class="mdl-textfield mdl-js-textfield">*/
/*                         <textarea class="mdl-textfield__input" style="width:800px;"type="text" id="avis_prof"></textarea>*/
/*                     </div>*/
/*                     <div>*/
/*                         <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">*/
/*                             Modifier*/
/*                         </button>*/
/*                         <hr>*/
/*                     </div>*/
/*                 </div>*/
/*                 <!-- Fin Pour chaque module du semestre -->*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <!-- Pour chaque semestre de la formation -->*/
/* */
/*     <!-- Fin Pour chaque semestre de la formation -->*/
/* {%endblock%}*/
