<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_79368f8363537f117e794e444a56e292c288d8088cbd2ecea3c1c974a1a6acf9 extends Twig_Template
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
        $__internal_b65210bb5c110e6ae186d395f165435ffac0109194f6af90d8db48e5bfffddff = $this->env->getExtension("native_profiler");
        $__internal_b65210bb5c110e6ae186d395f165435ffac0109194f6af90d8db48e5bfffddff->enter($__internal_b65210bb5c110e6ae186d395f165435ffac0109194f6af90d8db48e5bfffddff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_b65210bb5c110e6ae186d395f165435ffac0109194f6af90d8db48e5bfffddff->leave($__internal_b65210bb5c110e6ae186d395f165435ffac0109194f6af90d8db48e5bfffddff_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
