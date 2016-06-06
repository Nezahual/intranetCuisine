<?php

/* intranetBundle:Default:editNew.html.twig */
class __TwigTemplate_8acea45123a6364f7af05c4b8721ef700f261c2b6fe7fa7b70b858d0c5362839 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "intranetBundle:Default:editNew.html.twig", 1);
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
        $__internal_82c2022d598e8a4299e033777d0ff99e6dcfabd74af9be6d298365f550466ab4 = $this->env->getExtension("native_profiler");
        $__internal_82c2022d598e8a4299e033777d0ff99e6dcfabd74af9be6d298365f550466ab4->enter($__internal_82c2022d598e8a4299e033777d0ff99e6dcfabd74af9be6d298365f550466ab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:editNew.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82c2022d598e8a4299e033777d0ff99e6dcfabd74af9be6d298365f550466ab4->leave($__internal_82c2022d598e8a4299e033777d0ff99e6dcfabd74af9be6d298365f550466ab4_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_202683fedba0dfc5e007f09ff48d64a608ecf900a9c95f38cd55134cc905b302 = $this->env->getExtension("native_profiler");
        $__internal_202683fedba0dfc5e007f09ff48d64a608ecf900a9c95f38cd55134cc905b302->enter($__internal_202683fedba0dfc5e007f09ff48d64a608ecf900a9c95f38cd55134cc905b302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "
<form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("intranet_editnew");
        echo "\" method=\"post\" style=\"border: 1px solid;width: 500px;\">

      <label>";
        // line 7
        echo $this->env->getExtension('translator')->getTranslator()->trans("Date", array(), "messages");
        echo "</label><input type='date' id=\"date\" name=\"date\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "date", array()), "html", null, true);
        echo "\"><BR>
      <label>";
        // line 8
        echo $this->env->getExtension('translator')->getTranslator()->trans("Time", array(), "messages");
        echo "</label><input type='text' id=\"time \"name=\"time\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "time", array()), "html", null, true);
        echo "\"><BR>
      <label>";
        // line 9
        echo $this->env->getExtension('translator')->getTranslator()->trans("Title", array(), "messages");
        echo "</label><input type='text' id=\"title\" name=\"title\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "title", array()), "html", null, true);
        echo "\"><BR>
      <label>";
        // line 10
        echo $this->env->getExtension('translator')->getTranslator()->trans("Content", array(), "messages");
        echo "</label><input type='text' id=\"content\" name=\"content\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "content", array()), "html", null, true);
        echo "\"><BR>
<label>Channels </label>

";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allChannels"]) ? $context["allChannels"] : $this->getContext($context, "allChannels")));
        foreach ($context['_seq'] as $context["_key"] => $context["ch"]) {
            // line 14
            $context["flag"] = 0;
            // line 15
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["newschannels"]) ? $context["newschannels"] : $this->getContext($context, "newschannels")));
            foreach ($context['_seq'] as $context["_key"] => $context["nc"]) {
                // line 16
                echo "      ";
                if (($this->getAttribute($context["ch"], "name", array()) == $this->getAttribute($context["nc"], "name", array()))) {
                    // line 17
                    echo "        <input type=\"checkbox\" name=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ch"], "name", array()), "html", null, true);
                    echo "\" id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ch"], "name", array()), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ch"], "name", array()), "html", null, true);
                    echo "\" checked> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ch"], "name", array()), "html", null, true);
                    echo "
        ";
                    // line 18
                    $context["flag"] = 1;
                    // line 19
                    echo "        ";
                }
                // line 20
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nc'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "      ";
            if (((isset($context["flag"]) ? $context["flag"] : $this->getContext($context, "flag")) == 0)) {
                // line 22
                echo "        <input type=\"checkbox\" name=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ch"], "name", array()), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ch"], "name", array()), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ch"], "name", array()), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ch"], "name", array()), "html", null, true);
                echo "
        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ch'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "<br><br>
                                   <input type=\"submit\" name=\"update\" value=\"";
        // line 26
        echo $this->env->getExtension('translator')->getTranslator()->trans("Modify", array(), "messages");
        echo "\">
                                   <input type=\"submit\" name=\"delete\" value=\"";
        // line 27
        echo $this->env->getExtension('translator')->getTranslator()->trans("DELETE", array(), "messages");
        echo "\">
                                   <input type=\"hidden\" name=\"id\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "id", array()), "html", null, true);
        echo "\">
 </form>

";
        
        $__internal_202683fedba0dfc5e007f09ff48d64a608ecf900a9c95f38cd55134cc905b302->leave($__internal_202683fedba0dfc5e007f09ff48d64a608ecf900a9c95f38cd55134cc905b302_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle:Default:editNew.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 28,  136 => 27,  132 => 26,  129 => 25,  113 => 22,  110 => 21,  104 => 20,  101 => 19,  99 => 18,  88 => 17,  85 => 16,  80 => 15,  78 => 14,  74 => 13,  66 => 10,  60 => 9,  54 => 8,  48 => 7,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* */
/*  {% block contenido %}*/
/* */
/* <form action="{{ path('intranet_editnew') }}" method="post" style="border: 1px solid;width: 500px;">*/
/* */
/*       <label>{% trans %}Date{% endtrans %}</label><input type='date' id="date" name="date" value="{{new.date}}"><BR>*/
/*       <label>{% trans %}Time{% endtrans %}</label><input type='text' id="time "name="time" value="{{new.time}}"><BR>*/
/*       <label>{% trans %}Title{% endtrans %}</label><input type='text' id="title" name="title" value="{{new.title}}"><BR>*/
/*       <label>{% trans %}Content{% endtrans %}</label><input type='text' id="content" name="content" value="{{new.content}}"><BR>*/
/* <label>Channels </label>*/
/* */
/* {% for ch in allChannels %}*/
/* {% set flag=0 %}*/
/*   {% for nc in newschannels %}*/
/*       {% if ch.name==nc.name %}*/
/*         <input type="checkbox" name="{{ch.name}}" id="{{ch.name}}" value="{{ch.name}}" checked> {{ch.name}}*/
/*         {% set flag=1 %}*/
/*         {% endif %}*/
/*   {% endfor %}*/
/*       {% if flag==0 %}*/
/*         <input type="checkbox" name="{{ch.name}}" id="{{ch.name}}" value="{{ch.name}}"> {{ch.name}}*/
/*         {% endif %}*/
/* {% endfor %}*/
/* <br><br>*/
/*                                    <input type="submit" name="update" value="{% trans %}Modify{% endtrans %}">*/
/*                                    <input type="submit" name="delete" value="{% trans %}DELETE{% endtrans %}">*/
/*                                    <input type="hidden" name="id" value="{{new.id}}">*/
/*  </form>*/
/* */
/* {% endblock %}*/
/* */
