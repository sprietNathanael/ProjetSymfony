<?php

/* GestionEtudiantBundle:Default:essai.html.twig */
class __TwigTemplate_3e9571ba95df15438d01c69e2ac612bd175c48af52bd3246ea50f285a166591a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GestionEtudiantBundle::index.html.twig", "GestionEtudiantBundle:Default:essai.html.twig", 1);
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
        $__internal_5258e42cbbe40999bca4c11247eb3adaf861f2ac007ce3541b203fc3d8aa74f1 = $this->env->getExtension("native_profiler");
        $__internal_5258e42cbbe40999bca4c11247eb3adaf861f2ac007ce3541b203fc3d8aa74f1->enter($__internal_5258e42cbbe40999bca4c11247eb3adaf861f2ac007ce3541b203fc3d8aa74f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionEtudiantBundle:Default:essai.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5258e42cbbe40999bca4c11247eb3adaf861f2ac007ce3541b203fc3d8aa74f1->leave($__internal_5258e42cbbe40999bca4c11247eb3adaf861f2ac007ce3541b203fc3d8aa74f1_prof);

    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        $__internal_53cafa57c640c2ef285f422ba02ecffe6612dea8bd19ee6ee1cbe60991fbc34b = $this->env->getExtension("native_profiler");
        $__internal_53cafa57c640c2ef285f422ba02ecffe6612dea8bd19ee6ee1cbe60991fbc34b->enter($__internal_53cafa57c640c2ef285f422ba02ecffe6612dea8bd19ee6ee1cbe60991fbc34b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notes"]) ? $context["notes"] : $this->getContext($context, "notes")));
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["n"], "idModule", array()), "id", array()), "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_53cafa57c640c2ef285f422ba02ecffe6612dea8bd19ee6ee1cbe60991fbc34b->leave($__internal_53cafa57c640c2ef285f422ba02ecffe6612dea8bd19ee6ee1cbe60991fbc34b_prof);

    }

    public function getTemplateName()
    {
        return "GestionEtudiantBundle:Default:essai.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "GestionEtudiantBundle::index.html.twig"%}*/
/* {%block container%}*/
/* {% for n in notes %}*/
/*     {{ n.idModule.id }}*/
/* {% endfor%}*/
/* {%endblock%}*/
