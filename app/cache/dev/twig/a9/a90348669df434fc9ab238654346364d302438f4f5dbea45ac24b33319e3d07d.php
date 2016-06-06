<?php

/* @intranet/Default/historical.html.twig */
class __TwigTemplate_8ee30241f9ad50153a37b151469fc2577bc37232f728ee48a04c8e7a54efd6c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "@intranet/Default/historical.html.twig", 1);
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
        $__internal_09b1e1de90b7a70887370b1f43791dc96c22be249ccbbc5074b91cb906ceef33 = $this->env->getExtension("native_profiler");
        $__internal_09b1e1de90b7a70887370b1f43791dc96c22be249ccbbc5074b91cb906ceef33->enter($__internal_09b1e1de90b7a70887370b1f43791dc96c22be249ccbbc5074b91cb906ceef33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@intranet/Default/historical.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09b1e1de90b7a70887370b1f43791dc96c22be249ccbbc5074b91cb906ceef33->leave($__internal_09b1e1de90b7a70887370b1f43791dc96c22be249ccbbc5074b91cb906ceef33_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_0ccb9980064fe68ee962347096dfdd1c80eff2bbbc2050b6b59b56ba0d37432f = $this->env->getExtension("native_profiler");
        $__internal_0ccb9980064fe68ee962347096dfdd1c80eff2bbbc2050b6b59b56ba0d37432f->enter($__internal_0ccb9980064fe68ee962347096dfdd1c80eff2bbbc2050b6b59b56ba0d37432f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "

<table border=1>
<tr>
    <th>DATE</th>
    <th>HOUR</th>
    <th>TITLE</th>
    <th>CONTENT</th>
</tr>
";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")));
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 14
            echo "<tr>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 15
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["n"], "date", array()), "Y-m-d"), "html", null, true);
            echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 16
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["n"], "time", array()), "H:i"), "html", null, true);
            echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["n"], "title", array()), "html", null, true);
            echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["n"], "content", array()), "html", null, true);
            echo "</td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "</table>

<br><br>

<form action=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("intranet_newnew");
        echo "\" method=\"post\" style=\"border: 1px solid;width: 500px;\">
    <input type=\"submit\" name=\"newNew\" value=\"NEW NEW\">
  </form>

";
        
        $__internal_0ccb9980064fe68ee962347096dfdd1c80eff2bbbc2050b6b59b56ba0d37432f->leave($__internal_0ccb9980064fe68ee962347096dfdd1c80eff2bbbc2050b6b59b56ba0d37432f_prof);

    }

    public function getTemplateName()
    {
        return "@intranet/Default/historical.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 25,  79 => 21,  70 => 18,  66 => 17,  62 => 16,  58 => 15,  55 => 14,  51 => 13,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* */
/*  {% block contenido %}*/
/* */
/* */
/* <table border=1>*/
/* <tr>*/
/*     <th>DATE</th>*/
/*     <th>HOUR</th>*/
/*     <th>TITLE</th>*/
/*     <th>CONTENT</th>*/
/* </tr>*/
/* {% for n in new %}*/
/* <tr>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ n.date|date('Y-m-d')  }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ n.time|date('H:i') }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ n.title }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ n.content }}</td>*/
/* </tr>*/
/* {% endfor %}*/
/* </table>*/
/* */
/* <br><br>*/
/* */
/* <form action="{{ path('intranet_newnew')}}" method="post" style="border: 1px solid;width: 500px;">*/
/*     <input type="submit" name="newNew" value="NEW NEW">*/
/*   </form>*/
/* */
/* {% endblock %}*/
/* */
