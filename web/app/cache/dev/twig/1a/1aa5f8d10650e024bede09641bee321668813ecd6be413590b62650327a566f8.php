<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_59fb6291491e58afbe9f207afad47678ae8e64ae4d2ff681bcf796f74d1903a4 extends Twig_Template
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
        $__internal_d55f60ab0ed22cf4fc493f011223a4e9bf6e6f4a3a50bbacd09b5a060cd09c78 = $this->env->getExtension("native_profiler");
        $__internal_d55f60ab0ed22cf4fc493f011223a4e9bf6e6f4a3a50bbacd09b5a060cd09c78->enter($__internal_d55f60ab0ed22cf4fc493f011223a4e9bf6e6f4a3a50bbacd09b5a060cd09c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_d55f60ab0ed22cf4fc493f011223a4e9bf6e6f4a3a50bbacd09b5a060cd09c78->leave($__internal_d55f60ab0ed22cf4fc493f011223a4e9bf6e6f4a3a50bbacd09b5a060cd09c78_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
