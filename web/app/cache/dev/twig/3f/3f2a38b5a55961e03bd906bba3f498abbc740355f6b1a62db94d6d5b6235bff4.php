<?php

/* GestionEtudiantBundle:Default:index.html.twig */
class __TwigTemplate_1573b5d97fd20b6c33d958f2108fec27ceccb2e620480d779ba929d52a24c40d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GestionEtudiantBundle::index.html.twig", "GestionEtudiantBundle:Default:index.html.twig", 1);
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
        $__internal_39926895c1f8c0c6ba499d1a89fdd09603c02764ce9b497edfb9fe7539a88205 = $this->env->getExtension("native_profiler");
        $__internal_39926895c1f8c0c6ba499d1a89fdd09603c02764ce9b497edfb9fe7539a88205->enter($__internal_39926895c1f8c0c6ba499d1a89fdd09603c02764ce9b497edfb9fe7539a88205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionEtudiantBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39926895c1f8c0c6ba499d1a89fdd09603c02764ce9b497edfb9fe7539a88205->leave($__internal_39926895c1f8c0c6ba499d1a89fdd09603c02764ce9b497edfb9fe7539a88205_prof);

    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        $__internal_1b42ade5f8674371645c3fa54c7ff7380567e476d83eb85a94a87039532c4ab1 = $this->env->getExtension("native_profiler");
        $__internal_1b42ade5f8674371645c3fa54c7ff7380567e476d83eb85a94a87039532c4ab1->enter($__internal_1b42ade5f8674371645c3fa54c7ff7380567e476d83eb85a94a87039532c4ab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 3
        echo "
";
        
        $__internal_1b42ade5f8674371645c3fa54c7ff7380567e476d83eb85a94a87039532c4ab1->leave($__internal_1b42ade5f8674371645c3fa54c7ff7380567e476d83eb85a94a87039532c4ab1_prof);

    }

    public function getTemplateName()
    {
        return "GestionEtudiantBundle:Default:index.html.twig";
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
/* */
/* {%endblock%}*/
