<?php

/* intranetBundle:Default:editExpenses.html.twig */
class __TwigTemplate_e8d009333c5b8c149a04d41c19c9f6aca3b8629c90e65d2b4e6d0b6caeb48e02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "intranetBundle:Default:editExpenses.html.twig", 1);
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
        $__internal_8b22917745d38455d3e136aedb410c5515f8f62959e9768cb8b14e43bc67a2ab = $this->env->getExtension("native_profiler");
        $__internal_8b22917745d38455d3e136aedb410c5515f8f62959e9768cb8b14e43bc67a2ab->enter($__internal_8b22917745d38455d3e136aedb410c5515f8f62959e9768cb8b14e43bc67a2ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:editExpenses.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b22917745d38455d3e136aedb410c5515f8f62959e9768cb8b14e43bc67a2ab->leave($__internal_8b22917745d38455d3e136aedb410c5515f8f62959e9768cb8b14e43bc67a2ab_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_a5040fb08e8f7cd65c4e6eadf21682ca45e34cae0a72f8b610a69448fdd054fb = $this->env->getExtension("native_profiler");
        $__internal_a5040fb08e8f7cd65c4e6eadf21682ca45e34cae0a72f8b610a69448fdd054fb->enter($__internal_a5040fb08e8f7cd65c4e6eadf21682ca45e34cae0a72f8b610a69448fdd054fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<h3>EXPENSES</h3><br>
 <form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("intranet_editForm");
        echo "\" method=\"post\" style=\"border: 1px solid;width: 500px;\">
        <label>Company:</label><input type=\"text\" name=\"company\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "company", array()), "html", null, true);
        echo "\"><br>
        <label>Importe:</label><input type=\"number\" step=\"any\" name=\"amount\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "amount", array()), "html", null, true);
        echo "\"> €<br>
        <label>Earlier than: </label><input type='date' id=\"earlier\" name=\"earlier\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "date1", array()), "html", null, true);
        echo "\"><BR>
        <input type=\"textarea\" name=\"concept\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "concept", array()), "html", null, true);
        echo "\"> <BR>
        ";
        // line 10
        if (($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "isread", array()) == 0)) {
            // line 11
            echo "                                     <input type=\"submit\" value=\"Delete\" name=\"delete\">
                                     <input type=\"hidden\" name=\"typeF\" value=\"vacations\">
                                     <input type=\"hidden\" name=\"id\" value=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "id", array()), "html", null, true);
            echo "\">
        ";
        }
        // line 15
        echo "   </form>


";
        
        $__internal_a5040fb08e8f7cd65c4e6eadf21682ca45e34cae0a72f8b610a69448fdd054fb->leave($__internal_a5040fb08e8f7cd65c4e6eadf21682ca45e34cae0a72f8b610a69448fdd054fb_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle:Default:editExpenses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 15,  69 => 13,  65 => 11,  63 => 10,  59 => 9,  55 => 8,  51 => 7,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* */
/*  {% block contenido %}*/
/* <h3>EXPENSES</h3><br>*/
/*  <form action="{{ path('intranet_editForm') }}" method="post" style="border: 1px solid;width: 500px;">*/
/*         <label>Company:</label><input type="text" name="company" value="{{f.company}}"><br>*/
/*         <label>Importe:</label><input type="number" step="any" name="amount" value="{{f.amount}}"> €<br>*/
/*         <label>Earlier than: </label><input type='date' id="earlier" name="earlier" value="{{f.date1}}"><BR>*/
/*         <input type="textarea" name="concept" value="{{f.concept}}"> <BR>*/
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
