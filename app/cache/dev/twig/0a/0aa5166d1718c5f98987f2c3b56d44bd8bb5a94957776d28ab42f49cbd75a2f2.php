<?php

/* intranetBundle:Default:myhistoricalforms.html.twig */
class __TwigTemplate_c93ba4ad4947e958bdcc4f44c10c3afc0f73ff417bf467dd1ea07644385e2f1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "intranetBundle:Default:myhistoricalforms.html.twig", 1);
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
        $__internal_edea26d87c163d078db533f3cc233d04a2ca564caf96c043b2c9fbf5249494eb = $this->env->getExtension("native_profiler");
        $__internal_edea26d87c163d078db533f3cc233d04a2ca564caf96c043b2c9fbf5249494eb->enter($__internal_edea26d87c163d078db533f3cc233d04a2ca564caf96c043b2c9fbf5249494eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:myhistoricalforms.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_edea26d87c163d078db533f3cc233d04a2ca564caf96c043b2c9fbf5249494eb->leave($__internal_edea26d87c163d078db533f3cc233d04a2ca564caf96c043b2c9fbf5249494eb_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_176bdb9e9e91c0eab8e6ef683a37c5b972cb98425ebc87eca14157740d878ff3 = $this->env->getExtension("native_profiler");
        $__internal_176bdb9e9e91c0eab8e6ef683a37c5b972cb98425ebc87eca14157740d878ff3->enter($__internal_176bdb9e9e91c0eab8e6ef683a37c5b972cb98425ebc87eca14157740d878ff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<b>TABLA FORMULARIOS HORAS</b><br><br>
<table border=1>
<tr >
<th></th>
    <th>ID</th>
    <th>FROM</th>
    <th>TO</th>
</tr>
";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["myHours"]) ? $context["myHours"] : $this->getContext($context, "myHours")));
        foreach ($context['_seq'] as $context["_key"] => $context["forms"]) {
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["forms"]);
            foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                // line 14
                echo "<tr>
  \t<td><form action='";
                // line 15
                echo $this->env->getExtension('routing')->getPath("intranet_crudForm");
                echo "' method='post'><input type=\"hidden\" name=\"typeF\" value=\"hours\">
    <input type=\"hidden\" name=\"id\" value=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "id", array()), "html", null, true);
                echo "\"> <input type=\"submit\" value=\"VERME\" ></form></td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "id", array()), "html", null, true);
                echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "date1", array()), "html", null, true);
                echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "date2", array()), "html", null, true);
                echo "</td>
</tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forms'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "</table>
<br>

";
        // line 27
        echo "
<br>
<b>TABLA FORMULARIOS Vacaciones</b><br>
<table border=1>
<tr >
<th></th>
    <th>SEND</th>
    <th>FROM</th>
    <th>TO</th>
</tr>
";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["myVacations"]) ? $context["myVacations"] : $this->getContext($context, "myVacations")));
        foreach ($context['_seq'] as $context["_key"] => $context["forms"]) {
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["forms"]);
            foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                // line 39
                echo "<tr>
  \t<td><form action='";
                // line 40
                echo $this->env->getExtension('routing')->getPath("intranet_crudForm");
                echo "' method='post'> <input type=\"hidden\" name=\"typeF\" value=\"vacations\">
    <input type=\"hidden\" name=\"id\" value=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "id", array()), "html", null, true);
                echo "\"><input type=\"submit\" value=\"VER\" ></form></td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "send", array()), "html", null, true);
                echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "date1", array()), "html", null, true);
                echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "date2", array()), "html", null, true);
                echo "</td>
</tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forms'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "</table><br>

";
        // line 51
        echo "
<br>
<b>TABLA FORMULARIOS EXPENSES</b><br>
<table border=1>
<tr >
<th></th>
    <th>SEND</th>
    <th>Company</th>
    <th>Date</th>
    <th>Concept</th>
    <th>Amount</th>
</tr>
";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["myExpenses"]) ? $context["myExpenses"] : $this->getContext($context, "myExpenses")));
        foreach ($context['_seq'] as $context["_key"] => $context["forms"]) {
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["forms"]);
            foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                // line 65
                echo "<tr>
  \t<td><form action='";
                // line 66
                echo $this->env->getExtension('routing')->getPath("intranet_crudForm");
                echo "' method='post'><input type=\"hidden\" name=\"typeF\" value=\"expenses\">
    <input type=\"hidden\" name=\"id\" value=\"";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "id", array()), "html", null, true);
                echo "\"> <input type=\"submit\" value=\"VER\" ></form></td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "send", array()), "html", null, true);
                echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "company", array()), "html", null, true);
                echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "date1", array()), "html", null, true);
                echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "concept", array()), "html", null, true);
                echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "amount", array()), "html", null, true);
                echo "</td>
</tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forms'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "</table><br>

";
        // line 79
        echo "
<br>
<b>TABLA FORMULARIOS TRIP</b><br>
<table border=1>
<tr >
<th></th>
    <th>SEND</th>
    <th>Place</th>
    <th>Name Congress</th>
    <th>Reasons</th>
    <th>From</th>
    <th>To</th>
