<?php

/* @intranet/Default/oldForms.html.twig */
class __TwigTemplate_5f4ced72370264b90b66cc1bcfae6cf8f37aa7ea61acf2a5056b247b0183fde1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "@intranet/Default/oldForms.html.twig", 1);
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
        $__internal_907b406104eb32310c70348ed15eeb039b691c4462276500a8cd5d5bba8721f0 = $this->env->getExtension("native_profiler");
        $__internal_907b406104eb32310c70348ed15eeb039b691c4462276500a8cd5d5bba8721f0->enter($__internal_907b406104eb32310c70348ed15eeb039b691c4462276500a8cd5d5bba8721f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@intranet/Default/oldForms.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_907b406104eb32310c70348ed15eeb039b691c4462276500a8cd5d5bba8721f0->leave($__internal_907b406104eb32310c70348ed15eeb039b691c4462276500a8cd5d5bba8721f0_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_5404f5ffc68ed9504b5795f51361a996b41af1a853d95fae9f860b4c246faf5f = $this->env->getExtension("native_profiler");
        $__internal_5404f5ffc68ed9504b5795f51361a996b41af1a853d95fae9f860b4c246faf5f->enter($__internal_5404f5ffc68ed9504b5795f51361a996b41af1a853d95fae9f860b4c246faf5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "
 <!-- <form action=\"vHours.php\" method=\"post\" style=\"border: 1px solid;width: 500px;\">
        <label>Number of hours: </label><input type='number' name=\"numhours\" id=\"numhours\" min=\"1\" max=\"50\"><i>min:1, max:20</i><BR>
        <label>Between: </label><input type='date' id=\"betw\"name=\"betw\" min=\"<?php echo date(\"Y-m-d\");?>\" value=\"<?php echo date(\"Y-m-d\");?>\"><i>default: TODAY</i><BR>
        <label>and: </label><input type='date' id=\"and\"name=\"and\" max=\"<?php echo date(\"Y-m-d\", strtotime(\"+3 month\")); ?>\" value=\"<?php echo date(\"Y-m-d\", strtotime(\"+1 week\")); ?>\">
        <i>default: 1 WEEK, max 3 months</i><BR>
                                     <input type=\"submit\" value=\"Modify\">
                                     <input type=\"hidden\" name=\"typeF\" value=\"hours\">
                                     <input type=\"hidden\" name=\"actualDate\" value=\"<?php echo date(\"Y-m-d H:i:s\");?>\">
   </form>
-->

<table border=1>
<tr >
    <th>Type</th>
    <th>USER</th>
    <th>LOGIN</th>
    <th>DATE</th>
    <th>V/F</th>
</tr>
";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listOldForms"]) ? $context["listOldForms"] : $this->getContext($context, "listOldForms")));
        foreach ($context['_seq'] as $context["_key"] => $context["new"]) {
            // line 25
            echo "<tr>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "type", array()), "html", null, true);
            echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "user", array()), "html", null, true);
            echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "login", array()), "html", null, true);
            echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "send", array()), "html", null, true);
            echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "accepted", array()), "html", null, true);
            echo "</td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['new'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
</table>

";
        
        $__internal_5404f5ffc68ed9504b5795f51361a996b41af1a853d95fae9f860b4c246faf5f->leave($__internal_5404f5ffc68ed9504b5795f51361a996b41af1a853d95fae9f860b4c246faf5f_prof);

    }

    public function getTemplateName()
    {
        return "@intranet/Default/oldForms.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 33,  85 => 30,  81 => 29,  77 => 28,  73 => 27,  69 => 26,  66 => 25,  62 => 24,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* */
/*  {% block contenido %}*/
/* */
/*  <!-- <form action="vHours.php" method="post" style="border: 1px solid;width: 500px;">*/
/*         <label>Number of hours: </label><input type='number' name="numhours" id="numhours" min="1" max="50"><i>min:1, max:20</i><BR>*/
/*         <label>Between: </label><input type='date' id="betw"name="betw" min="<?php echo date("Y-m-d");?>" value="<?php echo date("Y-m-d");?>"><i>default: TODAY</i><BR>*/
/*         <label>and: </label><input type='date' id="and"name="and" max="<?php echo date("Y-m-d", strtotime("+3 month")); ?>" value="<?php echo date("Y-m-d", strtotime("+1 week")); ?>">*/
/*         <i>default: 1 WEEK, max 3 months</i><BR>*/
/*                                      <input type="submit" value="Modify">*/
/*                                      <input type="hidden" name="typeF" value="hours">*/
/*                                      <input type="hidden" name="actualDate" value="<?php echo date("Y-m-d H:i:s");?>">*/
/*    </form>*/
/* -->*/
/* */
/* <table border=1>*/
/* <tr >*/
/*     <th>Type</th>*/
/*     <th>USER</th>*/
/*     <th>LOGIN</th>*/
/*     <th>DATE</th>*/
/*     <th>V/F</th>*/
/* </tr>*/
/* {% for new in listOldForms %}*/
/* <tr>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ new.type }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ new.user }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ new.login }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ new.send }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ new.accepted }}</td>*/
/* </tr>*/
/* {% endfor %}*/
/* */
/* </table>*/
/* */
/* {% endblock %}*/
/* */
