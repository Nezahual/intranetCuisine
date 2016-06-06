<?php

/* intranetBundle::layout2.html.twig */
class __TwigTemplate_469e10cd7692389a6036cc40ad94cdbd4f9d78d47787b9bd367f3cdab7daf3fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "intranetBundle::layout2.html.twig", 1);
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
        $__internal_ec26a0bf624f7396d5b0f64279ab94fe6c6a4415b4fc83ad217797c6e79f402b = $this->env->getExtension("native_profiler");
        $__internal_ec26a0bf624f7396d5b0f64279ab94fe6c6a4415b4fc83ad217797c6e79f402b->enter($__internal_ec26a0bf624f7396d5b0f64279ab94fe6c6a4415b4fc83ad217797c6e79f402b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle::layout2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec26a0bf624f7396d5b0f64279ab94fe6c6a4415b4fc83ad217797c6e79f402b->leave($__internal_ec26a0bf624f7396d5b0f64279ab94fe6c6a4415b4fc83ad217797c6e79f402b_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_863a0f82b8ab32296c2406bcaca91df376c004cac7dab8923e0e1acf5436bea0 = $this->env->getExtension("native_profiler");
        $__internal_863a0f82b8ab32296c2406bcaca91df376c004cac7dab8923e0e1acf5436bea0->enter($__internal_863a0f82b8ab32296c2406bcaca91df376c004cac7dab8923e0e1acf5436bea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo " <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/alimentos/estilo.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
  <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js\"></script>
  <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
<meta charset=\"UTF-8\">
";
        
        $__internal_863a0f82b8ab32296c2406bcaca91df376c004cac7dab8923e0e1acf5436bea0->leave($__internal_863a0f82b8ab32296c2406bcaca91df376c004cac7dab8923e0e1acf5436bea0_prof);

    }

    // line 11
    public function block_cabecera($context, array $blocks = array())
    {
        $__internal_e23f707d39a4abf5b0588c259da35c47bba22c3595d4f6ed3a608e6105074d65 = $this->env->getExtension("native_profiler");
        $__internal_e23f707d39a4abf5b0588c259da35c47bba22c3595d4f6ed3a608e6105074d65->enter($__internal_e23f707d39a4abf5b0588c259da35c47bba22c3595d4f6ed3a608e6105074d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cabecera"));

        // line 12
        echo "    <div id=\"cabecera\">
    </div>
";
        
        $__internal_e23f707d39a4abf5b0588c259da35c47bba22c3595d4f6ed3a608e6105074d65->leave($__internal_e23f707d39a4abf5b0588c259da35c47bba22c3595d4f6ed3a608e6105074d65_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed931fb31b242c3633c075b810d987877d0312886ebe31429a11fdc0f4650f92 = $this->env->getExtension("native_profiler");
        $__internal_ed931fb31b242c3633c075b810d987877d0312886ebe31429a11fdc0f4650f92->enter($__internal_ed931fb31b242c3633c075b810d987877d0312886ebe31429a11fdc0f4650f92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ed931fb31b242c3633c075b810d987877d0312886ebe31429a11fdc0f4650f92->leave($__internal_ed931fb31b242c3633c075b810d987877d0312886ebe31429a11fdc0f4650f92_prof);

    }

    // line 18
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_660a920695c2b690fab17cd3ab386170bd49a96925e85993b09fd1d05c0ea961 = $this->env->getExtension("native_profiler");
        $__internal_660a920695c2b690fab17cd3ab386170bd49a96925e85993b09fd1d05c0ea961->enter($__internal_660a920695c2b690fab17cd3ab386170bd49a96925e85993b09fd1d05c0ea961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 19
        echo "        ";
        
        $__internal_660a920695c2b690fab17cd3ab386170bd49a96925e85993b09fd1d05c0ea961->leave($__internal_660a920695c2b690fab17cd3ab386170bd49a96925e85993b09fd1d05c0ea961_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle::layout2.html.twig";
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
