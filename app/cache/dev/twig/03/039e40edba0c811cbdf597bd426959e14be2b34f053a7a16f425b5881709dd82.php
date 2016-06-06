<?php

/* @intranet/Default/incomingForms.html.twig */
class __TwigTemplate_092d27dc8db342d41c366ca8dbc17ab2060c022b381b92011d74f4dbec6d0e73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "@intranet/Default/incomingForms.html.twig", 1);
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
        $__internal_d9c3363106ddaaeb001ed7e66173f76ef111182ad11fd3c21d319f2f2bbf22d6 = $this->env->getExtension("native_profiler");
        $__internal_d9c3363106ddaaeb001ed7e66173f76ef111182ad11fd3c21d319f2f2bbf22d6->enter($__internal_d9c3363106ddaaeb001ed7e66173f76ef111182ad11fd3c21d319f2f2bbf22d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@intranet/Default/incomingForms.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9c3363106ddaaeb001ed7e66173f76ef111182ad11fd3c21d319f2f2bbf22d6->leave($__internal_d9c3363106ddaaeb001ed7e66173f76ef111182ad11fd3c21d319f2f2bbf22d6_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_67d375311c6c98bd817aa76e752d9166ccd7306a1fd8298f6f4827765904ce07 = $this->env->getExtension("native_profiler");
        $__internal_67d375311c6c98bd817aa76e752d9166ccd7306a1fd8298f6f4827765904ce07->enter($__internal_67d375311c6c98bd817aa76e752d9166ccd7306a1fd8298f6f4827765904ce07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<b>TABLA FORMULARIOS HORAS</b>
<table border=1>
<tr >
<th></th>
    <th>Type</th>
    <th>USER</th>
    <th>LOGIN</th>
    <th>DATE</th>
    <th>READ</th>
    <th>STATUS</th>
</tr>
";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listIncomingFormsH"]) ? $context["listIncomingFormsH"] : $this->getContext($context, "listIncomingFormsH")));
        foreach ($context['_seq'] as $context["_key"] => $context["form"]) {
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["relationHours"]) ? $context["relationHours"] : $this->getContext($context, "relationHours")));
            foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
                // line 17
                if (($this->getAttribute($context["u"], "idForm", array()) == $this->getAttribute($context["form"], "id", array()))) {
                    // line 18
                    echo "<tr>
  \t<td>
          <form action='";
                    // line 20
                    echo $this->env->getExtension('routing')->getPath("intranet_readForm");
                    echo "' method='post'>
                <input type=\"submit\" value=\"VER\">
                  <input type=\"hidden\" name=\"typeF\" value=\"hours\">
                  <input type=\"hidden\" name=\"id\" value=\"";
                    // line 23
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "id", array()), "html", null, true);
                    echo "\">
          </form>
    </td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 26
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "type", array()), "html", null, true);
                    echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 27
                    echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "login", array()), "html", null, true);
                    echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 28
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "numHours", array()), "html", null, true);
                    echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 29
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "send", array()), "html", null, true);
                    echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 30
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "isread", array()), "html", null, true);
                    echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 31
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "status", array()), "html", null, true);
                    echo "</td>
</tr>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['form'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "</table>

<hr>

<b>TABLA FORMULARIOS VACATIONS</b>
<table border=1>
<tr>
<th></th>
   <th>USER</th>
   <th>LOGIN</th>
   <th>DATE</th>
   <th>READ</th>
   <th>FROM</th>
   <th>TO</th>
   <th>STATUS</th>
</tr>
";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listIncomingFormsV"]) ? $context["listIncomingFormsV"] : $this->getContext($context, "listIncomingFormsV")));
        foreach ($context['_seq'] as $context["_key"] => $context["form"]) {
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["relationVacations"]) ? $context["relationVacations"] : $this->getContext($context, "relationVacations")));
            foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
                // line 52
                if (($this->getAttribute($context["u"], "idForm", array()) == $this->getAttribute($context["form"], "id", array()))) {
                    // line 53
                    echo "<tr>
   <td>
        <form action='";
                    // line 55
                    echo $this->env->getExtension('routing')->getPath("intranet_readForm");
                    echo "' method='post'>
              <input type=\"submit\" value=\"VER\">
                <input type=\"hidden\" name=\"typeF\" value=\"vacations\">
                <input type=\"hidden\" name=\"id\" value=\"";
                    // line 58
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "id", array()), "html", null, true);
                    echo "\">
        </form>
   </td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 61
                    echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "login", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 62
                    echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "login", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 63
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "send", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 64
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "isread", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 65
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "date1", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 66
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "date2", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 67
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "status", array()), "html", null, true);
                    echo "</td>
