<?php

/* @intranet/Default/formVacations.html.twig */
class __TwigTemplate_2db633a3fa715f32e0b1b2a2a89ff3ed33eac31d3c3412d20f53ce59228d0c03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "@intranet/Default/formVacations.html.twig", 1);
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
        $__internal_9e29ebc73fa28732cd94c6696d249bd91745f07eb23aad5812cf551a47eade70 = $this->env->getExtension("native_profiler");
        $__internal_9e29ebc73fa28732cd94c6696d249bd91745f07eb23aad5812cf551a47eade70->enter($__internal_9e29ebc73fa28732cd94c6696d249bd91745f07eb23aad5812cf551a47eade70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@intranet/Default/formVacations.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e29ebc73fa28732cd94c6696d249bd91745f07eb23aad5812cf551a47eade70->leave($__internal_9e29ebc73fa28732cd94c6696d249bd91745f07eb23aad5812cf551a47eade70_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_2f2b4d929bec5898ca99b685e11cefe70388d9e17111a95b81bc0a1a4f3d7ba6 = $this->env->getExtension("native_profiler");
        $__internal_2f2b4d929bec5898ca99b685e11cefe70388d9e17111a95b81bc0a1a4f3d7ba6->enter($__internal_2f2b4d929bec5898ca99b685e11cefe70388d9e17111a95b81bc0a1a4f3d7ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<h3>VACATIONS</h3><br>
 <form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("intranet_f");
        echo "\" method=\"post\" style=\"border: 1px solid;width: 500px;\">
       <label>From:</label><input type='date' id=\"from\" name=\"from\"><BR>
       <label>to: </label><input type='date' id=\"to\" name=\"to\" >
       <BR>
                                    <input type=\"submit\" value=\"Modify\">
                                    <input type=\"hidden\" name=\"typeF\" value=\"vacation\">
  </form>




";
        
        $__internal_2f2b4d929bec5898ca99b685e11cefe70388d9e17111a95b81bc0a1a4f3d7ba6->leave($__internal_2f2b4d929bec5898ca99b685e11cefe70388d9e17111a95b81bc0a1a4f3d7ba6_prof);

    }

    public function getTemplateName()
    {
        return "@intranet/Default/formVacations.html.twig";
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
/* <h3>VACATIONS</h3><br>*/
/*  <form action="{{ path('intranet_f') }}" method="post" style="border: 1px solid;width: 500px;">*/
/*        <label>From:</label><input type='date' id="from" name="from"><BR>*/
/*        <label>to: </label><input type='date' id="to" name="to" >*/
/*        <BR>*/
/*                                     <input type="submit" value="Modify">*/
/*                                     <input type="hidden" name="typeF" value="vacation">*/
/*   </form>*/
/* */
/* */
/* */
/* */
/* {% endblock %}*/
/* */
