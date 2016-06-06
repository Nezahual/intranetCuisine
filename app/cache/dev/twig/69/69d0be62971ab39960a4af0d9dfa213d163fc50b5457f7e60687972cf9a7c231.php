<?php

/* @intranet/Default/book.html.twig */
class __TwigTemplate_9137437c862a8064b7146a5def56b33eceee748cf66570b755b8799c3a3ed30c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "@intranet/Default/book.html.twig", 1);
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
        $__internal_d85659f6d437c6cec8ad131bea8f91de1143e10ab898b23c51a1b8ae66974436 = $this->env->getExtension("native_profiler");
        $__internal_d85659f6d437c6cec8ad131bea8f91de1143e10ab898b23c51a1b8ae66974436->enter($__internal_d85659f6d437c6cec8ad131bea8f91de1143e10ab898b23c51a1b8ae66974436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@intranet/Default/book.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d85659f6d437c6cec8ad131bea8f91de1143e10ab898b23c51a1b8ae66974436->leave($__internal_d85659f6d437c6cec8ad131bea8f91de1143e10ab898b23c51a1b8ae66974436_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_313d87374bfe927fc6dec210dd346dcb4a4c13e0ddce17d0db1e9fb42bc029a5 = $this->env->getExtension("native_profiler");
        $__internal_313d87374bfe927fc6dec210dd346dcb4a4c13e0ddce17d0db1e9fb42bc029a5->enter($__internal_313d87374bfe927fc6dec210dd346dcb4a4c13e0ddce17d0db1e9fb42bc029a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<h3>Aquí las habitaciones para hacer click y redirigir como formulario </h3>

";
        // line 6
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["listrooms2"]) ? $context["listrooms2"] : $this->getContext($context, "listrooms2"))), "html", null, true);
        echo " elementos en el array.
<?php echo \$_SESSION[\"f\"]; ?>j
<hr><hr><hr>
";
        // line 9
        $context["flag"] = 0;
        // line 10
        echo "
";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listrooms2"]) ? $context["listrooms2"] : $this->getContext($context, "listrooms2")));
        foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
            // line 12
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["b"], "data", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                // line 13
                echo "    <u><h3>DÍA ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "date", array()), "html", null, true);
                echo "</h3></u><br>
      ";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "user", array()), "html", null, true);
                echo " ha reservado la habitación ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["b"], "number", array()), "html", null, true);
                echo " a las ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["r"], "hours", array()));
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
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "<hr>********************<hr>********************<hr>
";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listrooms2"]) ? $context["listrooms2"] : $this->getContext($context, "listrooms2")));
        foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
            // line 19
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["b"], "data", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                // line 20
                echo "  ";
                if (((isset($context["flag"]) ? $context["flag"] : $this->getContext($context, "flag")) == 0)) {
                    // line 21
                    echo "    <u><h3>DÍA ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "date", array()), "html", null, true);
                    echo "</h3></u><br>
  ";
                }
                // line 22
                $context["flag"] = 1;
                // line 23
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["r"], "hours", array()));
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
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "

<hr>*******************<hr>*******************<hr>


";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listrooms2"]) ? $context["listrooms2"] : $this->getContext($context, "listrooms2")));
        foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
            // line 32
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["b"], "data", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                // line 33
                echo "    <u><h3>DÍA ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "date", array()), "html", null, true);
                echo "</h3></u><br>
      ";
                // line 34
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["r"], "hours", array()));
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
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
";
        
        $__internal_313d87374bfe927fc6dec210dd346dcb4a4c13e0ddce17d0db1e9fb42bc029a5->leave($__internal_313d87374bfe927fc6dec210dd346dcb4a4c13e0ddce17d0db1e9fb42bc029a5_prof);

    }

    public function getTemplateName()
    {
        return "@intranet/Default/book.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 37,  160 => 34,  155 => 33,  150 => 32,  146 => 31,  139 => 26,  117 => 23,  115 => 22,  109 => 21,  106 => 20,  101 => 19,  97 => 18,  94 => 17,  69 => 14,  64 => 13,  59 => 12,  55 => 11,  52 => 10,  50 => 9,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* */
/*  {% block contenido %}*/
/* <h3>Aquí las habitaciones para hacer click y redirigir como formulario </h3>*/
/* */
/* {{listrooms2|length}} elementos en el array.*/
/* <?php echo $_SESSION["f"]; ?>j*/
/* <hr><hr><hr>*/
/* {% set flag = 0 %}*/
/* */
/* {% for b in listrooms2 %}*/
/*   {% for r in b.data %}*/
/*     <u><h3>DÍA {{ r.date }}</h3></u><br>*/
/*       {{ r.user }} ha reservado la habitación {{b.number}} a las {% for h in r.hours %} "{{h}}", {% endfor %} horas.<br>*/
/*   {% endfor %}*/
/* {% endfor %}*/
/* <hr>********************<hr>********************<hr>*/
/* {% for b in listrooms2 %}*/
/*   {% for r in b.data %}*/
/*   {% if flag==0 %}*/
/*     <u><h3>DÍA {{ r.date }}</h3></u><br>*/
/*   {% endif %}{% set flag = 1 %}*/
/*       {% for h in r.hours %} "{{h}}", {% endfor %} horas.<br>*/
/*   {% endfor %}*/
/* {% endfor %}*/
/* */
/* */
/* <hr>*******************<hr>*******************<hr>*/
/* */
/* */
/* {% for b in listrooms2 %}*/
/*   {% for r in b.data %}*/
/*     <u><h3>DÍA {{ r.date }}</h3></u><br>*/
/*       {% for h in r.hours %} "{{h}}", {% endfor %} horas.<br>*/
/*   {% endfor %}*/
/* {% endfor %}*/
/* */
/* {% endblock %}*/
/* */
