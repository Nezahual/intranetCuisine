<?php

/* ::base.html.twig */
class __TwigTemplate_991e30dbd36715ed6dde7e888352813eab5dceae9d04a2012e63de8d76e8b5cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'cabecera' => array($this, 'block_cabecera'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a4646e06574328cfc1e4d1801615fcb405046c3a43b6013540ffbad1719a8bd4 = $this->env->getExtension("native_profiler");
        $__internal_a4646e06574328cfc1e4d1801615fcb405046c3a43b6013540ffbad1719a8bd4->enter($__internal_a4646e06574328cfc1e4d1801615fcb405046c3a43b6013540ffbad1719a8bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('cabecera', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('menu', $context, $blocks);
        // line 12
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 14
        echo "    </body>
</html>
";
        
        $__internal_a4646e06574328cfc1e4d1801615fcb405046c3a43b6013540ffbad1719a8bd4->leave($__internal_a4646e06574328cfc1e4d1801615fcb405046c3a43b6013540ffbad1719a8bd4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c0cff081b533f26f8cdf1f1f17383d72179d893f1235de6a3fcf331ce37b476c = $this->env->getExtension("native_profiler");
        $__internal_c0cff081b533f26f8cdf1f1f17383d72179d893f1235de6a3fcf331ce37b476c->enter($__internal_c0cff081b533f26f8cdf1f1f17383d72179d893f1235de6a3fcf331ce37b476c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Intranet WebCuisine";
        
        $__internal_c0cff081b533f26f8cdf1f1f17383d72179d893f1235de6a3fcf331ce37b476c->leave($__internal_c0cff081b533f26f8cdf1f1f17383d72179d893f1235de6a3fcf331ce37b476c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_53742de561b7c73dd0928bab72e8267f9d1b0b15f472bb33658589c7899b973a = $this->env->getExtension("native_profiler");
        $__internal_53742de561b7c73dd0928bab72e8267f9d1b0b15f472bb33658589c7899b973a->enter($__internal_53742de561b7c73dd0928bab72e8267f9d1b0b15f472bb33658589c7899b973a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_53742de561b7c73dd0928bab72e8267f9d1b0b15f472bb33658589c7899b973a->leave($__internal_53742de561b7c73dd0928bab72e8267f9d1b0b15f472bb33658589c7899b973a_prof);

    }

    // line 10
    public function block_cabecera($context, array $blocks = array())
    {
        $__internal_d3ab7930ad43f810545bf8a5f7414fd441a30a035ec5120406962e610050e351 = $this->env->getExtension("native_profiler");
        $__internal_d3ab7930ad43f810545bf8a5f7414fd441a30a035ec5120406962e610050e351->enter($__internal_d3ab7930ad43f810545bf8a5f7414fd441a30a035ec5120406962e610050e351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cabecera"));

        
        $__internal_d3ab7930ad43f810545bf8a5f7414fd441a30a035ec5120406962e610050e351->leave($__internal_d3ab7930ad43f810545bf8a5f7414fd441a30a035ec5120406962e610050e351_prof);

    }

    // line 11
    public function block_menu($context, array $blocks = array())
    {
        $__internal_06d55958c4444b555901d8cd0220fd9b51581094bb9365eb9d7d80577ce8f239 = $this->env->getExtension("native_profiler");
        $__internal_06d55958c4444b555901d8cd0220fd9b51581094bb9365eb9d7d80577ce8f239->enter($__internal_06d55958c4444b555901d8cd0220fd9b51581094bb9365eb9d7d80577ce8f239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        
        $__internal_06d55958c4444b555901d8cd0220fd9b51581094bb9365eb9d7d80577ce8f239->leave($__internal_06d55958c4444b555901d8cd0220fd9b51581094bb9365eb9d7d80577ce8f239_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_462cc32425994cb2645dcbe86e14410d204c8544ee17eee4ca9f78deb58057e8 = $this->env->getExtension("native_profiler");
        $__internal_462cc32425994cb2645dcbe86e14410d204c8544ee17eee4ca9f78deb58057e8->enter($__internal_462cc32425994cb2645dcbe86e14410d204c8544ee17eee4ca9f78deb58057e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_462cc32425994cb2645dcbe86e14410d204c8544ee17eee4ca9f78deb58057e8->leave($__internal_462cc32425994cb2645dcbe86e14410d204c8544ee17eee4ca9f78deb58057e8_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_12e68695822c4e954775b7384165c64aab74c770c70fdd149b80b4728ec7942e = $this->env->getExtension("native_profiler");
        $__internal_12e68695822c4e954775b7384165c64aab74c770c70fdd149b80b4728ec7942e->enter($__internal_12e68695822c4e954775b7384165c64aab74c770c70fdd149b80b4728ec7942e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_12e68695822c4e954775b7384165c64aab74c770c70fdd149b80b4728ec7942e->leave($__internal_12e68695822c4e954775b7384165c64aab74c770c70fdd149b80b4728ec7942e_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 13,  112 => 12,  101 => 11,  90 => 10,  79 => 6,  67 => 5,  58 => 14,  55 => 13,  52 => 12,  49 => 11,  47 => 10,  40 => 7,  38 => 6,  34 => 5,  28 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Intranet WebCuisine{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block cabecera %}{% endblock %}*/
/*         {% block menu %}{% endblock %}*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
