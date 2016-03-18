<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_4ef708c2d85ca2ce5947e98a8c038a036f0eb7938980f5e8b1e93176a5e90f17 extends Twig_Template
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
        $__internal_b0e54cdbf6a7e8ebf22a2e56996c988eca02d45677b614cdf918bab7bb3d9d37 = $this->env->getExtension("native_profiler");
        $__internal_b0e54cdbf6a7e8ebf22a2e56996c988eca02d45677b614cdf918bab7bb3d9d37->enter($__internal_b0e54cdbf6a7e8ebf22a2e56996c988eca02d45677b614cdf918bab7bb3d9d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_b0e54cdbf6a7e8ebf22a2e56996c988eca02d45677b614cdf918bab7bb3d9d37->leave($__internal_b0e54cdbf6a7e8ebf22a2e56996c988eca02d45677b614cdf918bab7bb3d9d37_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
