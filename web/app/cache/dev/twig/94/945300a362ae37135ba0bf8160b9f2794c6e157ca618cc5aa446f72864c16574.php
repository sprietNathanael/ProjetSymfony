<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_de5a16f2b6ac4b778c5b0091909596a751269f812e7f2b0e42970729650445d7 extends Twig_Template
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
        $__internal_3f1a293026a5220df9db9e5938cfce5feae2f75834a3fcede6cc420bd918565e = $this->env->getExtension("native_profiler");
        $__internal_3f1a293026a5220df9db9e5938cfce5feae2f75834a3fcede6cc420bd918565e->enter($__internal_3f1a293026a5220df9db9e5938cfce5feae2f75834a3fcede6cc420bd918565e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_3f1a293026a5220df9db9e5938cfce5feae2f75834a3fcede6cc420bd918565e->leave($__internal_3f1a293026a5220df9db9e5938cfce5feae2f75834a3fcede6cc420bd918565e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
