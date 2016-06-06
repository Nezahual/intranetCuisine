<?php

/* intranetBundle:Default:formVacations.html.twig */
class __TwigTemplate_852eb80068380c882c597ecbe9f4af6252891e839aa6adc365f4cf86abdeff8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "intranetBundle:Default:formVacations.html.twig", 1);
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
        $__internal_fb3dee5a530fd79411103bf45b87f82e3087ddfce679043ac3360363fbd3c1ee = $this->env->getExtension("native_profiler");
        $__internal_fb3dee5a530fd79411103bf45b87f82e3087ddfce679043ac3360363fbd3c1ee->enter($__internal_fb3dee5a530fd79411103bf45b87f82e3087ddfce679043ac3360363fbd3c1ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:formVacations.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb3dee5a530fd79411103bf45b87f82e3087ddfce679043ac3360363fbd3c1ee->leave($__internal_fb3dee5a530fd79411103bf45b87f82e3087ddfce679043ac3360363fbd3c1ee_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_1b43eca579ed5850b93dfffb027f4bbbc056eb61e8aa5a9cc0711d0b51b04dc0 = $this->env->getExtension("native_profiler");
        $__internal_1b43eca579ed5850b93dfffb027f4bbbc056eb61e8aa5a9cc0711d0b51b04dc0->enter($__internal_1b43eca579ed5850b93dfffb027f4bbbc056eb61e8aa5a9cc0711d0b51b04dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

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
        
        $__internal_1b43eca579ed5850b93dfffb027f4bbbc056eb61e8aa5a9cc0711d0b51b04dc0->leave($__internal_1b43eca579ed5850b93dfffb027f4bbbc056eb61e8aa5a9cc0711d0b51b04dc0_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle:Default:formVacations.html.twig";
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
