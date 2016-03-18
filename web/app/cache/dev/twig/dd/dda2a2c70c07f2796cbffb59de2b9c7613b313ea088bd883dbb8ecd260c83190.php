<?php

/* GestionEtudiantBundle:Default:listesemestre.html.twig */
class __TwigTemplate_ead06597eb887d70f81185abc9611022a44f1af675a351aae434fcacaa048bff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GestionEtudiantBundle::index.html.twig", "GestionEtudiantBundle:Default:listesemestre.html.twig", 1);
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
        $__internal_450b0d8c08458a450de4c1f8e6a9151a8d84228ee55ab1a6db2cd90fbfdcf33a = $this->env->getExtension("native_profiler");
        $__internal_450b0d8c08458a450de4c1f8e6a9151a8d84228ee55ab1a6db2cd90fbfdcf33a->enter($__internal_450b0d8c08458a450de4c1f8e6a9151a8d84228ee55ab1a6db2cd90fbfdcf33a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionEtudiantBundle:Default:listesemestre.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_450b0d8c08458a450de4c1f8e6a9151a8d84228ee55ab1a6db2cd90fbfdcf33a->leave($__internal_450b0d8c08458a450de4c1f8e6a9151a8d84228ee55ab1a6db2cd90fbfdcf33a_prof);

    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        $__internal_6fbf82e8c230ce1c35640c8ee99e9c9917ad93e6d9d9f177069867449bfcaff0 = $this->env->getExtension("native_profiler");
        $__internal_6fbf82e8c230ce1c35640c8ee99e9c9917ad93e6d9d9f177069867449bfcaff0->enter($__internal_6fbf82e8c230ce1c35640c8ee99e9c9917ad93e6d9d9f177069867449bfcaff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 3
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["semestres"]) ? $context["semestres"] : $this->getContext($context, "semestres")));
        foreach ($context['_seq'] as $context["_key"] => $context["semestre"]) {
            // line 4
            echo "        <li><a href=\"http://localhost/ProjetSymfony/web/web/app_dev.php/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["semestre"], "semestre", array(), "array"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["semestre"], "semestre", array(), "array"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['semestre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6fbf82e8c230ce1c35640c8ee99e9c9917ad93e6d9d9f177069867449bfcaff0->leave($__internal_6fbf82e8c230ce1c35640c8ee99e9c9917ad93e6d9d9f177069867449bfcaff0_prof);

    }

    public function getTemplateName()
    {
        return "GestionEtudiantBundle:Default:listesemestre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "GestionEtudiantBundle::index.html.twig" %}*/
/* {% block container %}*/
/*     {% for semestre in semestres %}*/
/*         <li><a href="http://localhost/ProjetSymfony/web/web/app_dev.php/{{ semestre["semestre"] }}">{{ semestre["semestre"] }}</a></li>*/
/*     {% endfor %}*/
/* {% endblock %}*/
