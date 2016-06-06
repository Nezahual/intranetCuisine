<?php

/* base.html.twig */
class __TwigTemplate_cc4df4d0834dd57484e5c4d626d9f28ba9629f51e8747c1de35fcf361053770a extends Twig_Template
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
        $__internal_69a0571ec57d8b1a2ee432e65908941ecb0fb9192e0b4a4e6dcc5642d0749084 = $this->env->getExtension("native_profiler");
        $__internal_69a0571ec57d8b1a2ee432e65908941ecb0fb9192e0b4a4e6dcc5642d0749084->enter($__internal_69a0571ec57d8b1a2ee432e65908941ecb0fb9192e0b4a4e6dcc5642d0749084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_69a0571ec57d8b1a2ee432e65908941ecb0fb9192e0b4a4e6dcc5642d0749084->leave($__internal_69a0571ec57d8b1a2ee432e65908941ecb0fb9192e0b4a4e6dcc5642d0749084_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5e492245466ecb18ed5a5219b38fd8ee4c66f7f7b22ce440b6bc1847196a3c61 = $this->env->getExtension("native_profiler");
        $__internal_5e492245466ecb18ed5a5219b38fd8ee4c66f7f7b22ce440b6bc1847196a3c61->enter($__internal_5e492245466ecb18ed5a5219b38fd8ee4c66f7f7b22ce440b6bc1847196a3c61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Intranet WebCuisine";
        
        $__internal_5e492245466ecb18ed5a5219b38fd8ee4c66f7f7b22ce440b6bc1847196a3c61->leave($__internal_5e492245466ecb18ed5a5219b38fd8ee4c66f7f7b22ce440b6bc1847196a3c61_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d30cee374ff0bcb9d098832be7eaf06d5573e380850c5c3b8133735d1249017d = $this->env->getExtension("native_profiler");
        $__internal_d30cee374ff0bcb9d098832be7eaf06d5573e380850c5c3b8133735d1249017d->enter($__internal_d30cee374ff0bcb9d098832be7eaf06d5573e380850c5c3b8133735d1249017d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d30cee374ff0bcb9d098832be7eaf06d5573e380850c5c3b8133735d1249017d->leave($__internal_d30cee374ff0bcb9d098832be7eaf06d5573e380850c5c3b8133735d1249017d_prof);

    }

    // line 10
    public function block_cabecera($context, array $blocks = array())
    {
        $__internal_1560b90721e2b039f51d8f92e1a96a0d3b2469ccf1677828158a61bb22a1df9f = $this->env->getExtension("native_profiler");
        $__internal_1560b90721e2b039f51d8f92e1a96a0d3b2469ccf1677828158a61bb22a1df9f->enter($__internal_1560b90721e2b039f51d8f92e1a96a0d3b2469ccf1677828158a61bb22a1df9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cabecera"));

        
        $__internal_1560b90721e2b039f51d8f92e1a96a0d3b2469ccf1677828158a61bb22a1df9f->leave($__internal_1560b90721e2b039f51d8f92e1a96a0d3b2469ccf1677828158a61bb22a1df9f_prof);

    }

    // line 11
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1f3973880b99ba80a3ca0eda9079226422c49e1182979ab8bfa150f9d567e64e = $this->env->getExtension("native_profiler");
        $__internal_1f3973880b99ba80a3ca0eda9079226422c49e1182979ab8bfa150f9d567e64e->enter($__internal_1f3973880b99ba80a3ca0eda9079226422c49e1182979ab8bfa150f9d567e64e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        
        $__internal_1f3973880b99ba80a3ca0eda9079226422c49e1182979ab8bfa150f9d567e64e->leave($__internal_1f3973880b99ba80a3ca0eda9079226422c49e1182979ab8bfa150f9d567e64e_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a9f982055ed86e839f39f65bdca947907ead59ab2a1c17d26a569db72f3b8b6 = $this->env->getExtension("native_profiler");
        $__internal_2a9f982055ed86e839f39f65bdca947907ead59ab2a1c17d26a569db72f3b8b6->enter($__internal_2a9f982055ed86e839f39f65bdca947907ead59ab2a1c17d26a569db72f3b8b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2a9f982055ed86e839f39f65bdca947907ead59ab2a1c17d26a569db72f3b8b6->leave($__internal_2a9f982055ed86e839f39f65bdca947907ead59ab2a1c17d26a569db72f3b8b6_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3a9bf06f082b326b61644e827cd71d462ffeb3e3ae66e34d3a7aa4acd2474ea6 = $this->env->getExtension("native_profiler");
        $__internal_3a9bf06f082b326b61644e827cd71d462ffeb3e3ae66e34d3a7aa4acd2474ea6->enter($__internal_3a9bf06f082b326b61644e827cd71d462ffeb3e3ae66e34d3a7aa4acd2474ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3a9bf06f082b326b61644e827cd71d462ffeb3e3ae66e34d3a7aa4acd2474ea6->leave($__internal_3a9bf06f082b326b61644e827cd71d462ffeb3e3ae66e34d3a7aa4acd2474ea6_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
