<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_6e84462d354530831b640a55591f9fb312bfc3b7b29248789754cf4f7a790321 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e2f9d85e1538128413dd661e312e4f51a587e250120db83548c764b2abbb0f71 = $this->env->getExtension("native_profiler");
        $__internal_e2f9d85e1538128413dd661e312e4f51a587e250120db83548c764b2abbb0f71->enter($__internal_e2f9d85e1538128413dd661e312e4f51a587e250120db83548c764b2abbb0f71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2f9d85e1538128413dd661e312e4f51a587e250120db83548c764b2abbb0f71->leave($__internal_e2f9d85e1538128413dd661e312e4f51a587e250120db83548c764b2abbb0f71_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2cc2920af43e51fda2c8b7ce2248782c4e4722278b11f62d3434a6c0739bad91 = $this->env->getExtension("native_profiler");
        $__internal_2cc2920af43e51fda2c8b7ce2248782c4e4722278b11f62d3434a6c0739bad91->enter($__internal_2cc2920af43e51fda2c8b7ce2248782c4e4722278b11f62d3434a6c0739bad91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_2cc2920af43e51fda2c8b7ce2248782c4e4722278b11f62d3434a6c0739bad91->leave($__internal_2cc2920af43e51fda2c8b7ce2248782c4e4722278b11f62d3434a6c0739bad91_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_60272e4ac6ad7cd292d834eb6a4796b0a0d2f06376d0aff2ef501e007ecfaa5a = $this->env->getExtension("native_profiler");
        $__internal_60272e4ac6ad7cd292d834eb6a4796b0a0d2f06376d0aff2ef501e007ecfaa5a->enter($__internal_60272e4ac6ad7cd292d834eb6a4796b0a0d2f06376d0aff2ef501e007ecfaa5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_60272e4ac6ad7cd292d834eb6a4796b0a0d2f06376d0aff2ef501e007ecfaa5a->leave($__internal_60272e4ac6ad7cd292d834eb6a4796b0a0d2f06376d0aff2ef501e007ecfaa5a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