</tr>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['form'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "
</table>

<hr>

<b>TABLA FORMULARIOS EXPENSES</b>
<table border=1>
<tr>
<th></th>
   <th>USER</th>
   <th>LOGIN</th>
   <th>DATE</th>
   <th>READ</th>
   <th>COMPANY</th>
   <th>CONCEPT</th>
   <th>AMOUNT</th>
   <th>STATUS</th>
</tr>
";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listIncomingFormsE"]) ? $context["listIncomingFormsE"] : $this->getContext($context, "listIncomingFormsE")));
        foreach ($context['_seq'] as $context["_key"] => $context["form"]) {
            // line 89
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["relationExpenses"]) ? $context["relationExpenses"] : $this->getContext($context, "relationExpenses")));
            foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
                // line 90
                if (($this->getAttribute($context["u"], "idForm", array()) == $this->getAttribute($context["form"], "id", array()))) {
                    // line 91
                    echo "<tr>
   <td>
        <form action='";
                    // line 93
                    echo $this->env->getExtension('routing')->getPath("intranet_readForm");
                    echo "' method='post'>
              <input type=\"submit\" value=\"VER\">
                <input type=\"hidden\" name=\"typeF\" value=\"expenses\">
                <input type=\"hidden\" name=\"id\" value=\"";
                    // line 96
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "id", array()), "html", null, true);
                    echo "\">
        </form>
   </td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 99
                    echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "login", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 100
                    echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "login", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 101
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "send", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 102
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "isread", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 103
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "company", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 104
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "concept", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 105
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "amount", array()), "html", null, true);
                    echo " €</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 106
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "status", array()), "html", null, true);
                    echo "</td>
</tr>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['form'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "
</table>

<hr>

<b>TABLA FORMULARIOS TRIPS</b>
<table border=1>
<tr>
<th></th>
   <th>USER</th>
   <th>LOGIN</th>
   <th>DATE</th>
   <th>READ</th>
   <th>FROM</th>
   <th>TO</th>
   <th>PLACE</th>
   <th>REASON</th>
   <th>STATUS</th>
</tr>
";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listIncomingFormsT"]) ? $context["listIncomingFormsT"] : $this->getContext($context, "listIncomingFormsT")));
        foreach ($context['_seq'] as $context["_key"] => $context["form"]) {
            // line 129
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["relationTrips"]) ? $context["relationTrips"] : $this->getContext($context, "relationTrips")));
            foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
                // line 130
                if (($this->getAttribute($context["u"], "idForm", array()) == $this->getAttribute($context["form"], "id", array()))) {
                    // line 131
                    echo "<tr>
   <td>
        <form action='";
                    // line 133
                    echo $this->env->getExtension('routing')->getPath("intranet_readForm");
                    echo "' method='post'>
              <input type=\"submit\" value=\"VER\">
                <input type=\"hidden\" name=\"typeF\" value=\"trip\">
                <input type=\"hidden\" name=\"id\" value=\"";
                    // line 136
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "id", array()), "html", null, true);
                    echo "\">
        </form>
   </td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 139
                    echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "login", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 140
                    echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "login", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 141
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "send", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 142
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "isread", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 143
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "date1", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 144
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "date2", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 145
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "place", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 146
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "reasons", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 147
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "status", array()), "html", null, true);
                    echo "</td>
