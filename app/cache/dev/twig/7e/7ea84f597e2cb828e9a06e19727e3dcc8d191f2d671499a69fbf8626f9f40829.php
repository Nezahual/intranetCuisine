<?php

/* @intranet/Default/formRequest.html.twig */
class __TwigTemplate_dbb8837e559d862854170657c7a4f753cc1142314139168027242da5d2267c43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "@intranet/Default/formRequest.html.twig", 1);
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
        $__internal_3f379ac2ce64353897156ff1625a4af24a3126c32ef87b5db6229fa286026aee = $this->env->getExtension("native_profiler");
        $__internal_3f379ac2ce64353897156ff1625a4af24a3126c32ef87b5db6229fa286026aee->enter($__internal_3f379ac2ce64353897156ff1625a4af24a3126c32ef87b5db6229fa286026aee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@intranet/Default/formRequest.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f379ac2ce64353897156ff1625a4af24a3126c32ef87b5db6229fa286026aee->leave($__internal_3f379ac2ce64353897156ff1625a4af24a3126c32ef87b5db6229fa286026aee_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_67521a01af8126da3f591f2f01d64a03adb55b59f15774bcf9c481b77e441b33 = $this->env->getExtension("native_profiler");
        $__internal_67521a01af8126da3f591f2f01d64a03adb55b59f15774bcf9c481b77e441b33->enter($__internal_67521a01af8126da3f591f2f01d64a03adb55b59f15774bcf9c481b77e441b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<h3>REQUEST BUSINESS TRIP</h3><br>
 <form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("intranet_f");
        echo "\" method=\"post\" style=\"border: 1px solid;width: 500px;\">
         <label>From: </label><input type='date' id=\"from\" name=\"from\"><BR>
         <label>to: </label><input type='date' id=\"to\" name=\"to\"><BR>
         <label>Where:</label><input type=\"text\" name=\"where\"><br>
         <label>Congress<i>if any</i>:</label><input type=\"text\" name=\"congress\"><br>
         <label>Reason:</label><input type=\"textarea\" name=\"reason\"><br>
                                      <input type=\"submit\" value=\"Modify\">
                                      <input type=\"hidden\" name=\"typeF\" value=\"businessRequest\">
    </form>



";
        
        $__internal_67521a01af8126da3f591f2f01d64a03adb55b59f15774bcf9c481b77e441b33->leave($__internal_67521a01af8126da3f591f2f01d64a03adb55b59f15774bcf9c481b77e441b33_prof);

    }

    public function getTemplateName()
    {
        return "@intranet/Default/formRequest.html.twig";
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
/* <h3>REQUEST BUSINESS TRIP</h3><br>*/
/*  <form action="{{ path('intranet_f') }}" method="post" style="border: 1px solid;width: 500px;">*/
/*          <label>From: </label><input type='date' id="from" name="from"><BR>*/
/*          <label>to: </label><input type='date' id="to" name="to"><BR>*/
/*          <label>Where:</label><input type="text" name="where"><br>*/
/*          <label>Congress<i>if any</i>:</label><input type="text" name="congress"><br>*/
/*          <label>Reason:</label><input type="textarea" name="reason"><br>*/
/*                                       <input type="submit" value="Modify">*/
/*                                       <input type="hidden" name="typeF" value="businessRequest">*/
/*     </form>*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
