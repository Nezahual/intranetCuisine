<?php

/* @intranet/Default/formExpenses.html.twig */
class __TwigTemplate_6f73e423bb0efb7872bbdcc27a3648bf120c5e2d8ddd99edd6942f04c83312c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "@intranet/Default/formExpenses.html.twig", 1);
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
        $__internal_1be35130f6819a6ca47222480c07497e6aacc8cf96ff3d660e5c38a9da194bc6 = $this->env->getExtension("native_profiler");
        $__internal_1be35130f6819a6ca47222480c07497e6aacc8cf96ff3d660e5c38a9da194bc6->enter($__internal_1be35130f6819a6ca47222480c07497e6aacc8cf96ff3d660e5c38a9da194bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@intranet/Default/formExpenses.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1be35130f6819a6ca47222480c07497e6aacc8cf96ff3d660e5c38a9da194bc6->leave($__internal_1be35130f6819a6ca47222480c07497e6aacc8cf96ff3d660e5c38a9da194bc6_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_cb7d3cc78b1a398e418189151b094b98b7e02c5087e5f1000df645d1373cbc4b = $this->env->getExtension("native_profiler");
        $__internal_cb7d3cc78b1a398e418189151b094b98b7e02c5087e5f1000df645d1373cbc4b->enter($__internal_cb7d3cc78b1a398e418189151b094b98b7e02c5087e5f1000df645d1373cbc4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<h3>EXPENSES</h3><br>
 <form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("intranet_f");
        echo "\" method=\"post\" style=\"border: 1px solid;width: 500px;\">
        <label>Company:</label><input type=\"text\" name=\"company\"><br>
        <label>Importe:</label><input type=\"number\" step=\"any\" name=\"amount\"> €<br>
        <label>Earlier than: </label><input type='date' id=\"earlier\" name=\"earlier\"><BR>
        <input type=\"textarea\" name=\"concept\"> <BR>
                                     <input type=\"submit\" value=\"Modify\">
                                     <input type=\"hidden\" name=\"typeF\" value=\"expenses\">
   </form>


";
        
        $__internal_cb7d3cc78b1a398e418189151b094b98b7e02c5087e5f1000df645d1373cbc4b->leave($__internal_cb7d3cc78b1a398e418189151b094b98b7e02c5087e5f1000df645d1373cbc4b_prof);

    }

    public function getTemplateName()
    {
        return "@intranet/Default/formExpenses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* */
/*  {% block contenido %}*/
/* <h3>EXPENSES</h3><br>*/
/*  <form action="{{ path('intranet_f') }}" method="post" style="border: 1px solid;width: 500px;">*/
/*         <label>Company:</label><input type="text" name="company"><br>*/
/*         <label>Importe:</label><input type="number" step="any" name="amount"> €<br>*/
/*         <label>Earlier than: </label><input type='date' id="earlier" name="earlier"><BR>*/
/*         <input type="textarea" name="concept"> <BR>*/
/*                                      <input type="submit" value="Modify">*/
/*                                      <input type="hidden" name="typeF" value="expenses">*/
/*    </form>*/
/* */
/* */
/* {% endblock %}*/
/* */
