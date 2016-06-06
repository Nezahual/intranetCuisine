<?php

/* intranetBundle:Default:editTrip.html.twig */
class __TwigTemplate_272dca80e9e3820173b7aac9cb19c24cb317491ca6f6598003a271fe6a913f68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "intranetBundle:Default:editTrip.html.twig", 1);
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
        $__internal_b5af2f4e768b45b3e69258dc47e3b622fb1d9db9887cc00ce80b4249d6f81744 = $this->env->getExtension("native_profiler");
        $__internal_b5af2f4e768b45b3e69258dc47e3b622fb1d9db9887cc00ce80b4249d6f81744->enter($__internal_b5af2f4e768b45b3e69258dc47e3b622fb1d9db9887cc00ce80b4249d6f81744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:editTrip.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5af2f4e768b45b3e69258dc47e3b622fb1d9db9887cc00ce80b4249d6f81744->leave($__internal_b5af2f4e768b45b3e69258dc47e3b622fb1d9db9887cc00ce80b4249d6f81744_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_3546b97b6d3f05aa2f7cfd606fcc81f2cb0df2a18f5c9f37a5d86ade4b1544b0 = $this->env->getExtension("native_profiler");
        $__internal_3546b97b6d3f05aa2f7cfd606fcc81f2cb0df2a18f5c9f37a5d86ade4b1544b0->enter($__internal_3546b97b6d3f05aa2f7cfd606fcc81f2cb0df2a18f5c9f37a5d86ade4b1544b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<h3>EXPENSES</h3><br>
 <form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("intranet_editForm");
        echo "\" method=\"post\" style=\"border: 1px solid;width: 500px;\">
        <label>From: </label><input type='date' id=\"from\" name=\"from\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "date1", array()), "html", null, true);
        echo "\"><BR>
        <label>to: </label><input type='date' id=\"to\" name=\"to\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "date2", array()), "html", null, true);
        echo "\"><BR>
        <label>Where:</label><input type=\"text\" name=\"where\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "place", array()), "html", null, true);
        echo "\"><br>
        <label>Congress<i>if any</i>:</label><input type=\"text\" name=\"congress\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nameCongress", array()), "html", null, true);
        echo "\"><br>
        <label>Reason:</label><input type=\"textarea\" name=\"reason\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "reasons", array()), "html", null, true);
        echo "\"><br>
        ";
        // line 11
        if (($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "isread", array()) == 0)) {
            // line 12
            echo "                                     <input type=\"submit\" value=\"Delete\" name=\"delete\">
                                     <input type=\"hidden\" name=\"typeF\" value=\"vacations\">
                                     <input type=\"hidden\" name=\"id\" value=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "id", array()), "html", null, true);
            echo "\">
        ";
        }
        // line 16
        echo "   </form>


";
        
        $__internal_3546b97b6d3f05aa2f7cfd606fcc81f2cb0df2a18f5c9f37a5d86ade4b1544b0->leave($__internal_3546b97b6d3f05aa2f7cfd606fcc81f2cb0df2a18f5c9f37a5d86ade4b1544b0_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle:Default:editTrip.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 16,  73 => 14,  69 => 12,  67 => 11,  63 => 10,  59 => 9,  55 => 8,  51 => 7,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* */
/*  {% block contenido %}*/
/* <h3>EXPENSES</h3><br>*/
/*  <form action="{{ path('intranet_editForm') }}" method="post" style="border: 1px solid;width: 500px;">*/
/*         <label>From: </label><input type='date' id="from" name="from" value="{{ f.date1 }}"><BR>*/
/*         <label>to: </label><input type='date' id="to" name="to" value="{{ f.date2 }}"><BR>*/
/*         <label>Where:</label><input type="text" name="where" value="{{ f.place }}"><br>*/
/*         <label>Congress<i>if any</i>:</label><input type="text" name="congress" value="{{ f.nameCongress }}"><br>*/
/*         <label>Reason:</label><input type="textarea" name="reason" value="{{ f.reasons }}"><br>*/
/*         {% if f.isread==0 %}*/
/*                                      <input type="submit" value="Delete" name="delete">*/
/*                                      <input type="hidden" name="typeF" value="vacations">*/
/*                                      <input type="hidden" name="id" value="{{ f.id }}">*/
/*         {% endif %}*/
/*    </form>*/
/* */
/* */
/* {% endblock %}*/
/* */
