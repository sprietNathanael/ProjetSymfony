<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_d0bdae40e8147d3149a3a81564500dcede496165d1ed3b186941e33075750764 extends Twig_Template
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
        $__internal_9273728554781ab73dc9133654487d7acfb45b3c91b47139db9ca40ecdb54785 = $this->env->getExtension("native_profiler");
        $__internal_9273728554781ab73dc9133654487d7acfb45b3c91b47139db9ca40ecdb54785->enter($__internal_9273728554781ab73dc9133654487d7acfb45b3c91b47139db9ca40ecdb54785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_9273728554781ab73dc9133654487d7acfb45b3c91b47139db9ca40ecdb54785->leave($__internal_9273728554781ab73dc9133654487d7acfb45b3c91b47139db9ca40ecdb54785_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
