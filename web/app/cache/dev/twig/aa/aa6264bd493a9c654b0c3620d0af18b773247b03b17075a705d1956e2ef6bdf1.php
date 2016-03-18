<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_7f7d154c9cbb4c91e597da201dd7badb09fbe938ab14196919712f4ccb0bc03c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d116149f9fcd4a2a0758aa045f3342b973031f178c9d69513bbf273a3f0388d1 = $this->env->getExtension("native_profiler");
        $__internal_d116149f9fcd4a2a0758aa045f3342b973031f178c9d69513bbf273a3f0388d1->enter($__internal_d116149f9fcd4a2a0758aa045f3342b973031f178c9d69513bbf273a3f0388d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d116149f9fcd4a2a0758aa045f3342b973031f178c9d69513bbf273a3f0388d1->leave($__internal_d116149f9fcd4a2a0758aa045f3342b973031f178c9d69513bbf273a3f0388d1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e0c13cd90d0d88845512182de8036cd734e4afed25349960d29c320fbc086d7d = $this->env->getExtension("native_profiler");
        $__internal_e0c13cd90d0d88845512182de8036cd734e4afed25349960d29c320fbc086d7d->enter($__internal_e0c13cd90d0d88845512182de8036cd734e4afed25349960d29c320fbc086d7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e0c13cd90d0d88845512182de8036cd734e4afed25349960d29c320fbc086d7d->leave($__internal_e0c13cd90d0d88845512182de8036cd734e4afed25349960d29c320fbc086d7d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ab6bdef789d6aa80a7ba22edfa243e48a55f095dd4ca7ea894df5f06181bcec5 = $this->env->getExtension("native_profiler");
        $__internal_ab6bdef789d6aa80a7ba22edfa243e48a55f095dd4ca7ea894df5f06181bcec5->enter($__internal_ab6bdef789d6aa80a7ba22edfa243e48a55f095dd4ca7ea894df5f06181bcec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ab6bdef789d6aa80a7ba22edfa243e48a55f095dd4ca7ea894df5f06181bcec5->leave($__internal_ab6bdef789d6aa80a7ba22edfa243e48a55f095dd4ca7ea894df5f06181bcec5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2b1f401958f49ae848f12310f618cfe08c97adde5b9e244f2b766792f76d73a5 = $this->env->getExtension("native_profiler");
        $__internal_2b1f401958f49ae848f12310f618cfe08c97adde5b9e244f2b766792f76d73a5->enter($__internal_2b1f401958f49ae848f12310f618cfe08c97adde5b9e244f2b766792f76d73a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2b1f401958f49ae848f12310f618cfe08c97adde5b9e244f2b766792f76d73a5->leave($__internal_2b1f401958f49ae848f12310f618cfe08c97adde5b9e244f2b766792f76d73a5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
