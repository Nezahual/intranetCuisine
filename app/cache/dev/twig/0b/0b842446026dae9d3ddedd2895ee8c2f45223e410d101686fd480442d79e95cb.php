<?php

/* @intranet/Default/createNewFeed.html.twig */
class __TwigTemplate_c85392c7650360b6e01729e59c7cbc64596d403feaea6869748c639cab809523 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "@intranet/Default/createNewFeed.html.twig", 1);
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
        $__internal_b5c76868d15680d12e28b8c0a418ab602460698cb49387452f0f8da8dad8396e = $this->env->getExtension("native_profiler");
        $__internal_b5c76868d15680d12e28b8c0a418ab602460698cb49387452f0f8da8dad8396e->enter($__internal_b5c76868d15680d12e28b8c0a418ab602460698cb49387452f0f8da8dad8396e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@intranet/Default/createNewFeed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5c76868d15680d12e28b8c0a418ab602460698cb49387452f0f8da8dad8396e->leave($__internal_b5c76868d15680d12e28b8c0a418ab602460698cb49387452f0f8da8dad8396e_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_9a909d6ca84ac34171df9b47976f09e0e74820c17619e9778029f065982b6cf9 = $this->env->getExtension("native_profiler");
        $__internal_9a909d6ca84ac34171df9b47976f09e0e74820c17619e9778029f065982b6cf9->enter($__internal_9a909d6ca84ac34171df9b47976f09e0e74820c17619e9778029f065982b6cf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<h3>CREATE A NEW New</h3><br>
 <form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("intranet_insertnew");
        echo "\" method=\"post\" style=\"border: 1px solid;width: 500px;\">
        <label>TITLE:</label><input type=\"text\" name=\"title\" style=\"margin-left: 40px;\"><br>
        <label>CONTENT:</label><input type=\"textarea\" name=\"content\" style=\"margin-left: 13px;\"> <br>
        <label>Channel:</label>

   ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["channels"]) ? $context["channels"] : $this->getContext($context, "channels")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 11
            echo "       <input type=\"checkbox\" name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "name", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "name", array()), "html", null, true);
            echo "\" style=\"margin-left: 17px;\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "name", array()), "html", null, true);
            echo "
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "<br>

                                       <input type=\"submit\" value=\"CREATE\">
                                       <input type=\"hidden\" name=\"typeF\" value=\"expenses\">
   </form>

";
        
        $__internal_9a909d6ca84ac34171df9b47976f09e0e74820c17619e9778029f065982b6cf9->leave($__internal_9a909d6ca84ac34171df9b47976f09e0e74820c17619e9778029f065982b6cf9_prof);

    }

    public function getTemplateName()
    {
        return "@intranet/Default/createNewFeed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 12,  55 => 11,  51 => 10,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* */
/*  {% block contenido %}*/
/* <h3>CREATE A NEW New</h3><br>*/
/*  <form action="{{path('intranet_insertnew')}}" method="post" style="border: 1px solid;width: 500px;">*/
/*         <label>TITLE:</label><input type="text" name="title" style="margin-left: 40px;"><br>*/
/*         <label>CONTENT:</label><input type="textarea" name="content" style="margin-left: 13px;"> <br>*/
/*         <label>Channel:</label>*/
/* */
/*    {% for c in channels %}*/
/*        <input type="checkbox" name="{{ c.name }}" value="{{ c.name }}" style="margin-left: 17px;">{{ c.name }}*/
/*    {% endfor %}<br>*/
/* */
/*                                        <input type="submit" value="CREATE">*/
/*                                        <input type="hidden" name="typeF" value="expenses">*/
/*    </form>*/
/* */
/* {% endblock %}*/
/* */
