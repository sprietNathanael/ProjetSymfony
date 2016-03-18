<?php

/* GestionEtudiantBundle:Default:listetudiant.html.twig */
class __TwigTemplate_0c34f36c7475a1c571a67f941d0be455a7e12b2d62cefa63758df3f7b4c36ee5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GestionEtudiantBundle::index.html.twig", "GestionEtudiantBundle:Default:listetudiant.html.twig", 1);
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
        $__internal_14e45e048c383ffbab6f2914815270fcfade6633147c50684f2eea64c8de0db5 = $this->env->getExtension("native_profiler");
        $__internal_14e45e048c383ffbab6f2914815270fcfade6633147c50684f2eea64c8de0db5->enter($__internal_14e45e048c383ffbab6f2914815270fcfade6633147c50684f2eea64c8de0db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionEtudiantBundle:Default:listetudiant.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14e45e048c383ffbab6f2914815270fcfade6633147c50684f2eea64c8de0db5->leave($__internal_14e45e048c383ffbab6f2914815270fcfade6633147c50684f2eea64c8de0db5_prof);

    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        $__internal_e5aa42ca5d66c1e4a9b2cbac8b5b1b826dba08ab1e3ca55c25e3f6cd89645551 = $this->env->getExtension("native_profiler");
        $__internal_e5aa42ca5d66c1e4a9b2cbac8b5b1b826dba08ab1e3ca55c25e3f6cd89645551->enter($__internal_e5aa42ca5d66c1e4a9b2cbac8b5b1b826dba08ab1e3ca55c25e3f6cd89645551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 3
        echo "    <div class=\"mdl-card mdl-shadow--2dp\" style=\"width:400px; margin: 20px auto;\">
        <ul class=\"mdl-list\">
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["etudiants"]) ? $context["etudiants"] : $this->getContext($context, "etudiants")));
        foreach ($context['_seq'] as $context["_key"] => $context["etudiant"]) {
            // line 6
            echo "                <li class=\"mdl-list__item mdl-list__item--two-line\">
                    <span class=\"mdl-list__item-primary-content\">
                        <i class=\"material-icons mdl-list__item-avatar\">person</i>
                        <span>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["etudiant"], "nom", array()), "html", null, true);
            echo "</span>
                        <span class=\"mdl-list__item-sub-title\">";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["etudiant"], "id", array()), "html", null, true);
            echo "</span>
                    </span>
                    <span class=\"mdl-list__item-secondary-content\">
                        <a class=\"mdl-list__item-secondary-action\" href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("gestion_etudiant_fiche", array("id" => $this->getAttribute($context["etudiant"], "id", array()))), "html", null, true);
            echo "\"><i class=\"material-icons\">info</i></a>
                    </span>
                    ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["etudiant"], "notes", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
                // line 16
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["note"], "note", array()), "html", null, true);
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['note'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etudiant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "        </ul>
    </div>
";
        
        $__internal_e5aa42ca5d66c1e4a9b2cbac8b5b1b826dba08ab1e3ca55c25e3f6cd89645551->leave($__internal_e5aa42ca5d66c1e4a9b2cbac8b5b1b826dba08ab1e3ca55c25e3f6cd89645551_prof);

    }

    public function getTemplateName()
    {
        return "GestionEtudiantBundle:Default:listetudiant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 20,  81 => 18,  72 => 16,  68 => 15,  63 => 13,  57 => 10,  53 => 9,  48 => 6,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "GestionEtudiantBundle::index.html.twig"%}*/
/* {%block container%}*/
/*     <div class="mdl-card mdl-shadow--2dp" style="width:400px; margin: 20px auto;">*/
/*         <ul class="mdl-list">*/
/*             {% for etudiant in etudiants %}*/
/*                 <li class="mdl-list__item mdl-list__item--two-line">*/
/*                     <span class="mdl-list__item-primary-content">*/
/*                         <i class="material-icons mdl-list__item-avatar">person</i>*/
/*                         <span>{{etudiant.nom}}</span>*/
/*                         <span class="mdl-list__item-sub-title">{{etudiant.id}}</span>*/
/*                     </span>*/
/*                     <span class="mdl-list__item-secondary-content">*/
/*                         <a class="mdl-list__item-secondary-action" href="{{url('gestion_etudiant_fiche',{'id':etudiant.id})}}"><i class="material-icons">info</i></a>*/
/*                     </span>*/
/*                     {% for note in etudiant.notes %}*/
/*                         {{ note.note }}*/
/*                     {% endfor %}*/
/*                 </li>*/
/*             {% endfor %}*/
/*         </ul>*/
/*     </div>*/
/* {% endblock %}*/
