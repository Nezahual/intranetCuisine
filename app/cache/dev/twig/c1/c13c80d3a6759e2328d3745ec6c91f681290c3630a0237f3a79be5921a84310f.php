<?php

/* @intranet/layout2.html.twig */
class __TwigTemplate_77c4467e1945ee0065ea4cdbf9f79bbf09825b1300d8ac33f79ae10b14c995e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@intranet/layout2.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'cabecera' => array($this, 'block_cabecera'),
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
        $__internal_d21971562a7637bb6600b3306f749322374b2a7942d4dbca6138316acf5e4c67 = $this->env->getExtension("native_profiler");
        $__internal_d21971562a7637bb6600b3306f749322374b2a7942d4dbca6138316acf5e4c67->enter($__internal_d21971562a7637bb6600b3306f749322374b2a7942d4dbca6138316acf5e4c67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@intranet/layout2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d21971562a7637bb6600b3306f749322374b2a7942d4dbca6138316acf5e4c67->leave($__internal_d21971562a7637bb6600b3306f749322374b2a7942d4dbca6138316acf5e4c67_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_033b280b18a06098d7e273eefa4e08674e0ef9384ffc98cfa22f52b1da7d9213 = $this->env->getExtension("native_profiler");
        $__internal_033b280b18a06098d7e273eefa4e08674e0ef9384ffc98cfa22f52b1da7d9213->enter($__internal_033b280b18a06098d7e273eefa4e08674e0ef9384ffc98cfa22f52b1da7d9213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo " <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/alimentos/estilo.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
  <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js\"></script>
  <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
<meta charset=\"UTF-8\">
";
        
        $__internal_033b280b18a06098d7e273eefa4e08674e0ef9384ffc98cfa22f52b1da7d9213->leave($__internal_033b280b18a06098d7e273eefa4e08674e0ef9384ffc98cfa22f52b1da7d9213_prof);

    }

    // line 11
    public function block_cabecera($context, array $blocks = array())
    {
        $__internal_b865f736b581de4f189f57626491544c2926950433744ea5f8c2312e35292d2a = $this->env->getExtension("native_profiler");
        $__internal_b865f736b581de4f189f57626491544c2926950433744ea5f8c2312e35292d2a->enter($__internal_b865f736b581de4f189f57626491544c2926950433744ea5f8c2312e35292d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cabecera"));

        // line 12
        echo "    <div id=\"cabecera\">
    </div>
";
        
        $__internal_b865f736b581de4f189f57626491544c2926950433744ea5f8c2312e35292d2a->leave($__internal_b865f736b581de4f189f57626491544c2926950433744ea5f8c2312e35292d2a_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_a9c40c5a1918e5b2826973d3b782c4dee66ae6b18a6c39337c0778fda8ff4d9a = $this->env->getExtension("native_profiler");
        $__internal_a9c40c5a1918e5b2826973d3b782c4dee66ae6b18a6c39337c0778fda8ff4d9a->enter($__internal_a9c40c5a1918e5b2826973d3b782c4dee66ae6b18a6c39337c0778fda8ff4d9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "    <div id=\"contenido\">
        ";
        // line 18
        $this->displayBlock('contenido', $context, $blocks);
        // line 20
        echo "    </div>

    <div id=\"pie\">
        <div align=\"center\"></div>
    </div>
";
        
        $__internal_a9c40c5a1918e5b2826973d3b782c4dee66ae6b18a6c39337c0778fda8ff4d9a->leave($__internal_a9c40c5a1918e5b2826973d3b782c4dee66ae6b18a6c39337c0778fda8ff4d9a_prof);

    }

    // line 18
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_1a389576eef99db703a833bc1fc3a4e98a8e30202325a6da55ac53d2415f267b = $this->env->getExtension("native_profiler");
        $__internal_1a389576eef99db703a833bc1fc3a4e98a8e30202325a6da55ac53d2415f267b->enter($__internal_1a389576eef99db703a833bc1fc3a4e98a8e30202325a6da55ac53d2415f267b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 19
        echo "        ";
        
        $__internal_1a389576eef99db703a833bc1fc3a4e98a8e30202325a6da55ac53d2415f267b->leave($__internal_1a389576eef99db703a833bc1fc3a4e98a8e30202325a6da55ac53d2415f267b_prof);

    }

    public function getTemplateName()
    {
        return "@intranet/layout2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 19,  95 => 18,  83 => 20,  81 => 18,  78 => 17,  72 => 16,  63 => 12,  57 => 11,  43 => 3,  37 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block stylesheets %}*/
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
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <div id="contenido">*/
/*         {% block contenido %}*/
/*         {% endblock %}*/
/*     </div>*/
/* */
/*     <div id="pie">*/
/*         <div align="center"></div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
