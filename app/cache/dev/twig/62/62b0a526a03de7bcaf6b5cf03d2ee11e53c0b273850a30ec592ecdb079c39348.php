<?php

/* intranetBundle:Default:editVacations.html.twig */
class __TwigTemplate_f6968a67c439a240918600d335d554c39247bd3d286c2a7a481b168acab5e15a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "intranetBundle:Default:editVacations.html.twig", 1);
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
        $__internal_f6d922b57905e4ad204232ef903dd55ba83fe08acec7f477c66b866da516a167 = $this->env->getExtension("native_profiler");
        $__internal_f6d922b57905e4ad204232ef903dd55ba83fe08acec7f477c66b866da516a167->enter($__internal_f6d922b57905e4ad204232ef903dd55ba83fe08acec7f477c66b866da516a167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:editVacations.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6d922b57905e4ad204232ef903dd55ba83fe08acec7f477c66b866da516a167->leave($__internal_f6d922b57905e4ad204232ef903dd55ba83fe08acec7f477c66b866da516a167_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_74b3368b3106205244eb63119844438f8c2e19592f61c4baf8b1807ede1dda01 = $this->env->getExtension("native_profiler");
        $__internal_74b3368b3106205244eb63119844438f8c2e19592f61c4baf8b1807ede1dda01->enter($__internal_74b3368b3106205244eb63119844438f8c2e19592f61c4baf8b1807ede1dda01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<h3>VACATIONS</h3><br>
 <form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("intranet_editForm");
        echo "\" method=\"post\" style=\"border: 1px solid;width: 500px;\">
        <label>From: </label><input type='date' id=\"from\" name=\"from\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "date1", array()), "html", null, true);
        echo "\"><BR>
        <label>To: </label><input type='date' id=\"to\" name=\"to\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "date2", array()), "html", null, true);
        echo "\"><BR>
        ";
        // line 8
        if (($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "isread", array()) == 0)) {
            // line 9
            echo "                                     <input type=\"submit\" value=\"Delete\" name=\"delete\">
                                     <input type=\"hidden\" name=\"typeF\" value=\"vacations\">
                                     <input type=\"hidden\" name=\"id\" value=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "id", array()), "html", null, true);
            echo "\">
        ";
        }
        // line 13
        echo "   </form>


";
        
        $__internal_74b3368b3106205244eb63119844438f8c2e19592f61c4baf8b1807ede1dda01->leave($__internal_74b3368b3106205244eb63119844438f8c2e19592f61c4baf8b1807ede1dda01_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle:Default:editVacations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 13,  61 => 11,  57 => 9,  55 => 8,  51 => 7,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* */
/*  {% block contenido %}*/
/* <h3>VACATIONS</h3><br>*/
/*  <form action="{{ path('intranet_editForm') }}" method="post" style="border: 1px solid;width: 500px;">*/
/*         <label>From: </label><input type='date' id="from" name="from" value="{{f.date1}}"><BR>*/
/*         <label>To: </label><input type='date' id="to" name="to" value="{{f.date2}}"><BR>*/
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
