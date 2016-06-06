<?php

/* intranetBundle:Default:formExpenses.html.twig */
class __TwigTemplate_43e1f0974ac914c72cdce08c158ca55e5741e20f4defd135b97bcb29d3f35b4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "intranetBundle:Default:formExpenses.html.twig", 1);
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
        $__internal_e0eb5ba49020e0ec7256b69219b02f93d584e57135fe0c0dd9928a53cccffc2d = $this->env->getExtension("native_profiler");
        $__internal_e0eb5ba49020e0ec7256b69219b02f93d584e57135fe0c0dd9928a53cccffc2d->enter($__internal_e0eb5ba49020e0ec7256b69219b02f93d584e57135fe0c0dd9928a53cccffc2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:formExpenses.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0eb5ba49020e0ec7256b69219b02f93d584e57135fe0c0dd9928a53cccffc2d->leave($__internal_e0eb5ba49020e0ec7256b69219b02f93d584e57135fe0c0dd9928a53cccffc2d_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_ac57d35f86931a8dd8a68cf3ad077952202f123eb2d2e0f3fd924fd086ed145d = $this->env->getExtension("native_profiler");
        $__internal_ac57d35f86931a8dd8a68cf3ad077952202f123eb2d2e0f3fd924fd086ed145d->enter($__internal_ac57d35f86931a8dd8a68cf3ad077952202f123eb2d2e0f3fd924fd086ed145d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

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
        
        $__internal_ac57d35f86931a8dd8a68cf3ad077952202f123eb2d2e0f3fd924fd086ed145d->leave($__internal_ac57d35f86931a8dd8a68cf3ad077952202f123eb2d2e0f3fd924fd086ed145d_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle:Default:formExpenses.html.twig";
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
