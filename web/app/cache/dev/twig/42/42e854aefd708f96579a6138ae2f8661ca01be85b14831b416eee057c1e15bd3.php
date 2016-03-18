<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_0c162645dea73e9933573e5810081019c595cd9519a84d2b0c9cf243ad7014cc extends Twig_Template
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
        $__internal_128d7376c9ca41af301d86900f0c676aac2d61ba508c8c932c87028b2adb04a9 = $this->env->getExtension("native_profiler");
        $__internal_128d7376c9ca41af301d86900f0c676aac2d61ba508c8c932c87028b2adb04a9->enter($__internal_128d7376c9ca41af301d86900f0c676aac2d61ba508c8c932c87028b2adb04a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_128d7376c9ca41af301d86900f0c676aac2d61ba508c8c932c87028b2adb04a9->leave($__internal_128d7376c9ca41af301d86900f0c676aac2d61ba508c8c932c87028b2adb04a9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
