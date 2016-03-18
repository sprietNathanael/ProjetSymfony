<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_a34811e8aaf306fdc682f5734ea21eeef98317e4b0ffb721ec2ac52bf99f03cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f00b665e6b861c311cae0b898ac2d8c22467159f7dc7a24792171def04787e79 = $this->env->getExtension("native_profiler");
        $__internal_f00b665e6b861c311cae0b898ac2d8c22467159f7dc7a24792171def04787e79->enter($__internal_f00b665e6b861c311cae0b898ac2d8c22467159f7dc7a24792171def04787e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f00b665e6b861c311cae0b898ac2d8c22467159f7dc7a24792171def04787e79->leave($__internal_f00b665e6b861c311cae0b898ac2d8c22467159f7dc7a24792171def04787e79_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a48277dee6e3ab73811a2a7c1849cae354a06e3d87e379d357b2fd98abb7b621 = $this->env->getExtension("native_profiler");
        $__internal_a48277dee6e3ab73811a2a7c1849cae354a06e3d87e379d357b2fd98abb7b621->enter($__internal_a48277dee6e3ab73811a2a7c1849cae354a06e3d87e379d357b2fd98abb7b621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a48277dee6e3ab73811a2a7c1849cae354a06e3d87e379d357b2fd98abb7b621->leave($__internal_a48277dee6e3ab73811a2a7c1849cae354a06e3d87e379d357b2fd98abb7b621_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