</tr>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['form'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        echo "
</table>


";
        
        $__internal_67d375311c6c98bd817aa76e752d9166ccd7306a1fd8298f6f4827765904ce07->leave($__internal_67d375311c6c98bd817aa76e752d9166ccd7306a1fd8298f6f4827765904ce07_prof);

    }

    public function getTemplateName()
    {
        return "@intranet/Default/incomingForms.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  372 => 150,  359 => 147,  355 => 146,  351 => 145,  347 => 144,  343 => 143,  339 => 142,  335 => 141,  331 => 140,  327 => 139,  321 => 136,  315 => 133,  311 => 131,  309 => 130,  305 => 129,  301 => 128,  280 => 109,  267 => 106,  263 => 105,  259 => 104,  255 => 103,  251 => 102,  247 => 101,  243 => 100,  239 => 99,  233 => 96,  227 => 93,  223 => 91,  221 => 90,  217 => 89,  213 => 88,  193 => 70,  180 => 67,  176 => 66,  172 => 65,  168 => 64,  164 => 63,  160 => 62,  156 => 61,  150 => 58,  144 => 55,  140 => 53,  138 => 52,  134 => 51,  130 => 50,  112 => 34,  99 => 31,  95 => 30,  91 => 29,  87 => 28,  83 => 27,  79 => 26,  73 => 23,  67 => 20,  63 => 18,  61 => 17,  57 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* */
/*  {% block contenido %}*/
/* <b>TABLA FORMULARIOS HORAS</b>*/
/* <table border=1>*/
/* <tr >*/
/* <th></th>*/
/*     <th>Type</th>*/
/*     <th>USER</th>*/
/*     <th>LOGIN</th>*/
/*     <th>DATE</th>*/
/*     <th>READ</th>*/
/*     <th>STATUS</th>*/
/* </tr>*/
/* {% for form in listIncomingFormsH %}*/
/* {% for u in relationHours %}*/
/* {% if u.idForm==form.id %}*/
/* <tr>*/
/*   	<td>*/
/*           <form action='{{ path('intranet_readForm')}}' method='post'>*/
/*                 <input type="submit" value="VER">*/
/*                   <input type="hidden" name="typeF" value="hours">*/
/*                   <input type="hidden" name="id" value="{{form.id}}">*/
/*           </form>*/
/*     </td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ form.type }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ u.login }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ form.numHours }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ form.send }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ form.isread }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ form.status }}</td>*/
/* </tr>{% endif %}*/
/* {% endfor %}{% endfor %}*/
/* </table>*/
/* */
/* <hr>*/
/* */
/* <b>TABLA FORMULARIOS VACATIONS</b>*/
/* <table border=1>*/
/* <tr>*/
/* <th></th>*/
/*    <th>USER</th>*/
/*    <th>LOGIN</th>*/
/*    <th>DATE</th>*/
/*    <th>READ</th>*/
/*    <th>FROM</th>*/
/*    <th>TO</th>*/
/*    <th>STATUS</th>*/
/* </tr>*/
/* {% for form in listIncomingFormsV %}*/
/* {% for u in relationVacations %}*/
/* {% if u.idForm==form.id %}*/
/* <tr>*/
/*    <td>*/
/*         <form action='{{ path('intranet_readForm')}}' method='post'>*/
/*               <input type="submit" value="VER">*/
/*                 <input type="hidden" name="typeF" value="vacations">*/
/*                 <input type="hidden" name="id" value="{{form.id}}">*/
/*         </form>*/
/*    </td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ u.login }}</td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ u.login }}</td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ form.send }}</td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ form.isread }}</td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ form.date1 }}</td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ form.date2 }}</td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ form.status }}</td>*/
/* </tr>{% endif %}*/
/* {% endfor %}{% endfor %}*/
/* */
/* </table>*/
/* */
/* <hr>*/
/* */
/* <b>TABLA FORMULARIOS EXPENSES</b>*/
/* <table border=1>*/
/* <tr>*/
/* <th></th>*/
/*    <th>USER</th>*/
/*    <th>LOGIN</th>*/
/*    <th>DATE</th>*/
/*    <th>READ</th>*/
/*    <th>COMPANY</th>*/
/*    <th>CONCEPT</th>*/
/*    <th>AMOUNT</th>*/
/*    <th>STATUS</th>*/
/* </tr>*/
/* {% for form in listIncomingFormsE %}*/
/* {% for u in relationExpenses %}*/
/* {% if u.idForm==form.id %}*/
/* <tr>*/
/*    <td>*/
/*         <form action='{{ path('intranet_readForm')}}' method='post'>*/
/*               <input type="submit" value="VER">*/
/*                 <input type="hidden" name="typeF" value="expenses">*/
/*                 <input type="hidden" name="id" value="{{form.id}}">*/
/*         </form>*/
/*    </td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ u.login }}</td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ u.login }}</td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ form.send }}</td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ form.isread }}</td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ form.company }}</td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ form.concept }}</td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ form.amount }} €</td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ form.status }}</td>*/
/* </tr>{% endif %}*/
/* {% endfor %}{% endfor %}*/
/* */
/* </table>*/
/* */
/* <hr>*/
/* */
/* <b>TABLA FORMULARIOS TRIPS</b>*/
/* <table border=1>*/
/* <tr>*/
/* <th></th>*/
/*    <th>USER</th>*/
/*    <th>LOGIN</th>*/
/*    <th>DATE</th>*/
/*    <th>READ</th>*/
/*    <th>FROM</th>*/
/*    <th>TO</th>*/
/*    <th>PLACE</th>*/
/*    <th>REASON</th>*/
/*    <th>STATUS</th>*/
/* </tr>*/
/* {% for form in listIncomingFormsT %}*/
/* {% for u in relationTrips %}*/
/* {% if u.idForm==form.id %}*/
/* <tr>*/
/*    <td>*/
/*         <form action='{{ path('intranet_readForm')}}' method='post'>*/
/*               <input type="submit" value="VER">*/
/*                 <input type="hidden" name="typeF" value="trip">*/
/*                 <input type="hidden" name="id" value="{{form.id}}">*/
/*         </form>*/
/*    </td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ u.login }}</td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ u.login }}</td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ form.send }}</td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ form.isread }}</td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ form.date1 }}</td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ form.date2 }}</td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ form.place }}</td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ form.reasons }}</td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ form.status }}</td>*/
/* </tr>{% endif %}*/
/* {% endfor %}{% endfor %}*/
/* */
/* </table>*/
/* */
/* */
/* {% endblock %}*/
/* */
