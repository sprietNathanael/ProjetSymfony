<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_db8194ba10c0c0eefa3df6307adaf5e3319a2f34f60a351553a7daeeb8a09d8d extends Twig_Template
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
        $__internal_7ecfcc43e7a1da6f225b98586356767afe42074f7c84bdc83b727e404a4bd744 = $this->env->getExtension("native_profiler");
        $__internal_7ecfcc43e7a1da6f225b98586356767afe42074f7c84bdc83b727e404a4bd744->enter($__internal_7ecfcc43e7a1da6f225b98586356767afe42074f7c84bdc83b727e404a4bd744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_7ecfcc43e7a1da6f225b98586356767afe42074f7c84bdc83b727e404a4bd744->leave($__internal_7ecfcc43e7a1da6f225b98586356767afe42074f7c84bdc83b727e404a4bd744_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
