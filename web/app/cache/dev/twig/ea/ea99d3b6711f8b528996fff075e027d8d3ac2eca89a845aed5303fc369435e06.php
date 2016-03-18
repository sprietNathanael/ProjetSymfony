<?php

/* GestionEtudiantBundle:Default:listemodules.html.twig */
class __TwigTemplate_a9cdeefa48c280ca8a16ec0cf39b300d11b5341d0feeb2fa49a6fa07f5687088 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GestionEtudiantBundle::index.html.twig", "GestionEtudiantBundle:Default:listemodules.html.twig", 1);
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
        $__internal_0c1438adcc59c389d8ed7855aef8c12ac2f49cd09d19701ee26208ae2bfd6669 = $this->env->getExtension("native_profiler");
        $__internal_0c1438adcc59c389d8ed7855aef8c12ac2f49cd09d19701ee26208ae2bfd6669->enter($__internal_0c1438adcc59c389d8ed7855aef8c12ac2f49cd09d19701ee26208ae2bfd6669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionEtudiantBundle:Default:listemodules.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c1438adcc59c389d8ed7855aef8c12ac2f49cd09d19701ee26208ae2bfd6669->leave($__internal_0c1438adcc59c389d8ed7855aef8c12ac2f49cd09d19701ee26208ae2bfd6669_prof);

    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        $__internal_3aa55b59f86552014fe98bd7328dba140145ce02ed122faa803844a6bd8946f3 = $this->env->getExtension("native_profiler");
        $__internal_3aa55b59f86552014fe98bd7328dba140145ce02ed122faa803844a6bd8946f3->enter($__internal_3aa55b59f86552014fe98bd7328dba140145ce02ed122faa803844a6bd8946f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 3
        echo "
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ues"]) ? $context["ues"] : $this->getContext($context, "ues")));
        foreach ($context['_seq'] as $context["_key"] => $context["ue"]) {
            // line 5
            echo "        <div class=\"mdl-card mdl-shadow--2dp\" style=\"width:1400px; margin: 20px auto;\">
            <span>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["ue"], "nomUe", array()), "html", null, true);
            echo "</span>
            <ul>

                ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["ue"], "modules", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 10
                echo "                    <li>
                        <span>";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "nomModule", array()), "html", null, true);
                echo "</span>
                        <ul class=\"mdl-list\">g

                            ";
                // line 15
                echo "                                ";
                // line 16
                echo "                            ";
                // line 17
                echo "                        </ul>
                        </span>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "            </ul>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
";
        
        $__internal_3aa55b59f86552014fe98bd7328dba140145ce02ed122faa803844a6bd8946f3->leave($__internal_3aa55b59f86552014fe98bd7328dba140145ce02ed122faa803844a6bd8946f3_prof);

    }

    public function getTemplateName()
    {
        return "GestionEtudiantBundle:Default:listemodules.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 24,  82 => 21,  73 => 17,  71 => 16,  69 => 15,  63 => 11,  60 => 10,  56 => 9,  50 => 6,  47 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "GestionEtudiantBundle::index.html.twig" %}*/
/* {% block container %}*/
/* */
/*     {% for ue in ues %}*/
/*         <div class="mdl-card mdl-shadow--2dp" style="width:1400px; margin: 20px auto;">*/
/*             <span>{{ ue.nomUe }}</span>*/
/*             <ul>*/
/* */
/*                 {% for module in ue.modules %}*/
/*                     <li>*/
/*                         <span>{{ module.nomModule }}</span>*/
/*                         <ul class="mdl-list">g*/
/* */
/*                             {#{% for note in module.getNotes() %}#}*/
/*                                 {#<li>{{ note.numEtu.nom }} {{ note.annee }} {{ note.note }}</li>#}*/
/*                             {#{% endfor %}#}*/
/*                         </ul>*/
/*                         </span>*/
/*                     </li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         </div>*/
/*     {% endfor %}*/
/* */
/* {% endblock %}*/
