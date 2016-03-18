<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_597a1dc08c4275eaf9a13101b15683da4729d3aced3a74c65563bbb31ccaf081 extends Twig_Template
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
        $__internal_0792440ca06667fc508d56a9bc9c9ad9fcc2f360b6eaa5a57d626a8e34230632 = $this->env->getExtension("native_profiler");
        $__internal_0792440ca06667fc508d56a9bc9c9ad9fcc2f360b6eaa5a57d626a8e34230632->enter($__internal_0792440ca06667fc508d56a9bc9c9ad9fcc2f360b6eaa5a57d626a8e34230632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_0792440ca06667fc508d56a9bc9c9ad9fcc2f360b6eaa5a57d626a8e34230632->leave($__internal_0792440ca06667fc508d56a9bc9c9ad9fcc2f360b6eaa5a57d626a8e34230632_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
