<?php

/* @intranet/Default/formHours.html.twig */
class __TwigTemplate_b8bc47cc16413ef00a97f608f052627880b5a79bc34467f826804fa7e9e48498 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "@intranet/Default/formHours.html.twig", 1);
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
        $__internal_2add068630de3226f67d81005b31996f65584bf0be196a2f0fd9ac7eb9893c10 = $this->env->getExtension("native_profiler");
        $__internal_2add068630de3226f67d81005b31996f65584bf0be196a2f0fd9ac7eb9893c10->enter($__internal_2add068630de3226f67d81005b31996f65584bf0be196a2f0fd9ac7eb9893c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@intranet/Default/formHours.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2add068630de3226f67d81005b31996f65584bf0be196a2f0fd9ac7eb9893c10->leave($__internal_2add068630de3226f67d81005b31996f65584bf0be196a2f0fd9ac7eb9893c10_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_83cb318038b7fd4c7c91c6edaf700f29c6a168f83eed512e08d0b0cc32800232 = $this->env->getExtension("native_profiler");
        $__internal_83cb318038b7fd4c7c91c6edaf700f29c6a168f83eed512e08d0b0cc32800232->enter($__internal_83cb318038b7fd4c7c91c6edaf700f29c6a168f83eed512e08d0b0cc32800232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<h3>HOURS</h3><br>
 <form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("intranet_f");
        echo "\" method=\"post\" style=\"border: 1px solid;width: 500px;\">
        <label>Number of hours: </label><input type='number' name=\"numhours\" id=\"numhours\" min=\"1\" max=\"50\"><i>min:1, max:50</i><BR>
        <label>Between: </label><input type='date' id=\"betw\" name=\"betw\"><BR>
        <label>and: </label><input type='date' id=\"and\" name=\"and\">
        <i>default: 1 WEEK, max 3 months</i><BR>
                                     <input type=\"submit\" value=\"Modify\">
                                     <input type=\"hidden\" name=\"typeF\" value=\"hours\">
   </form>


";
        
        $__internal_83cb318038b7fd4c7c91c6edaf700f29c6a168f83eed512e08d0b0cc32800232->leave($__internal_83cb318038b7fd4c7c91c6edaf700f29c6a168f83eed512e08d0b0cc32800232_prof);

    }

    public function getTemplateName()
    {
        return "@intranet/Default/formHours.html.twig";
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
/* <h3>HOURS</h3><br>*/
/*  <form action="{{ path('intranet_f') }}" method="post" style="border: 1px solid;width: 500px;">*/
/*         <label>Number of hours: </label><input type='number' name="numhours" id="numhours" min="1" max="50"><i>min:1, max:50</i><BR>*/
/*         <label>Between: </label><input type='date' id="betw" name="betw"><BR>*/
/*         <label>and: </label><input type='date' id="and" name="and">*/
/*         <i>default: 1 WEEK, max 3 months</i><BR>*/
/*                                      <input type="submit" value="Modify">*/
/*                                      <input type="hidden" name="typeF" value="hours">*/
/*    </form>*/
/* */
/* */
/* {% endblock %}*/
/* */
