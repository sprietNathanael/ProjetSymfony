<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_5d24b2d6917862354a2665463f8118217ad30346a765b8cb8867e9359b4aa446 extends Twig_Template
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
        $__internal_0c5af5369a6b056efccf985fa61f23cb1acfb769e594fe7c230c1127f51ce7c5 = $this->env->getExtension("native_profiler");
        $__internal_0c5af5369a6b056efccf985fa61f23cb1acfb769e594fe7c230c1127f51ce7c5->enter($__internal_0c5af5369a6b056efccf985fa61f23cb1acfb769e594fe7c230c1127f51ce7c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_0c5af5369a6b056efccf985fa61f23cb1acfb769e594fe7c230c1127f51ce7c5->leave($__internal_0c5af5369a6b056efccf985fa61f23cb1acfb769e594fe7c230c1127f51ce7c5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
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
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
