<?php

/* ::base.html.twig */
class __TwigTemplate_f4c3ded94c9bd09548a148285c683fb0e205b1a15a8470e19e3b0fe5e7f8e249 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1e0a8e17556ff761bfbe0abf6a1d776b6507b30d4fb96d981df68fafceeb30af = $this->env->getExtension("native_profiler");
        $__internal_1e0a8e17556ff761bfbe0abf6a1d776b6507b30d4fb96d981df68fafceeb30af->enter($__internal_1e0a8e17556ff761bfbe0abf6a1d776b6507b30d4fb96d981df68fafceeb30af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_1e0a8e17556ff761bfbe0abf6a1d776b6507b30d4fb96d981df68fafceeb30af->leave($__internal_1e0a8e17556ff761bfbe0abf6a1d776b6507b30d4fb96d981df68fafceeb30af_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7f0b0386e2f768541a807155374c48850cc0a06edc95a28b8e39b7c114732e85 = $this->env->getExtension("native_profiler");
        $__internal_7f0b0386e2f768541a807155374c48850cc0a06edc95a28b8e39b7c114732e85->enter($__internal_7f0b0386e2f768541a807155374c48850cc0a06edc95a28b8e39b7c114732e85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7f0b0386e2f768541a807155374c48850cc0a06edc95a28b8e39b7c114732e85->leave($__internal_7f0b0386e2f768541a807155374c48850cc0a06edc95a28b8e39b7c114732e85_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c232faffac96e6938264f741b2d63c809521cb1565a2548144d79c90ca6c01b9 = $this->env->getExtension("native_profiler");
        $__internal_c232faffac96e6938264f741b2d63c809521cb1565a2548144d79c90ca6c01b9->enter($__internal_c232faffac96e6938264f741b2d63c809521cb1565a2548144d79c90ca6c01b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c232faffac96e6938264f741b2d63c809521cb1565a2548144d79c90ca6c01b9->leave($__internal_c232faffac96e6938264f741b2d63c809521cb1565a2548144d79c90ca6c01b9_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_34a5aa1f1224486867ce0d8a5d5f61e2aee53f094f48deb6c886ad3897784215 = $this->env->getExtension("native_profiler");
        $__internal_34a5aa1f1224486867ce0d8a5d5f61e2aee53f094f48deb6c886ad3897784215->enter($__internal_34a5aa1f1224486867ce0d8a5d5f61e2aee53f094f48deb6c886ad3897784215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_34a5aa1f1224486867ce0d8a5d5f61e2aee53f094f48deb6c886ad3897784215->leave($__internal_34a5aa1f1224486867ce0d8a5d5f61e2aee53f094f48deb6c886ad3897784215_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2d7e3073412839c0ef22e666b269590acaef5818c92e00f15070c36580ed7172 = $this->env->getExtension("native_profiler");
        $__internal_2d7e3073412839c0ef22e666b269590acaef5818c92e00f15070c36580ed7172->enter($__internal_2d7e3073412839c0ef22e666b269590acaef5818c92e00f15070c36580ed7172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2d7e3073412839c0ef22e666b269590acaef5818c92e00f15070c36580ed7172->leave($__internal_2d7e3073412839c0ef22e666b269590acaef5818c92e00f15070c36580ed7172_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
