<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_716d5024288e623bc8cfa0973c87e48b298652a0537bcf3efd1e77c4e8ddc270 extends Twig_Template
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
        $__internal_ab554143ae69ca1c3b1ddca18d0af321af732d24e621bf9a4792979ddfba8e70 = $this->env->getExtension("native_profiler");
        $__internal_ab554143ae69ca1c3b1ddca18d0af321af732d24e621bf9a4792979ddfba8e70->enter($__internal_ab554143ae69ca1c3b1ddca18d0af321af732d24e621bf9a4792979ddfba8e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_ab554143ae69ca1c3b1ddca18d0af321af732d24e621bf9a4792979ddfba8e70->leave($__internal_ab554143ae69ca1c3b1ddca18d0af321af732d24e621bf9a4792979ddfba8e70_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
