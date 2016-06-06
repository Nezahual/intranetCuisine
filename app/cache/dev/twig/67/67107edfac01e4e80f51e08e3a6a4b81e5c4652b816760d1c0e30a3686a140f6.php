<?php

/* intranetBundle:Default:landing.html.twig */
class __TwigTemplate_38efeadc5e0d91ed7bd461b94b2318bd70b484ccc2ed9a5234fc9e3e67ab3ab4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "intranetBundle:Default:landing.html.twig", 1);
        $this->blocks = array(
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "intranetBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_50f37230b9fcd7c472a434fd1c3a06a6defc0302053709008f81a7ae625348af = $this->env->getExtension("native_profiler");
        $__internal_50f37230b9fcd7c472a434fd1c3a06a6defc0302053709008f81a7ae625348af->enter($__internal_50f37230b9fcd7c472a434fd1c3a06a6defc0302053709008f81a7ae625348af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:landing.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50f37230b9fcd7c472a434fd1c3a06a6defc0302053709008f81a7ae625348af->leave($__internal_50f37230b9fcd7c472a434fd1c3a06a6defc0302053709008f81a7ae625348af_prof);

    }

    // line 4
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_2cebfe9e4f1702c1c414e744a4f371405eb0bf2b287ab02ccce66e351bfbaf24 = $this->env->getExtension("native_profiler");
        $__internal_2cebfe9e4f1702c1c414e744a4f371405eb0bf2b287ab02ccce66e351bfbaf24->enter($__internal_2cebfe9e4f1702c1c414e744a4f371405eb0bf2b287ab02ccce66e351bfbaf24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 5
        echo "<h2> LANDING PAGE   </h2>
";
        // line 6
        echo $this->env->getExtension('translator')->getTranslator()->trans("This is Landing Page", array(), "messages");
        // line 7
        echo "<hr>
Menu not visible for all => indicate routes?<br><br>
\t<b>Login\t </b>  /<i>language</i>/intranet_logout<br>
\t<b>Channel</b>  /<i>language</i>/channels<br>
\t<b>News\t  </b> /<i>language</i>/news<br>
\t<b>Tasks\t </b>  /<i>language</i>/tasks<br>
  <b>User Management\t </b>  /<i>language</i>/userManagement<br>
<br>The language can be /es/, /en/ or /fr/
";
        
        $__internal_2cebfe9e4f1702c1c414e744a4f371405eb0bf2b287ab02ccce66e351bfbaf24->leave($__internal_2cebfe9e4f1702c1c414e744a4f371405eb0bf2b287ab02ccce66e351bfbaf24_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle:Default:landing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 7,  43 => 6,  40 => 5,  34 => 4,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* */
/* */
/* {% block contenido %}*/
/* <h2> LANDING PAGE   </h2>*/
/* {% trans %} This is Landing Page {% endtrans %}*/
/* <hr>*/
/* Menu not visible for all => indicate routes?<br><br>*/
/* 	<b>Login	 </b>  /<i>language</i>/intranet_logout<br>*/
/* 	<b>Channel</b>  /<i>language</i>/channels<br>*/
/* 	<b>News	  </b> /<i>language</i>/news<br>*/
/* 	<b>Tasks	 </b>  /<i>language</i>/tasks<br>*/
/*   <b>User Management	 </b>  /<i>language</i>/userManagement<br>*/
/* <br>The language can be /es/, /en/ or /fr/*/
/* {% endblock %}*/
/* */
