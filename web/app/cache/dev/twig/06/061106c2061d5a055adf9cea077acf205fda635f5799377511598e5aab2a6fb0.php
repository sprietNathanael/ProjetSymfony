<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d7e73ae2a932eaa5846b4a61d08a10b6b5e89097fec093c05735468fb716516b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_11f758f0d02e4983aecf361ceb756260a8f2044dc6c7033e8455fcafa2699915 = $this->env->getExtension("native_profiler");
        $__internal_11f758f0d02e4983aecf361ceb756260a8f2044dc6c7033e8455fcafa2699915->enter($__internal_11f758f0d02e4983aecf361ceb756260a8f2044dc6c7033e8455fcafa2699915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11f758f0d02e4983aecf361ceb756260a8f2044dc6c7033e8455fcafa2699915->leave($__internal_11f758f0d02e4983aecf361ceb756260a8f2044dc6c7033e8455fcafa2699915_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f9ca36e59519e63afb372d96d8120928d8a1b85ae5cf01cb8c58ac36e2e7ebbe = $this->env->getExtension("native_profiler");
        $__internal_f9ca36e59519e63afb372d96d8120928d8a1b85ae5cf01cb8c58ac36e2e7ebbe->enter($__internal_f9ca36e59519e63afb372d96d8120928d8a1b85ae5cf01cb8c58ac36e2e7ebbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f9ca36e59519e63afb372d96d8120928d8a1b85ae5cf01cb8c58ac36e2e7ebbe->leave($__internal_f9ca36e59519e63afb372d96d8120928d8a1b85ae5cf01cb8c58ac36e2e7ebbe_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_547acaa46ed57e96b139e353481e6df129cbc3ef1121ded415a447f2eaa5e979 = $this->env->getExtension("native_profiler");
        $__internal_547acaa46ed57e96b139e353481e6df129cbc3ef1121ded415a447f2eaa5e979->enter($__internal_547acaa46ed57e96b139e353481e6df129cbc3ef1121ded415a447f2eaa5e979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_547acaa46ed57e96b139e353481e6df129cbc3ef1121ded415a447f2eaa5e979->leave($__internal_547acaa46ed57e96b139e353481e6df129cbc3ef1121ded415a447f2eaa5e979_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b6685fbb0280a61746babc7d819f30be2f5271199c03b1ddfa786a82d918f11 = $this->env->getExtension("native_profiler");
        $__internal_4b6685fbb0280a61746babc7d819f30be2f5271199c03b1ddfa786a82d918f11->enter($__internal_4b6685fbb0280a61746babc7d819f30be2f5271199c03b1ddfa786a82d918f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4b6685fbb0280a61746babc7d819f30be2f5271199c03b1ddfa786a82d918f11->leave($__internal_4b6685fbb0280a61746babc7d819f30be2f5271199c03b1ddfa786a82d918f11_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
