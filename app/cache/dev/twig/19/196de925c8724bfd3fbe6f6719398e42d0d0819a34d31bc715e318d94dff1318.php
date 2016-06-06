<?php

/* intranetBundle:Default:bd.html.twig */
class __TwigTemplate_d9f946a7383b186ed29013953a69fd12a9661c65196db6eb510599c38d48a6ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "intranetBundle:Default:bd.html.twig", 1);
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
        $__internal_85a1eff7fde276609c64458dd896091363c973c6c4859acd63e9e18112d14a65 = $this->env->getExtension("native_profiler");
        $__internal_85a1eff7fde276609c64458dd896091363c973c6c4859acd63e9e18112d14a65->enter($__internal_85a1eff7fde276609c64458dd896091363c973c6c4859acd63e9e18112d14a65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:bd.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85a1eff7fde276609c64458dd896091363c973c6c4859acd63e9e18112d14a65->leave($__internal_85a1eff7fde276609c64458dd896091363c973c6c4859acd63e9e18112d14a65_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_d93de0ee508a343def568d3d1ed2d3a8a431498659207956331a9515e9943b32 = $this->env->getExtension("native_profiler");
        $__internal_d93de0ee508a343def568d3d1ed2d3a8a431498659207956331a9515e9943b32->enter($__internal_d93de0ee508a343def568d3d1ed2d3a8a431498659207956331a9515e9943b32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "

";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nameU", array()), "html", null, true);
        echo " is ";
        echo twig_escape_filter($this->env, (isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "html", null, true);
        echo "
<br><br>
";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getNombreCompleto", array()), "html", null, true);
        echo "
";
        
        $__internal_d93de0ee508a343def568d3d1ed2d3a8a431498659207956331a9515e9943b32->leave($__internal_d93de0ee508a343def568d3d1ed2d3a8a431498659207956331a9515e9943b32_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle:Default:bd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 8,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* */
/*  {% block contenido %}*/
/* */
/* */
/* {{user.nameU}} is {{ role }}*/
/* <br><br>*/
/* {{user.getNombreCompleto}}*/
/* {% endblock %}*/
/* */
