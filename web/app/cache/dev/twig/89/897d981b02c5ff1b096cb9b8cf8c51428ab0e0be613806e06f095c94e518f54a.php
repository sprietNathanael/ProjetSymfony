<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_10ca9fae0b04b67e639cb35f5eb9d6c5e9008f36085c58282cefaf1577799857 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1e1ab816530555457cfc688bcfcddd5fdd41604721f1d955b9d8af69f4f0ef7a = $this->env->getExtension("native_profiler");
        $__internal_1e1ab816530555457cfc688bcfcddd5fdd41604721f1d955b9d8af69f4f0ef7a->enter($__internal_1e1ab816530555457cfc688bcfcddd5fdd41604721f1d955b9d8af69f4f0ef7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_1e1ab816530555457cfc688bcfcddd5fdd41604721f1d955b9d8af69f4f0ef7a->leave($__internal_1e1ab816530555457cfc688bcfcddd5fdd41604721f1d955b9d8af69f4f0ef7a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
