<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_275dbbed2799a3989e0850cddf3cf6d24f1f710254c05f8f6b0aa2a806c7d931 extends Twig_Template
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
        $__internal_ad0663478d275588eafe653f06b78653c61cf819e08dc4334736407745d95ccf = $this->env->getExtension("native_profiler");
        $__internal_ad0663478d275588eafe653f06b78653c61cf819e08dc4334736407745d95ccf->enter($__internal_ad0663478d275588eafe653f06b78653c61cf819e08dc4334736407745d95ccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_ad0663478d275588eafe653f06b78653c61cf819e08dc4334736407745d95ccf->leave($__internal_ad0663478d275588eafe653f06b78653c61cf819e08dc4334736407745d95ccf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