</tr>
";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["myTrips"]) ? $context["myTrips"] : $this->getContext($context, "myTrips")));
        foreach ($context['_seq'] as $context["_key"] => $context["forms"]) {
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["forms"]);
            foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                // line 94
                echo "<tr>
  \t<td><form action='";
                // line 95
                echo $this->env->getExtension('routing')->getPath("intranet_crudForm");
                echo "' method='post'><input type=\"hidden\" name=\"typeF\" value=\"trip\">
    <input type=\"hidden\" name=\"id\" value=\"";
                // line 96
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "id", array()), "html", null, true);
                echo "\"> <input type=\"submit\" value=\"VER\" ></form></td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                // line 97
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "send", array()), "html", null, true);
                echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                // line 98
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "place", array()), "html", null, true);
                echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                // line 99
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "nameCongress", array()), "html", null, true);
                echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                // line 100
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "reasons", array()), "html", null, true);
                echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                // line 101
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "date1", array()), "html", null, true);
                echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                // line 102
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "date2", array()), "html", null, true);
                echo "</td>
</tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forms'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "</table>

";
        
        $__internal_176bdb9e9e91c0eab8e6ef683a37c5b972cb98425ebc87eca14157740d878ff3->leave($__internal_176bdb9e9e91c0eab8e6ef683a37c5b972cb98425ebc87eca14157740d878ff3_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle:Default:myhistoricalforms.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 106,  271 => 102,  267 => 101,  263 => 100,  259 => 99,  255 => 98,  251 => 97,  247 => 96,  243 => 95,  240 => 94,  236 => 93,  232 => 92,  217 => 79,  213 => 76,  200 => 72,  196 => 71,  192 => 70,  188 => 69,  184 => 68,  180 => 67,  176 => 66,  173 => 65,  169 => 64,  165 => 63,  151 => 51,  147 => 48,  134 => 44,  130 => 43,  126 => 42,  122 => 41,  118 => 40,  115 => 39,  111 => 38,  107 => 37,  95 => 27,  90 => 23,  77 => 19,  73 => 18,  69 => 17,  65 => 16,  61 => 15,  58 => 14,  54 => 13,  50 => 12,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* */
/*  {% block contenido %}*/
/* <b>TABLA FORMULARIOS HORAS</b><br><br>*/
/* <table border=1>*/
/* <tr >*/
/* <th></th>*/
/*     <th>ID</th>*/
/*     <th>FROM</th>*/
/*     <th>TO</th>*/
/* </tr>*/
/* {% for forms in myHours %}*/
/* {% for f in forms %}*/
/* <tr>*/
/*   	<td><form action='{{ path('intranet_crudForm') }}' method='post'><input type="hidden" name="typeF" value="hours">*/
/*     <input type="hidden" name="id" value="{{f.id}}"> <input type="submit" value="VERME" ></form></td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ f.id }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ f.date1 }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ f.date2 }}</td>*/
/* </tr>*/
/* {% endfor %}*/
/* {% endfor %}*/
/* </table>*/
/* <br>*/
/* */
/* {##############################################################################}*/
/* */
/* <br>*/
/* <b>TABLA FORMULARIOS Vacaciones</b><br>*/
/* <table border=1>*/
/* <tr >*/
/* <th></th>*/
/*     <th>SEND</th>*/
/*     <th>FROM</th>*/
/*     <th>TO</th>*/
/* </tr>*/
/* {% for forms in myVacations %}*/
/* {% for f in forms %}*/
/* <tr>*/
/*   	<td><form action='{{ path('intranet_crudForm') }}' method='post'> <input type="hidden" name="typeF" value="vacations">*/
/*     <input type="hidden" name="id" value="{{f.id}}"><input type="submit" value="VER" ></form></td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ f.send }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ f.date1 }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ f.date2 }}</td>*/
/* </tr>*/
/* {% endfor %}*/
/* {% endfor %}*/
/* </table><br>*/
/* */
/* {##############################################################################}*/
/* */
/* <br>*/
/* <b>TABLA FORMULARIOS EXPENSES</b><br>*/
/* <table border=1>*/
/* <tr >*/
/* <th></th>*/
/*     <th>SEND</th>*/
/*     <th>Company</th>*/
/*     <th>Date</th>*/
/*     <th>Concept</th>*/
/*     <th>Amount</th>*/
/* </tr>*/
/* {% for forms in myExpenses %}*/
/* {% for f in forms %}*/
/* <tr>*/
/*   	<td><form action='{{ path('intranet_crudForm') }}' method='post'><input type="hidden" name="typeF" value="expenses">*/
/*     <input type="hidden" name="id" value="{{f.id}}"> <input type="submit" value="VER" ></form></td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ f.send }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ f.company }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ f.date1 }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ f.concept }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ f.amount }}</td>*/
/* </tr>*/
/* {% endfor %}*/
/* {% endfor %}*/
/* </table><br>*/
/* */
/* {##############################################################################}*/
/* */
/* <br>*/
/* <b>TABLA FORMULARIOS TRIP</b><br>*/
/* <table border=1>*/
/* <tr >*/
/* <th></th>*/
/*     <th>SEND</th>*/
/*     <th>Place</th>*/
/*     <th>Name Congress</th>*/
/*     <th>Reasons</th>*/
/*     <th>From</th>*/
/*     <th>To</th>*/
/* </tr>*/
/* {% for forms in myTrips %}*/
/* {% for f in forms %}*/
/* <tr>*/
/*   	<td><form action='{{ path('intranet_crudForm') }}' method='post'><input type="hidden" name="typeF" value="trip">*/
/*     <input type="hidden" name="id" value="{{f.id}}"> <input type="submit" value="VER" ></form></td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ f.send }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ f.place }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ f.nameCongress }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ f.reasons }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ f.date1 }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ f.date2 }}</td>*/
/* </tr>*/
/* {% endfor %}*/
/* {% endfor %}*/
/* </table>*/
/* */
/* {% endblock %}*/
/* */
