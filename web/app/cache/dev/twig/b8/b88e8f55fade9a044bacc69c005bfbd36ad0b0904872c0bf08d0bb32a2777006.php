<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_4b4fc3f9c57c65f795106469bb826df1534ad31bb0a14ad38bac5f35e748a7ac extends Twig_Template
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
        $__internal_4a211b9f2e91189304f332d16efc0a65fef29b5bc46c4f03beb1b9546ff7623f = $this->env->getExtension("native_profiler");
        $__internal_4a211b9f2e91189304f332d16efc0a65fef29b5bc46c4f03beb1b9546ff7623f->enter($__internal_4a211b9f2e91189304f332d16efc0a65fef29b5bc46c4f03beb1b9546ff7623f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_4a211b9f2e91189304f332d16efc0a65fef29b5bc46c4f03beb1b9546ff7623f->leave($__internal_4a211b9f2e91189304f332d16efc0a65fef29b5bc46c4f03beb1b9546ff7623f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
