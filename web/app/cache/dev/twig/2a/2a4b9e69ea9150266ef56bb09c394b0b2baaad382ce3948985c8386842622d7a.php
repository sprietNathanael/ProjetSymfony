<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_be74a78b04e4c1e6d3dcd93a834b9ea911b9060597e2329fc656c5cd0e85276b extends Twig_Template
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
        $__internal_0f799cb567773bc61307a0a30fdfe6b57cebd64e1ecc384e90cefc530732fef9 = $this->env->getExtension("native_profiler");
        $__internal_0f799cb567773bc61307a0a30fdfe6b57cebd64e1ecc384e90cefc530732fef9->enter($__internal_0f799cb567773bc61307a0a30fdfe6b57cebd64e1ecc384e90cefc530732fef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_0f799cb567773bc61307a0a30fdfe6b57cebd64e1ecc384e90cefc530732fef9->leave($__internal_0f799cb567773bc61307a0a30fdfe6b57cebd64e1ecc384e90cefc530732fef9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
