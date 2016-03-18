<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_7287f23043f9e4624d9910f69e451b989fe552b01166743415efe17caa7cbf4f extends Twig_Template
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
        $__internal_b6284aece197e4db10def8a46632ceff5809301955c4db1bb36e8ba902f0ef06 = $this->env->getExtension("native_profiler");
        $__internal_b6284aece197e4db10def8a46632ceff5809301955c4db1bb36e8ba902f0ef06->enter($__internal_b6284aece197e4db10def8a46632ceff5809301955c4db1bb36e8ba902f0ef06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_b6284aece197e4db10def8a46632ceff5809301955c4db1bb36e8ba902f0ef06->leave($__internal_b6284aece197e4db10def8a46632ceff5809301955c4db1bb36e8ba902f0ef06_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
