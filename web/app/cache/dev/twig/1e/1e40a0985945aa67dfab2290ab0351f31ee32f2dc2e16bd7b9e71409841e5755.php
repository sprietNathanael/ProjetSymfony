<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_328bfe719d161949f31e7dea54458a31d3c245fa4eed4426bc52daf837928146 extends Twig_Template
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
        $__internal_4c601af3e8876893bc40137827422a9ee846fbacb9566ae63c5ae48e7c515225 = $this->env->getExtension("native_profiler");
        $__internal_4c601af3e8876893bc40137827422a9ee846fbacb9566ae63c5ae48e7c515225->enter($__internal_4c601af3e8876893bc40137827422a9ee846fbacb9566ae63c5ae48e7c515225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_4c601af3e8876893bc40137827422a9ee846fbacb9566ae63c5ae48e7c515225->leave($__internal_4c601af3e8876893bc40137827422a9ee846fbacb9566ae63c5ae48e7c515225_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
