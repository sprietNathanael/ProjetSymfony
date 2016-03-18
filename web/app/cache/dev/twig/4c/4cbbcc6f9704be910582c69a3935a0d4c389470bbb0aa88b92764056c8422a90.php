<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_92390564dabbb1ba3502050208b6e0f823ee5457b9f560bc22b566d10d5e2851 extends Twig_Template
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
        $__internal_c3b371bd6acc9fc5722b496749fbc8f3e647e90680b58efa3e1e0d04b284d27a = $this->env->getExtension("native_profiler");
        $__internal_c3b371bd6acc9fc5722b496749fbc8f3e647e90680b58efa3e1e0d04b284d27a->enter($__internal_c3b371bd6acc9fc5722b496749fbc8f3e647e90680b58efa3e1e0d04b284d27a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_c3b371bd6acc9fc5722b496749fbc8f3e647e90680b58efa3e1e0d04b284d27a->leave($__internal_c3b371bd6acc9fc5722b496749fbc8f3e647e90680b58efa3e1e0d04b284d27a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
