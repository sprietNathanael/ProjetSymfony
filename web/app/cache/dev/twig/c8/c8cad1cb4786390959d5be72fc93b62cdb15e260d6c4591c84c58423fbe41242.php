<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_86e9d00a6ca6f02c85f9f76607bb561fd52899ecc3d7911de07bf148e0af4dec extends Twig_Template
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
        $__internal_c462bdeaf2452e368aa8f84a231ed9b13f3cbafaa912ebf33764a4a88e651123 = $this->env->getExtension("native_profiler");
        $__internal_c462bdeaf2452e368aa8f84a231ed9b13f3cbafaa912ebf33764a4a88e651123->enter($__internal_c462bdeaf2452e368aa8f84a231ed9b13f3cbafaa912ebf33764a4a88e651123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c462bdeaf2452e368aa8f84a231ed9b13f3cbafaa912ebf33764a4a88e651123->leave($__internal_c462bdeaf2452e368aa8f84a231ed9b13f3cbafaa912ebf33764a4a88e651123_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
