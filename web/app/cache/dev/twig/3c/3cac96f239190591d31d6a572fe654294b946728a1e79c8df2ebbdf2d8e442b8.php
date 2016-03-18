<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_22c68ce43048ac4baf43a5766459d00debed7d66b2fca43034f7b21a9a03e610 extends Twig_Template
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
        $__internal_c7818549378e357e7b036a5f216024562b1c0b62e54d03e068b1838bedb9797b = $this->env->getExtension("native_profiler");
        $__internal_c7818549378e357e7b036a5f216024562b1c0b62e54d03e068b1838bedb9797b->enter($__internal_c7818549378e357e7b036a5f216024562b1c0b62e54d03e068b1838bedb9797b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_c7818549378e357e7b036a5f216024562b1c0b62e54d03e068b1838bedb9797b->leave($__internal_c7818549378e357e7b036a5f216024562b1c0b62e54d03e068b1838bedb9797b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
