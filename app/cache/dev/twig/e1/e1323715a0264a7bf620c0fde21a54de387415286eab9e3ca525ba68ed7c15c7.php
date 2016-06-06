<?php

/* @intranet/Default/editTask.html.twig */
class __TwigTemplate_eef4980050ede391867bafc37d29fd153ba3559680c9f92dde58f85bb54e8a1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "@intranet/Default/editTask.html.twig", 1);
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
        $__internal_9a01220b79370b78f2ab360312d5c785d07b575739f1cb01f2ed76e627229731 = $this->env->getExtension("native_profiler");
        $__internal_9a01220b79370b78f2ab360312d5c785d07b575739f1cb01f2ed76e627229731->enter($__internal_9a01220b79370b78f2ab360312d5c785d07b575739f1cb01f2ed76e627229731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@intranet/Default/editTask.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a01220b79370b78f2ab360312d5c785d07b575739f1cb01f2ed76e627229731->leave($__internal_9a01220b79370b78f2ab360312d5c785d07b575739f1cb01f2ed76e627229731_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_f863ae7154ee9974d094840e714ae4b315022b42ee9fa97082da14735668fc56 = $this->env->getExtension("native_profiler");
        $__internal_f863ae7154ee9974d094840e714ae4b315022b42ee9fa97082da14735668fc56->enter($__internal_f863ae7154ee9974d094840e714ae4b315022b42ee9fa97082da14735668fc56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "
<form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("intranet_edittask");
        echo "\" method=\"post\" style=\"border: 1px solid;width: 500px;\">

      <label>";
        // line 7
        echo $this->env->getExtension('translator')->getTranslator()->trans("Title", array(), "messages");
        echo "</label><input type='text' id=\"title\" name=\"title\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "title", array()), "html", null, true);
        echo "\"><BR>
      <label>";
        // line 8
        echo $this->env->getExtension('translator')->getTranslator()->trans("Content", array(), "messages");
        echo "</label><input type='text' id=\"content\" name=\"content\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "content", array()), "html", null, true);
        echo "\"><BR>
      <label>";
        // line 9
        echo $this->env->getExtension('translator')->getTranslator()->trans("Who Create", array(), "messages");
        echo "</label><input type='text' name=\"whocreate\" id=\"whocreate\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "whocreate", array()), "html", null, true);
        echo "\"><BR>
      <label>";
        // line 10
        echo $this->env->getExtension('translator')->getTranslator()->trans("Users", array(), "messages");
        echo "</label><br>
              ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allUsers"]) ? $context["allUsers"] : $this->getContext($context, "allUsers")));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 12
            echo "              ";
            $context["flag"] = 0;
            // line 13
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["usersWithTask"]) ? $context["usersWithTask"] : $this->getContext($context, "usersWithTask")));
            foreach ($context['_seq'] as $context["_key"] => $context["us"]) {
                // line 14
                echo "                    ";
                if (($this->getAttribute($context["u"], "login", array()) == $this->getAttribute($context["us"], "login", array()))) {
                    // line 15
                    echo "                      <input type='checkbox' name=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["us"], "login", array()), "html", null, true);
                    echo "\" id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["us"], "login", array()), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["us"], "login", array()), "html", null, true);
                    echo "\" checked>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["us"], "login", array()), "html", null, true);
                    echo "<BR>
                      ";
                    // line 16
                    $context["flag"] = 1;
                    // line 17
                    echo "                    ";
                }
                // line 18
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['us'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "                ";
            if (((isset($context["flag"]) ? $context["flag"] : $this->getContext($context, "flag")) == 0)) {
                // line 20
                echo "                    ";
                if (((isset($context["rol"]) ? $context["rol"] : $this->getContext($context, "rol")) != "developer")) {
                    // line 21
                    echo "                      <input type='checkbox' name=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "login", array()), "html", null, true);
                    echo "\" id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "login", array()), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "login", array()), "html", null, true);
                    echo "\" >";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "login", array()), "html", null, true);
                    echo "<br>
                    ";
                }
                // line 23
                echo "                ";
            }
            // line 24
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
              ";
        // line 26
        if (((isset($context["rol"]) ? $context["rol"] : $this->getContext($context, "rol")) != "developer")) {
            // line 27
            echo "                                   <input type=\"submit\" name=\"update\" value=\"";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Modify", array(), "messages");
            echo "\">
                                   <input type=\"submit\" name=\"delete\" value=\"";
            // line 28
            echo $this->env->getExtension('translator')->getTranslator()->trans("DELETE", array(), "messages");
            echo "\">
                                   <input type=\"hidden\" name=\"id\" value=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "id", array()), "html", null, true);
            echo "\">
              ";
        }
        // line 31
        echo " </form>
";
        
        $__internal_f863ae7154ee9974d094840e714ae4b315022b42ee9fa97082da14735668fc56->leave($__internal_f863ae7154ee9974d094840e714ae4b315022b42ee9fa97082da14735668fc56_prof);

    }

    public function getTemplateName()
    {
        return "@intranet/Default/editTask.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 31,  148 => 29,  144 => 28,  139 => 27,  137 => 26,  134 => 25,  128 => 24,  125 => 23,  113 => 21,  110 => 20,  107 => 19,  101 => 18,  98 => 17,  96 => 16,  85 => 15,  82 => 14,  77 => 13,  74 => 12,  70 => 11,  66 => 10,  60 => 9,  54 => 8,  48 => 7,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* */
/*  {% block contenido %}*/
/* */
/* <form action="{{ path('intranet_edittask') }}" method="post" style="border: 1px solid;width: 500px;">*/
/* */
/*       <label>{% trans %}Title{% endtrans %}</label><input type='text' id="title" name="title" value="{{task.title}}"><BR>*/
/*       <label>{% trans %}Content{% endtrans %}</label><input type='text' id="content" name="content" value="{{task.content}}"><BR>*/
/*       <label>{% trans %}Who Create{% endtrans %}</label><input type='text' name="whocreate" id="whocreate" value="{{task.whocreate}}"><BR>*/
/*       <label>{% trans %}Users{% endtrans %}</label><br>*/
/*               {% for u in allUsers %}*/
/*               {% set flag=0 %}*/
/*                 {% for us in usersWithTask %}*/
/*                     {% if u.login==us.login %}*/
/*                       <input type='checkbox' name="{{ us.login }}" id="{{ us.login }}" value="{{ us.login }}" checked>{{ us.login }}<BR>*/
/*                       {% set flag=1 %}*/
/*                     {% endif %}*/
/*                 {% endfor %}*/
/*                 {% if flag==0 %}*/
/*                     {% if rol!='developer' %}*/
/*                       <input type='checkbox' name="{{ u.login }}" id="{{ u.login }}" value="{{ u.login }}" >{{ u.login }}<br>*/
/*                     {% endif %}*/
/*                 {% endif %}*/
/*               {% endfor %}*/
/* */
/*               {% if rol!='developer' %}*/
/*                                    <input type="submit" name="update" value="{% trans %}Modify{% endtrans %}">*/
/*                                    <input type="submit" name="delete" value="{% trans %}DELETE{% endtrans %}">*/
/*                                    <input type="hidden" name="id" value="{{task.id}}">*/
/*               {% endif %}*/
/*  </form>*/
/* {% endblock %}*/
/* */
