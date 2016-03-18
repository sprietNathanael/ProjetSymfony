<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_ebcfa2db46229e198775a8e3e41139ea5252f24940532d2f1f20a3eb0195213c extends Twig_Template
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
        $__internal_7b034d479ebd4cf05fca2a491295a632fd9d79c25210071457cc050c92b3fab7 = $this->env->getExtension("native_profiler");
        $__internal_7b034d479ebd4cf05fca2a491295a632fd9d79c25210071457cc050c92b3fab7->enter($__internal_7b034d479ebd4cf05fca2a491295a632fd9d79c25210071457cc050c92b3fab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_7b034d479ebd4cf05fca2a491295a632fd9d79c25210071457cc050c92b3fab7->leave($__internal_7b034d479ebd4cf05fca2a491295a632fd9d79c25210071457cc050c92b3fab7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
