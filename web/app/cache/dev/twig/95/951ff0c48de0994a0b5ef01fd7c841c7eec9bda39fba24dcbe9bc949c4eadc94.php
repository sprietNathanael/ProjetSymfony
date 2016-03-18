<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_4ee6079d868934423b614622bd982005a696733362ca10e460491a80720d9ef7 extends Twig_Template
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
        $__internal_6a2f742cbbd83269dc40777d4148683ceab89c68dccce5c12a8a3d3aa8b5496c = $this->env->getExtension("native_profiler");
        $__internal_6a2f742cbbd83269dc40777d4148683ceab89c68dccce5c12a8a3d3aa8b5496c->enter($__internal_6a2f742cbbd83269dc40777d4148683ceab89c68dccce5c12a8a3d3aa8b5496c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_6a2f742cbbd83269dc40777d4148683ceab89c68dccce5c12a8a3d3aa8b5496c->leave($__internal_6a2f742cbbd83269dc40777d4148683ceab89c68dccce5c12a8a3d3aa8b5496c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
