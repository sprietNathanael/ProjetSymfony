<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_0d6f2fa412c0b3ff10425cc97c380fd3ee5245e7eb7d4ffd1a3ac0eef137a7c1 extends Twig_Template
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
        $__internal_030fadb4041e8586d52e8c49a86eed2c017a84c84f88a8f7ca8717c60c9e5f23 = $this->env->getExtension("native_profiler");
        $__internal_030fadb4041e8586d52e8c49a86eed2c017a84c84f88a8f7ca8717c60c9e5f23->enter($__internal_030fadb4041e8586d52e8c49a86eed2c017a84c84f88a8f7ca8717c60c9e5f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_030fadb4041e8586d52e8c49a86eed2c017a84c84f88a8f7ca8717c60c9e5f23->leave($__internal_030fadb4041e8586d52e8c49a86eed2c017a84c84f88a8f7ca8717c60c9e5f23_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
