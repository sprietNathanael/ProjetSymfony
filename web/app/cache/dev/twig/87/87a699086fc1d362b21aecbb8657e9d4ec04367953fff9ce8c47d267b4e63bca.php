<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_c0d0cb768c4f4eb6a0b828899244f255bec829cd5e7311cab70aac61d43d6f37 extends Twig_Template
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
        $__internal_d5e345ce8cc4fbb7f002c691baa4f620cfbecf4d5a6e3abd8b4b7cd6e77095d8 = $this->env->getExtension("native_profiler");
        $__internal_d5e345ce8cc4fbb7f002c691baa4f620cfbecf4d5a6e3abd8b4b7cd6e77095d8->enter($__internal_d5e345ce8cc4fbb7f002c691baa4f620cfbecf4d5a6e3abd8b4b7cd6e77095d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_d5e345ce8cc4fbb7f002c691baa4f620cfbecf4d5a6e3abd8b4b7cd6e77095d8->leave($__internal_d5e345ce8cc4fbb7f002c691baa4f620cfbecf4d5a6e3abd8b4b7cd6e77095d8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
