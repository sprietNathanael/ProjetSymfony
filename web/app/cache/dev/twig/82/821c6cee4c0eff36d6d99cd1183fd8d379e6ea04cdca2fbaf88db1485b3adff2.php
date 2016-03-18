<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_068fa58232eb7ca469c945485c053f06e51942b548ea81d3fa7d1fc9c09aaed6 extends Twig_Template
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
        $__internal_c2170ab1f08f7c825cfe74d6914d3eab09ccf100ddb050845136f098db5cb6f9 = $this->env->getExtension("native_profiler");
        $__internal_c2170ab1f08f7c825cfe74d6914d3eab09ccf100ddb050845136f098db5cb6f9->enter($__internal_c2170ab1f08f7c825cfe74d6914d3eab09ccf100ddb050845136f098db5cb6f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c2170ab1f08f7c825cfe74d6914d3eab09ccf100ddb050845136f098db5cb6f9->leave($__internal_c2170ab1f08f7c825cfe74d6914d3eab09ccf100ddb050845136f098db5cb6f9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
