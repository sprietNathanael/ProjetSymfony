<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_8c2c09288feca9eb568587d87027796cfd50ae7bfdc536283a1b33192c01c80e extends Twig_Template
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
        $__internal_311d2c956f13dbeda94061e40eb02f2dc4dbc705aaeeb00a3887cdf647af7608 = $this->env->getExtension("native_profiler");
        $__internal_311d2c956f13dbeda94061e40eb02f2dc4dbc705aaeeb00a3887cdf647af7608->enter($__internal_311d2c956f13dbeda94061e40eb02f2dc4dbc705aaeeb00a3887cdf647af7608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_311d2c956f13dbeda94061e40eb02f2dc4dbc705aaeeb00a3887cdf647af7608->leave($__internal_311d2c956f13dbeda94061e40eb02f2dc4dbc705aaeeb00a3887cdf647af7608_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
