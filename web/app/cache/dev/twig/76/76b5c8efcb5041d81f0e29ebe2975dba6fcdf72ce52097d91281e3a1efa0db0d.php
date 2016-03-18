<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_c3319d294c7ec70af533f6eb8ad5c589020186e5851949ba010052f2510037d2 extends Twig_Template
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
        $__internal_089248fb273fc8a574ec74c1843f82eca9679cc84c2c18fe013e5ed747546996 = $this->env->getExtension("native_profiler");
        $__internal_089248fb273fc8a574ec74c1843f82eca9679cc84c2c18fe013e5ed747546996->enter($__internal_089248fb273fc8a574ec74c1843f82eca9679cc84c2c18fe013e5ed747546996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_089248fb273fc8a574ec74c1843f82eca9679cc84c2c18fe013e5ed747546996->leave($__internal_089248fb273fc8a574ec74c1843f82eca9679cc84c2c18fe013e5ed747546996_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
