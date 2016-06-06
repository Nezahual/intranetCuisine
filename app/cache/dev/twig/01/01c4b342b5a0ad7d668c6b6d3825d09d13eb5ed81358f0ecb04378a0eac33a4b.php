<?php

/* @intranet/Default/editChannel.html.twig */
class __TwigTemplate_e27fa70f1a4b6bb69a570464c95f3d9c7c5dedcbd4eea22831dce129f419d88b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "@intranet/Default/editChannel.html.twig", 1);
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
        $__internal_78c1185588dff1acb13176d8fa0d9fe1bc49c2b2ca5c64def02eb76945033e83 = $this->env->getExtension("native_profiler");
        $__internal_78c1185588dff1acb13176d8fa0d9fe1bc49c2b2ca5c64def02eb76945033e83->enter($__internal_78c1185588dff1acb13176d8fa0d9fe1bc49c2b2ca5c64def02eb76945033e83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@intranet/Default/editChannel.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78c1185588dff1acb13176d8fa0d9fe1bc49c2b2ca5c64def02eb76945033e83->leave($__internal_78c1185588dff1acb13176d8fa0d9fe1bc49c2b2ca5c64def02eb76945033e83_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_6813ab7a0a9066e15709a613b5bb7fc7d5de9179074e33462f30ddc8421dc84d = $this->env->getExtension("native_profiler");
        $__internal_6813ab7a0a9066e15709a613b5bb7fc7d5de9179074e33462f30ddc8421dc84d->enter($__internal_6813ab7a0a9066e15709a613b5bb7fc7d5de9179074e33462f30ddc8421dc84d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "
<form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("intranet_editchannel");
        echo "\" method=\"post\" style=\"border: 1px solid;width: 500px;\">

      <label>";
        // line 7
        echo $this->env->getExtension('translator')->getTranslator()->trans("Name", array(), "messages");
        echo "</label><input type='text' id=\"nameChannel\" name=\"nameChannel\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["channel"]) ? $context["channel"] : $this->getContext($context, "channel")), "name", array()), "html", null, true);
        echo "\"><BR>
      <label>";
        // line 8
        echo $this->env->getExtension('translator')->getTranslator()->trans("Users", array(), "messages");
        echo "</label><br>
              ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allUsers"]) ? $context["allUsers"] : $this->getContext($context, "allUsers")));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 10
            echo "              ";
            $context["flag"] = 0;
            // line 11
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["usersWithChannel"]) ? $context["usersWithChannel"] : $this->getContext($context, "usersWithChannel")));
            foreach ($context['_seq'] as $context["_key"] => $context["us"]) {
                // line 12
                echo "                    ";
                if (($this->getAttribute($context["u"], "login", array()) == $this->getAttribute($context["us"], "login", array()))) {
                    // line 13
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
                    // line 14
                    $context["flag"] = 1;
                    // line 15
                    echo "                    ";
                }
                // line 16
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['us'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "                ";
            if (((isset($context["flag"]) ? $context["flag"] : $this->getContext($context, "flag")) == 0)) {
                // line 18
                echo "                    <input type='checkbox' name=\"";
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
            // line 20
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "                                   <input type=\"submit\" name=\"update\" value=\"";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Modify", array(), "messages");
        echo "\">
                                   <input type=\"submit\" name=\"delete\" value=\"";
        // line 22
        echo $this->env->getExtension('translator')->getTranslator()->trans("DELETE", array(), "messages");
        echo "\">
                                   <input type=\"hidden\" name=\"id\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["channel"]) ? $context["channel"] : $this->getContext($context, "channel")), "id", array()), "html", null, true);
        echo "\">
 </form>
";
        
        $__internal_6813ab7a0a9066e15709a613b5bb7fc7d5de9179074e33462f30ddc8421dc84d->leave($__internal_6813ab7a0a9066e15709a613b5bb7fc7d5de9179074e33462f30ddc8421dc84d_prof);

    }

    public function getTemplateName()
    {
        return "@intranet/Default/editChannel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 23,  121 => 22,  116 => 21,  110 => 20,  98 => 18,  95 => 17,  89 => 16,  86 => 15,  84 => 14,  73 => 13,  70 => 12,  65 => 11,  62 => 10,  58 => 9,  54 => 8,  48 => 7,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* */
/*  {% block contenido %}*/
/* */
/* <form action="{{ path('intranet_editchannel') }}" method="post" style="border: 1px solid;width: 500px;">*/
/* */
/*       <label>{% trans %}Name{% endtrans %}</label><input type='text' id="nameChannel" name="nameChannel" value="{{channel.name}}"><BR>*/
/*       <label>{% trans %}Users{% endtrans %}</label><br>*/
/*               {% for u in allUsers %}*/
/*               {% set flag=0 %}*/
/*                 {% for us in usersWithChannel %}*/
/*                     {% if u.login==us.login %}*/
/*                       <input type='checkbox' name="{{ us.login }}" id="{{ us.login }}" value="{{ us.login }}" checked>{{ us.login }}<BR>*/
/*                       {% set flag=1 %}*/
/*                     {% endif %}*/
/*                 {% endfor %}*/
/*                 {% if flag==0 %}*/
/*                     <input type='checkbox' name="{{ u.login }}" id="{{ u.login }}" value="{{ u.login }}" >{{ u.login }}<br>*/
/*                 {% endif %}*/
/*               {% endfor %}*/
/*                                    <input type="submit" name="update" value="{% trans %}Modify{% endtrans %}">*/
/*                                    <input type="submit" name="delete" value="{% trans %}DELETE{% endtrans %}">*/
/*                                    <input type="hidden" name="id" value="{{channel.id}}">*/
/*  </form>*/
/* {% endblock %}*/
/* */
