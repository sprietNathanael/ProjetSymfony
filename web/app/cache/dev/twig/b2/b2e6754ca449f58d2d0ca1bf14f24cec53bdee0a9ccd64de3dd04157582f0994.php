<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_c962f5f5154af1fee4658d7cb82a9ae9e2ebaf5e8ffc3d2e343352f0259f97dd extends Twig_Template
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
        $__internal_cb6fbdba28eb7564636d644cba4b2da85192c635415eb20466c66231c481a6b8 = $this->env->getExtension("native_profiler");
        $__internal_cb6fbdba28eb7564636d644cba4b2da85192c635415eb20466c66231c481a6b8->enter($__internal_cb6fbdba28eb7564636d644cba4b2da85192c635415eb20466c66231c481a6b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_cb6fbdba28eb7564636d644cba4b2da85192c635415eb20466c66231c481a6b8->leave($__internal_cb6fbdba28eb7564636d644cba4b2da85192c635415eb20466c66231c481a6b8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
