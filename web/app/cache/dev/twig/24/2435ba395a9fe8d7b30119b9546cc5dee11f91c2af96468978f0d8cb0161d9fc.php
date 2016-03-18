<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_7b52e6db2b7cfb47a73fccec6b2600182d096b51a14208d4342a8dcc8ed1a501 extends Twig_Template
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
        $__internal_d87754bb8f8ec5c7a57210c748b7834720813a7f7b3ca9d76559761e81725c7f = $this->env->getExtension("native_profiler");
        $__internal_d87754bb8f8ec5c7a57210c748b7834720813a7f7b3ca9d76559761e81725c7f->enter($__internal_d87754bb8f8ec5c7a57210c748b7834720813a7f7b3ca9d76559761e81725c7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_d87754bb8f8ec5c7a57210c748b7834720813a7f7b3ca9d76559761e81725c7f->leave($__internal_d87754bb8f8ec5c7a57210c748b7834720813a7f7b3ca9d76559761e81725c7f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
