<?php

/* intranetBundle:Default:formRequest.html.twig */
class __TwigTemplate_a12692f67fcd7c0aa760c81879b61aeee1d82ef2471f71c9b6e11a1d32d72f7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "intranetBundle:Default:formRequest.html.twig", 1);
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
        $__internal_4e3537f219f840a5e6d735d2a434fe4fb74a668624a02ab84f41566b91f7121f = $this->env->getExtension("native_profiler");
        $__internal_4e3537f219f840a5e6d735d2a434fe4fb74a668624a02ab84f41566b91f7121f->enter($__internal_4e3537f219f840a5e6d735d2a434fe4fb74a668624a02ab84f41566b91f7121f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:formRequest.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e3537f219f840a5e6d735d2a434fe4fb74a668624a02ab84f41566b91f7121f->leave($__internal_4e3537f219f840a5e6d735d2a434fe4fb74a668624a02ab84f41566b91f7121f_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_bba16aa8c19dfdb4d14d06460dfe85a9879a8384061267d4bb1b565b14582c16 = $this->env->getExtension("native_profiler");
        $__internal_bba16aa8c19dfdb4d14d06460dfe85a9879a8384061267d4bb1b565b14582c16->enter($__internal_bba16aa8c19dfdb4d14d06460dfe85a9879a8384061267d4bb1b565b14582c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

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
        
        $__internal_bba16aa8c19dfdb4d14d06460dfe85a9879a8384061267d4bb1b565b14582c16->leave($__internal_bba16aa8c19dfdb4d14d06460dfe85a9879a8384061267d4bb1b565b14582c16_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle:Default:formRequest.html.twig";
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
