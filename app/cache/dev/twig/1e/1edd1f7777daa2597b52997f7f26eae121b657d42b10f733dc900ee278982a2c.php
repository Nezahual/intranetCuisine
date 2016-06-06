<?php

/* @intranet/Default/editVacations.html.twig */
class __TwigTemplate_acd2ce46d4bafad88c0cc99f7c813c39ea28c2a753878cc19abd37c5df614e89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "@intranet/Default/editVacations.html.twig", 1);
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
        $__internal_962b1291b75600ea39fe77165a75991b2fa051b1bfa25b5efba316e9f1ca298f = $this->env->getExtension("native_profiler");
        $__internal_962b1291b75600ea39fe77165a75991b2fa051b1bfa25b5efba316e9f1ca298f->enter($__internal_962b1291b75600ea39fe77165a75991b2fa051b1bfa25b5efba316e9f1ca298f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@intranet/Default/editVacations.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_962b1291b75600ea39fe77165a75991b2fa051b1bfa25b5efba316e9f1ca298f->leave($__internal_962b1291b75600ea39fe77165a75991b2fa051b1bfa25b5efba316e9f1ca298f_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_7badcb3b05700f02c201873808d8aafe8074592466342ffa2f857c3cfdfdb9dd = $this->env->getExtension("native_profiler");
        $__internal_7badcb3b05700f02c201873808d8aafe8074592466342ffa2f857c3cfdfdb9dd->enter($__internal_7badcb3b05700f02c201873808d8aafe8074592466342ffa2f857c3cfdfdb9dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

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
        
        $__internal_7badcb3b05700f02c201873808d8aafe8074592466342ffa2f857c3cfdfdb9dd->leave($__internal_7badcb3b05700f02c201873808d8aafe8074592466342ffa2f857c3cfdfdb9dd_prof);

    }

    public function getTemplateName()
    {
        return "@intranet/Default/editVacations.html.twig";
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
