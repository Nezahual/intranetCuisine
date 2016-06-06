<?php

/* intranetBundle:Default:createNewTask.html.twig */
class __TwigTemplate_cb02c4d63b398252d76d55f2b56e12a94d5c53136c40c2f1a9c11bf2b521bb83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "intranetBundle:Default:createNewTask.html.twig", 1);
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
        $__internal_1051588b661684fe42fb1a3002d797bbaaba067f438cef3130a4343165f29670 = $this->env->getExtension("native_profiler");
        $__internal_1051588b661684fe42fb1a3002d797bbaaba067f438cef3130a4343165f29670->enter($__internal_1051588b661684fe42fb1a3002d797bbaaba067f438cef3130a4343165f29670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:createNewTask.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1051588b661684fe42fb1a3002d797bbaaba067f438cef3130a4343165f29670->leave($__internal_1051588b661684fe42fb1a3002d797bbaaba067f438cef3130a4343165f29670_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_e6cb5e6a84f611678bc21be089c9cad3fc6333f9c68f3c68738812066b1957b0 = $this->env->getExtension("native_profiler");
        $__internal_e6cb5e6a84f611678bc21be089c9cad3fc6333f9c68f3c68738812066b1957b0->enter($__internal_e6cb5e6a84f611678bc21be089c9cad3fc6333f9c68f3c68738812066b1957b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<h3>CREATE A NEW TASK</h3><br>
 <form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("intranet_insertTask");
        echo "\" method=\"post\" style=\"border: 1px solid;width: 500px;\">
        <label>TITLE:</label><input type=\"text\" name=\"title\" style=\"margin-left: 40px;\"><br>
        <label>CONTENT:</label><input type=\"textarea\" name=\"content\" style=\"margin-left: 15px;\"> <br>
        <label>USERS:</label>
";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 10
            echo "    <input type=\"checkbox\" name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "login", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "login", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "login", array()), "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
<!--        <i>Aquí habrá que meter los usuarios</i>
-->
<br>
                                     <input type=\"submit\" value=\"CREATE\">
                                     <input type=\"hidden\" name=\"WHO CREATE\">
   </form>



";
        
        $__internal_e6cb5e6a84f611678bc21be089c9cad3fc6333f9c68f3c68738812066b1957b0->leave($__internal_e6cb5e6a84f611678bc21be089c9cad3fc6333f9c68f3c68738812066b1957b0_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle:Default:createNewTask.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 12,  54 => 10,  50 => 9,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* */
/*  {% block contenido %}*/
/* <h3>CREATE A NEW TASK</h3><br>*/
/*  <form action="{{path('intranet_insertTask')}}" method="post" style="border: 1px solid;width: 500px;">*/
/*         <label>TITLE:</label><input type="text" name="title" style="margin-left: 40px;"><br>*/
/*         <label>CONTENT:</label><input type="textarea" name="content" style="margin-left: 15px;"> <br>*/
/*         <label>USERS:</label>*/
/* {% for u in users %}*/
/*     <input type="checkbox" name="{{ u.login }}" value="{{ u.login }}">{{ u.login }}*/
/* {% endfor %}*/
/* */
/* <!--        <i>Aquí habrá que meter los usuarios</i>*/
/* -->*/
/* <br>*/
/*                                      <input type="submit" value="CREATE">*/
/*                                      <input type="hidden" name="WHO CREATE">*/
/*    </form>*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
