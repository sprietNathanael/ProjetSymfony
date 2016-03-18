<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_8d409730842b6a196fbe33e6fad9645116c7e43279b97615aa5ef38e1bc64701 extends Twig_Template
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
        $__internal_fd3218fed0a8808eac962128cb58b4bb259d1b82063d6e7faf1a2e5b0d0a5df7 = $this->env->getExtension("native_profiler");
        $__internal_fd3218fed0a8808eac962128cb58b4bb259d1b82063d6e7faf1a2e5b0d0a5df7->enter($__internal_fd3218fed0a8808eac962128cb58b4bb259d1b82063d6e7faf1a2e5b0d0a5df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_fd3218fed0a8808eac962128cb58b4bb259d1b82063d6e7faf1a2e5b0d0a5df7->leave($__internal_fd3218fed0a8808eac962128cb58b4bb259d1b82063d6e7faf1a2e5b0d0a5df7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
