<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_20ff83deceb6d89eb7388d290baf18d959219b8414a248233d2d068b1f751dad extends Twig_Template
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
        $__internal_6824a523b9655bf5b4827ea3e30a56bde0ab008d5a2cf42eec0c23c421300553 = $this->env->getExtension("native_profiler");
        $__internal_6824a523b9655bf5b4827ea3e30a56bde0ab008d5a2cf42eec0c23c421300553->enter($__internal_6824a523b9655bf5b4827ea3e30a56bde0ab008d5a2cf42eec0c23c421300553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_6824a523b9655bf5b4827ea3e30a56bde0ab008d5a2cf42eec0c23c421300553->leave($__internal_6824a523b9655bf5b4827ea3e30a56bde0ab008d5a2cf42eec0c23c421300553_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
