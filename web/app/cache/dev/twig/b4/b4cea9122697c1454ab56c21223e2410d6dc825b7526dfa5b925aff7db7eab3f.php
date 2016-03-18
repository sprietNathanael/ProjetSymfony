<?php

/* GestionEtudiantBundle::index.html.twig */
class __TwigTemplate_5a084d44819b08f8b5296c6568673402ca9e28ea4f190758483943d8d42eb017 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_537ec9a9b524b9e256ea648abd1e437939a98257682004a45dd5c3fe32ffa2f8 = $this->env->getExtension("native_profiler");
        $__internal_537ec9a9b524b9e256ea648abd1e437939a98257682004a45dd5c3fe32ffa2f8->enter($__internal_537ec9a9b524b9e256ea648abd1e437939a98257682004a45dd5c3fe32ffa2f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionEtudiantBundle::index.html.twig"));

        // line 1
        echo "<html>
    <head>
        <title>Gestion des étudiants</title>
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">
        <link rel=\"stylesheet\" href=\"https://code.getmdl.io/1.1.1/material.indigo-pink.min.css\">
        <script defer src=\"https://code.getmdl.io/1.1.1/material.min.js\"></script>
    </head>
    <body>
        <!-- Always shows a header, even in smaller screens. -->
        <div class=\"mdl-layout mdl-js-layout mdl-layout--fixed-header\">
            <header class=\"mdl-layout__header\">
                <div class=\"mdl-layout__header-row\">
                    <!-- Title -->
                    <span class=\"mdl-layout-title\">Gestion des étudiants</span>
                    <!-- Add spacer, to align navigation to the right -->
                    <div class=\"mdl-layout-spacer\"></div>
                    <!-- Navigation. We hide it in small screens. -->
                    <nav class=\"mdl-navigation mdl-layout--large-screen-only\">
                        <a class=\"mdl-navigation__link\" href=\"\">Link</a>
                        <a class=\"mdl-navigation__link\" href=\"\">Link</a>
                        <a class=\"mdl-navigation__link\" href=\"\">Link</a>
                        <a class=\"mdl-navigation__link\" href=\"\">Link</a>
                    </nav>
                </div>
            </header>
            <div class=\"mdl-layout__drawer\">
                <span class=\"mdl-layout-title\">Title</span>
                <nav class=\"mdl-navigation\">
                    <a class=\"mdl-navigation__link\" href=\"\">Link</a>
                    <a class=\"mdl-navigation__link\" href=\"\">Link</a>
                    <a class=\"mdl-navigation__link\" href=\"\">Link</a>
                    <a class=\"mdl-navigation__link\" href=\"\">Link</a>
                </nav>
            </div>
            <main class=\"mdl-layout__content\">
                <div class=\"page-content\">";
        // line 36
        $this->displayBlock('container', $context, $blocks);
        echo "</div>
            </main>
        </div>
    </body>
</html>";
        
        $__internal_537ec9a9b524b9e256ea648abd1e437939a98257682004a45dd5c3fe32ffa2f8->leave($__internal_537ec9a9b524b9e256ea648abd1e437939a98257682004a45dd5c3fe32ffa2f8_prof);

    }

    public function block_container($context, array $blocks = array())
    {
        $__internal_d047c80b988f5af779f710177e02c502058e74d510710ec9146f8c0a8e17efa4 = $this->env->getExtension("native_profiler");
        $__internal_d047c80b988f5af779f710177e02c502058e74d510710ec9146f8c0a8e17efa4->enter($__internal_d047c80b988f5af779f710177e02c502058e74d510710ec9146f8c0a8e17efa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        
        $__internal_d047c80b988f5af779f710177e02c502058e74d510710ec9146f8c0a8e17efa4->leave($__internal_d047c80b988f5af779f710177e02c502058e74d510710ec9146f8c0a8e17efa4_prof);

    }

    public function getTemplateName()
    {
        return "GestionEtudiantBundle::index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  60 => 36,  23 => 1,);
    }
}
/* <html>*/
/*     <head>*/
/*         <title>Gestion des étudiants</title>*/
/*         <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">*/
/*         <link rel="stylesheet" href="https://code.getmdl.io/1.1.1/material.indigo-pink.min.css">*/
/*         <script defer src="https://code.getmdl.io/1.1.1/material.min.js"></script>*/
/*     </head>*/
/*     <body>*/
/*         <!-- Always shows a header, even in smaller screens. -->*/
/*         <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">*/
/*             <header class="mdl-layout__header">*/
/*                 <div class="mdl-layout__header-row">*/
/*                     <!-- Title -->*/
/*                     <span class="mdl-layout-title">Gestion des étudiants</span>*/
/*                     <!-- Add spacer, to align navigation to the right -->*/
/*                     <div class="mdl-layout-spacer"></div>*/
/*                     <!-- Navigation. We hide it in small screens. -->*/
/*                     <nav class="mdl-navigation mdl-layout--large-screen-only">*/
/*                         <a class="mdl-navigation__link" href="">Link</a>*/
/*                         <a class="mdl-navigation__link" href="">Link</a>*/
/*                         <a class="mdl-navigation__link" href="">Link</a>*/
/*                         <a class="mdl-navigation__link" href="">Link</a>*/
/*                     </nav>*/
/*                 </div>*/
/*             </header>*/
/*             <div class="mdl-layout__drawer">*/
/*                 <span class="mdl-layout-title">Title</span>*/
/*                 <nav class="mdl-navigation">*/
/*                     <a class="mdl-navigation__link" href="">Link</a>*/
/*                     <a class="mdl-navigation__link" href="">Link</a>*/
/*                     <a class="mdl-navigation__link" href="">Link</a>*/
/*                     <a class="mdl-navigation__link" href="">Link</a>*/
/*                 </nav>*/
/*             </div>*/
/*             <main class="mdl-layout__content">*/
/*                 <div class="page-content">{% block container%}{% endblock %}</div>*/
/*             </main>*/
/*         </div>*/
/*     </body>*/
/* </html>*/
