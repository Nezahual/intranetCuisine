<?php

/* intranetBundle:Default:bookRoom.html.twig */
class __TwigTemplate_33555936414e8450039d298559244da020cef0463fd8ee31c505b8858704a87a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "intranetBundle:Default:bookRoom.html.twig", 1);
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
        $__internal_0809af9ac952db49e3a90a8cb9b237eead48fce409d285c0d4d70966ade8f5f3 = $this->env->getExtension("native_profiler");
        $__internal_0809af9ac952db49e3a90a8cb9b237eead48fce409d285c0d4d70966ade8f5f3->enter($__internal_0809af9ac952db49e3a90a8cb9b237eead48fce409d285c0d4d70966ade8f5f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:bookRoom.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0809af9ac952db49e3a90a8cb9b237eead48fce409d285c0d4d70966ade8f5f3->leave($__internal_0809af9ac952db49e3a90a8cb9b237eead48fce409d285c0d4d70966ade8f5f3_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_21590b5ec476397b111254b286b5ce1a1a14ce72c33184121d1f5419644ca707 = $this->env->getExtension("native_profiler");
        $__internal_21590b5ec476397b111254b286b5ce1a1a14ce72c33184121d1f5419644ca707->enter($__internal_21590b5ec476397b111254b286b5ce1a1a14ce72c33184121d1f5419644ca707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<h3>Aquí las habitaciones para hacer click y redirigir como formulario </h3>

";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listrooms"]) ? $context["listrooms"] : $this->getContext($context, "listrooms")));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 7
            echo "  <h1><b>Habitación número: ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "number", array()), "html", null, true);
            echo " </b></h1>

  ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["r"], "data", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
                // line 10
                echo "    ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "user", array()), "html", null, true);
                echo ", ha reservado el día ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "date", array()), "html", null, true);
                echo " a las   ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["d"], "hours", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["h"]) {
                    echo " \"";
                    echo twig_escape_filter($this->env, $context["h"], "html", null, true);
                    echo "\", ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['h'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "horas.<br>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "
<br>
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
 <hr><hr>
";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listrooms"]) ? $context["listrooms"] : $this->getContext($context, "listrooms")));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 18
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["r"], "data", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
                // line 19
                echo "      <h1><b>Día ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "date", array()), "html", null, true);
                echo "</b></h1><br>
      La habitación ";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "number", array()), "html", null, true);
                echo " está reservada por ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "user", array()), "html", null, true);
                echo " a las   ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["d"], "hours", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["h"]) {
                    echo " \"";
                    echo twig_escape_filter($this->env, $context["h"], "html", null, true);
                    echo "\", ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['h'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "horas.<br>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "<br><br>

<!-- NO HAY QUE PERDER DE VISTA QUE SE RECIBE UNA FECHA; CUANDO ÉSTA SEA IGUAL A LA QUE RECORREMOS, SE MUESTRA LA INFO -->
Aqui empieza el último bloque:
<hr><hr>";
        // line 26
        $context["flag"] = 0;
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listrooms"]) ? $context["listrooms"] : $this->getContext($context, "listrooms")));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 28
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["r"], "data", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
                // line 29
                echo "    ";
                if (($this->getAttribute($context["d"], "date", array()) == "01/05/2016")) {
                    // line 30
                    echo "    ";
                    if (((isset($context["flag"]) ? $context["flag"] : $this->getContext($context, "flag")) == 0)) {
                        // line 31
                        echo "      <h1><b>Día ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "date", array()), "html", null, true);
                        echo "</b></h1><br>
    ";
                    }
                    // line 32
                    $context["flag"] = 1;
                    // line 33
                    echo "      La habitación ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "number", array()), "html", null, true);
                    echo " está reservada por ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "user", array()), "html", null, true);
                    echo " a las";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["d"], "hours", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["h"]) {
                        echo " \"";
                        echo twig_escape_filter($this->env, $context["h"], "html", null, true);
                        echo "\", ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['h'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " horas.<br>
    ";
                }
                // line 35
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
<div style=\"height: 200px;border: 2px solid red;\">
    <form action=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("intranet_book");
        echo "\" method=\"get\">
        <input type=\"date\" name=\"fecha\" id=\"fecha\">
        <input type=\"submit\" value=\"Elegir Room y Hora\">
    </form>
</div>



";
        
        $__internal_21590b5ec476397b111254b286b5ce1a1a14ce72c33184121d1f5419644ca707->leave($__internal_21590b5ec476397b111254b286b5ce1a1a14ce72c33184121d1f5419644ca707_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle:Default:bookRoom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 39,  191 => 37,  181 => 35,  162 => 33,  160 => 32,  154 => 31,  151 => 30,  148 => 29,  143 => 28,  139 => 27,  137 => 26,  131 => 22,  106 => 20,  101 => 19,  96 => 18,  92 => 17,  88 => 15,  80 => 12,  58 => 10,  54 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* */
/*  {% block contenido %}*/
/* <h3>Aquí las habitaciones para hacer click y redirigir como formulario </h3>*/
/* */
/* {% for r in listrooms %}*/
/*   <h1><b>Habitación número: {{ r.number }} </b></h1>*/
/* */
/*   {% for d in r.data %}*/
/*     {{ d.user }}, ha reservado el día {{ d.date }} a las   {% for h in d.hours %} "{{h}}", {% endfor %}horas.<br>*/
/*   {% endfor %}*/
/* */
/* <br>*/
/*  {% endfor %}*/
/* */
/*  <hr><hr>*/
/* {% for r in listrooms %}*/
/*   {% for d in r.data %}*/
/*       <h1><b>Día {{ d.date }}</b></h1><br>*/
/*       La habitación {{ r.number }} está reservada por {{ d.user }} a las   {% for h in d.hours %} "{{h}}", {% endfor %}horas.<br>*/
/*   {% endfor %}*/
/* {% endfor %}<br><br>*/
/* */
/* <!-- NO HAY QUE PERDER DE VISTA QUE SE RECIBE UNA FECHA; CUANDO ÉSTA SEA IGUAL A LA QUE RECORREMOS, SE MUESTRA LA INFO -->*/
/* Aqui empieza el último bloque:*/
/* <hr><hr>{% set flag = 0 %}*/
/* {% for r in listrooms %}*/
/*   {% for d in r.data %}*/
/*     {% if d.date=="01/05/2016" %}*/
/*     {% if flag==0 %}*/
/*       <h1><b>Día {{ d.date }}</b></h1><br>*/
/*     {% endif %}{% set flag = 1 %}*/
/*       La habitación {{ r.number }} está reservada por {{ d.user }} a las{% for h in d.hours %} "{{h}}", {% endfor %} horas.<br>*/
/*     {% endif %}*/
/*   {% endfor %}*/
/* {% endfor %}*/
/* */
/* <div style="height: 200px;border: 2px solid red;">*/
/*     <form action="{{ path('intranet_book')}}" method="get">*/
/*         <input type="date" name="fecha" id="fecha">*/
/*         <input type="submit" value="Elegir Room y Hora">*/
/*     </form>*/
/* </div>*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
