<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_25231e55a11883459cf6b64d2ac9790319b4f3c328562ce066370d92e469400e extends Twig_Template
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
        $__internal_0844839ef8e275996b797b3e30bf9dad0b8c61895b61ae296d4a33db7a05f68f = $this->env->getExtension("native_profiler");
        $__internal_0844839ef8e275996b797b3e30bf9dad0b8c61895b61ae296d4a33db7a05f68f->enter($__internal_0844839ef8e275996b797b3e30bf9dad0b8c61895b61ae296d4a33db7a05f68f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_0844839ef8e275996b797b3e30bf9dad0b8c61895b61ae296d4a33db7a05f68f->leave($__internal_0844839ef8e275996b797b3e30bf9dad0b8c61895b61ae296d4a33db7a05f68f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
