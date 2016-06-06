<?php

/* @intranet/Default/channels.html.twig */
class __TwigTemplate_326e31670676c37fc1b56ffee1aa4159dea97606b1f2d03f6b10536af044a934 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "@intranet/Default/channels.html.twig", 1);
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
        $__internal_97a6f84af5e9297c679ed2ac8c9dd44069253cd76085a1c822153a95f05cd420 = $this->env->getExtension("native_profiler");
        $__internal_97a6f84af5e9297c679ed2ac8c9dd44069253cd76085a1c822153a95f05cd420->enter($__internal_97a6f84af5e9297c679ed2ac8c9dd44069253cd76085a1c822153a95f05cd420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@intranet/Default/channels.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97a6f84af5e9297c679ed2ac8c9dd44069253cd76085a1c822153a95f05cd420->leave($__internal_97a6f84af5e9297c679ed2ac8c9dd44069253cd76085a1c822153a95f05cd420_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_e53cfbe381d3cde743fc051c9b49e655072c274a936fb626c9bbf9d3af6c5c20 = $this->env->getExtension("native_profiler");
        $__internal_e53cfbe381d3cde743fc051c9b49e655072c274a936fb626c9bbf9d3af6c5c20->enter($__internal_e53cfbe381d3cde743fc051c9b49e655072c274a936fb626c9bbf9d3af6c5c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "

<table border=1>
<tr>
    <th style=\"padding-left: 10px;padding-right: 10px;\">";
        // line 8
        echo $this->env->getExtension('translator')->getTranslator()->trans("Name", array(), "messages");
        echo "</th>
</tr>
";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listChannels"]) ? $context["listChannels"] : $this->getContext($context, "listChannels")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 11
            echo "<tr>
    <td style=\"padding-left: 10px;padding-right: 10px;\">
    <form action='";
            // line 13
            echo $this->env->getExtension('routing')->getPath("intranet_crudchannel");
            echo "' method='post'>
          <input type=\"submit\" name=\"nameChannel\" value=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "name", array()), "html", null, true);
            echo "\" >
          <input type=\"hidden\" value=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "id", array()), "html", null, true);
            echo "\" name=\"id\">
    </form>
    </td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "</table>
<br><br>

<form action=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("intranet_newchannel");
        echo "\" method=\"post\" style=\"border: 1px solid;width: 500px;\">
    <input type=\"submit\" name=\"newChannel\" value=\"";
        // line 24
        echo $this->env->getExtension('translator')->getTranslator()->trans("new_channel", array(), "messages");
        echo "\">
  </form>


";
        
        $__internal_e53cfbe381d3cde743fc051c9b49e655072c274a936fb626c9bbf9d3af6c5c20->leave($__internal_e53cfbe381d3cde743fc051c9b49e655072c274a936fb626c9bbf9d3af6c5c20_prof);

    }

    public function getTemplateName()
    {
        return "@intranet/Default/channels.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 24,  83 => 23,  78 => 20,  67 => 15,  63 => 14,  59 => 13,  55 => 11,  51 => 10,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* */
/*  {% block contenido %}*/
/* */
/* */
/* <table border=1>*/
/* <tr>*/
/*     <th style="padding-left: 10px;padding-right: 10px;">{% trans %}Name{% endtrans %}</th>*/
/* </tr>*/
/* {% for c in listChannels %}*/
/* <tr>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">*/
/*     <form action='{{ path('intranet_crudchannel') }}' method='post'>*/
/*           <input type="submit" name="nameChannel" value="{{c.name}}" >*/
/*           <input type="hidden" value="{{ c.id }}" name="id">*/
/*     </form>*/
/*     </td>*/
/* </tr>*/
/* {% endfor %}*/
/* </table>*/
/* <br><br>*/
/* */
/* <form action="{{ path('intranet_newchannel')}}" method="post" style="border: 1px solid;width: 500px;">*/
/*     <input type="submit" name="newChannel" value="{% trans %}new_channel{% endtrans %}">*/
/*   </form>*/
/* */
/* */
/* {% endblock %}*/
/* */
