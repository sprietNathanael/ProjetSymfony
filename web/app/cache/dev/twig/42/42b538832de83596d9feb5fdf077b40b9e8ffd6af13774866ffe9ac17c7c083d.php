<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_08f5b5900535646708e897777a854b047b7ae04619d7990fc869a49bf46ca7fc extends Twig_Template
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
        $__internal_a975858db31d6a600b18e113fb4d0e4819fd3834f91baa010e16facb7771ec96 = $this->env->getExtension("native_profiler");
        $__internal_a975858db31d6a600b18e113fb4d0e4819fd3834f91baa010e16facb7771ec96->enter($__internal_a975858db31d6a600b18e113fb4d0e4819fd3834f91baa010e16facb7771ec96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_a975858db31d6a600b18e113fb4d0e4819fd3834f91baa010e16facb7771ec96->leave($__internal_a975858db31d6a600b18e113fb4d0e4819fd3834f91baa010e16facb7771ec96_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
