<?php

/* intranetBundle:Default:formHours.html.twig */
class __TwigTemplate_f2caaf72fcef9fc2e8b5398cc87c5279d679a0b624a3c00fd99c8e3f16db008c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "intranetBundle:Default:formHours.html.twig", 1);
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
        $__internal_e2feca8df35b532f73a7baa707aab9b1b8622af06f9e36afd674156a903077b7 = $this->env->getExtension("native_profiler");
        $__internal_e2feca8df35b532f73a7baa707aab9b1b8622af06f9e36afd674156a903077b7->enter($__internal_e2feca8df35b532f73a7baa707aab9b1b8622af06f9e36afd674156a903077b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:formHours.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2feca8df35b532f73a7baa707aab9b1b8622af06f9e36afd674156a903077b7->leave($__internal_e2feca8df35b532f73a7baa707aab9b1b8622af06f9e36afd674156a903077b7_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_1c92de72ad0e46b89786219bda517fdacbf0919b83e615dab63a29a05ee6db52 = $this->env->getExtension("native_profiler");
        $__internal_1c92de72ad0e46b89786219bda517fdacbf0919b83e615dab63a29a05ee6db52->enter($__internal_1c92de72ad0e46b89786219bda517fdacbf0919b83e615dab63a29a05ee6db52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

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
        
        $__internal_1c92de72ad0e46b89786219bda517fdacbf0919b83e615dab63a29a05ee6db52->leave($__internal_1c92de72ad0e46b89786219bda517fdacbf0919b83e615dab63a29a05ee6db52_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle:Default:formHours.html.twig";
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
