<?php

/* intranetBundle::layout.html.twig */
class __TwigTemplate_07ca62dc65daa18585beddd60035b95bea2c1e4f51fc279c2e3bdc5539c4467f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "intranetBundle::layout.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'cabecera' => array($this, 'block_cabecera'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_392fc7edf214e5bc147927712feaf33ed49a6ce2941adabffee8ec7addb936e7 = $this->env->getExtension("native_profiler");
        $__internal_392fc7edf214e5bc147927712feaf33ed49a6ce2941adabffee8ec7addb936e7->enter($__internal_392fc7edf214e5bc147927712feaf33ed49a6ce2941adabffee8ec7addb936e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle::layout.html.twig"));

        // line 2
        $context["__internal_325291d6b7dd0b2da37596a7c18468be76b5df88d6a2e552a0ac22f47e774e56"] = $this->loadTemplate("intranetBundle::macroMenu.html.twig", "intranetBundle::layout.html.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_392fc7edf214e5bc147927712feaf33ed49a6ce2941adabffee8ec7addb936e7->leave($__internal_392fc7edf214e5bc147927712feaf33ed49a6ce2941adabffee8ec7addb936e7_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c9e41a72b60a2f3b343ab9fa24345a03ba3febec1d3a40b37c65e49e30f2bbf0 = $this->env->getExtension("native_profiler");
        $__internal_c9e41a72b60a2f3b343ab9fa24345a03ba3febec1d3a40b37c65e49e30f2bbf0->enter($__internal_c9e41a72b60a2f3b343ab9fa24345a03ba3febec1d3a40b37c65e49e30f2bbf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "<!-- ESTA CARPETA NO ESTÁ CREADA AÚN -->
 <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/alimentos/estilo.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
  <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js\"></script>
  <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
<meta charset=\"UTF-8\">
";
        
        $__internal_c9e41a72b60a2f3b343ab9fa24345a03ba3febec1d3a40b37c65e49e30f2bbf0->leave($__internal_c9e41a72b60a2f3b343ab9fa24345a03ba3febec1d3a40b37c65e49e30f2bbf0_prof);

    }

    // line 14
    public function block_cabecera($context, array $blocks = array())
    {
        $__internal_310539a0242726fbb0cb75251417bb8f02fb6f9ae3643269a5e82bb7d24100c6 = $this->env->getExtension("native_profiler");
        $__internal_310539a0242726fbb0cb75251417bb8f02fb6f9ae3643269a5e82bb7d24100c6->enter($__internal_310539a0242726fbb0cb75251417bb8f02fb6f9ae3643269a5e82bb7d24100c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cabecera"));

        // line 15
        echo "    <div id=\"cabecera\">
      <h1>Here will be the image</h1>
    </div>
";
        
        $__internal_310539a0242726fbb0cb75251417bb8f02fb6f9ae3643269a5e82bb7d24100c6->leave($__internal_310539a0242726fbb0cb75251417bb8f02fb6f9ae3643269a5e82bb7d24100c6_prof);

    }

    // line 20
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fd4b55c64909350fd6ecb5ed31845d18db0b2d6c582c8bb549f00bc70940d04a = $this->env->getExtension("native_profiler");
        $__internal_fd4b55c64909350fd6ecb5ed31845d18db0b2d6c582c8bb549f00bc70940d04a->enter($__internal_fd4b55c64909350fd6ecb5ed31845d18db0b2d6c582c8bb549f00bc70940d04a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 21
        echo "  ";
        // line 22
        echo "  ";
        // line 23
        echo "  ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("intranetBundle:Menu:menu"));
        echo "
";
        
        $__internal_fd4b55c64909350fd6ecb5ed31845d18db0b2d6c582c8bb549f00bc70940d04a->leave($__internal_fd4b55c64909350fd6ecb5ed31845d18db0b2d6c582c8bb549f00bc70940d04a_prof);

    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        $__internal_92d4115dc9a6341fcc8bba99f04329d50cd4f2430f0fda2d4d69bc5b575d4a3b = $this->env->getExtension("native_profiler");
        $__internal_92d4115dc9a6341fcc8bba99f04329d50cd4f2430f0fda2d4d69bc5b575d4a3b->enter($__internal_92d4115dc9a6341fcc8bba99f04329d50cd4f2430f0fda2d4d69bc5b575d4a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 28
        echo "    <div id=\"contenido\">
        ";
        // line 29
        $this->displayBlock('contenido', $context, $blocks);
        // line 31
        echo "    </div>

    <div id=\"pie\">
        <hr/>
        <div align=\"center\">- pie de página -</div>
    </div>
";
        
        $__internal_92d4115dc9a6341fcc8bba99f04329d50cd4f2430f0fda2d4d69bc5b575d4a3b->leave($__internal_92d4115dc9a6341fcc8bba99f04329d50cd4f2430f0fda2d4d69bc5b575d4a3b_prof);

    }

    // line 29
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_537f1521977b161e4fbdb0753ea8265bf06f80d5f84243d7263b172d24acce34 = $this->env->getExtension("native_profiler");
        $__internal_537f1521977b161e4fbdb0753ea8265bf06f80d5f84243d7263b172d24acce34->enter($__internal_537f1521977b161e4fbdb0753ea8265bf06f80d5f84243d7263b172d24acce34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 30
        echo "        ";
        
        $__internal_537f1521977b161e4fbdb0753ea8265bf06f80d5f84243d7263b172d24acce34->leave($__internal_537f1521977b161e4fbdb0753ea8265bf06f80d5f84243d7263b172d24acce34_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 30,  123 => 29,  110 => 31,  108 => 29,  105 => 28,  99 => 27,  89 => 23,  87 => 22,  85 => 21,  79 => 20,  69 => 15,  63 => 14,  50 => 6,  47 => 5,  41 => 4,  34 => 1,  32 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% from 'intranetBundle::macroMenu.html.twig' import uROL %}*/
/* */
/* {% block stylesheets %}*/
/* <!-- ESTA CARPETA NO ESTÁ CREADA AÚN -->*/
/*  <link href="{{ asset('bundles/alimentos/estilo.css') }}" type="text/css" rel="stylesheet" />*/
/*   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">*/
/*   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>*/
/*   <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>*/
/* <meta charset="UTF-8">*/
/* {% endblock %}*/
/* */
/* */
/* {% block cabecera %}*/
/*     <div id="cabecera">*/
/*       <h1>Here will be the image</h1>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*   {#{% include '::menu.html.twig' %}#}*/
/*   {# {{ uROL('buo') }} #}*/
/*   {{ render(controller('intranetBundle:Menu:menu')) }}*/
/* {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/*     <div id="contenido">*/
/*         {% block contenido %}*/
/*         {% endblock %}*/
/*     </div>*/
/* */
/*     <div id="pie">*/
/*         <hr/>*/
/*         <div align="center">- pie de página -</div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
