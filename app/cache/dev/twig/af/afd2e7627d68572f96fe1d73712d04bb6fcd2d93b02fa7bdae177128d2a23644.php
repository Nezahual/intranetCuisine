<?php

/* @intranet/Default/createNewTask.html.twig */
class __TwigTemplate_80eddf80033ae5324ae44c239a4eee8aada5c1bf8fa09db7005ed793a2ba9073 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "@intranet/Default/createNewTask.html.twig", 1);
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
        $__internal_f5903570b86826e84f276d7b6831740aad92f0b439675ab1757f364f2762ea26 = $this->env->getExtension("native_profiler");
        $__internal_f5903570b86826e84f276d7b6831740aad92f0b439675ab1757f364f2762ea26->enter($__internal_f5903570b86826e84f276d7b6831740aad92f0b439675ab1757f364f2762ea26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@intranet/Default/createNewTask.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5903570b86826e84f276d7b6831740aad92f0b439675ab1757f364f2762ea26->leave($__internal_f5903570b86826e84f276d7b6831740aad92f0b439675ab1757f364f2762ea26_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_59cc410265e087fedb96fdc0131293225774ef34b3593dbcfc0028eabca01ab1 = $this->env->getExtension("native_profiler");
        $__internal_59cc410265e087fedb96fdc0131293225774ef34b3593dbcfc0028eabca01ab1->enter($__internal_59cc410265e087fedb96fdc0131293225774ef34b3593dbcfc0028eabca01ab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

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
        
        $__internal_59cc410265e087fedb96fdc0131293225774ef34b3593dbcfc0028eabca01ab1->leave($__internal_59cc410265e087fedb96fdc0131293225774ef34b3593dbcfc0028eabca01ab1_prof);

    }

    public function getTemplateName()
    {
        return "@intranet/Default/createNewTask.html.twig";
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
