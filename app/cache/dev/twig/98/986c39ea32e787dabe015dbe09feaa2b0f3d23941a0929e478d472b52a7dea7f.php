<?php

/* @intranet/Default/bd.html.twig */
class __TwigTemplate_044c5eaa23b7b0d333059fbdb81040539309cbc949fbf0e51ee6b5a24554b9bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "@intranet/Default/bd.html.twig", 1);
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
        $__internal_846cc4a4b80c8ae0875855d3d72f3735a8fe7eb025c2f868710783ee58ceb45c = $this->env->getExtension("native_profiler");
        $__internal_846cc4a4b80c8ae0875855d3d72f3735a8fe7eb025c2f868710783ee58ceb45c->enter($__internal_846cc4a4b80c8ae0875855d3d72f3735a8fe7eb025c2f868710783ee58ceb45c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@intranet/Default/bd.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_846cc4a4b80c8ae0875855d3d72f3735a8fe7eb025c2f868710783ee58ceb45c->leave($__internal_846cc4a4b80c8ae0875855d3d72f3735a8fe7eb025c2f868710783ee58ceb45c_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_c963b302b19a396231a4f87280326885bf9365f5ace2cdb167dc89f7e1957b90 = $this->env->getExtension("native_profiler");
        $__internal_c963b302b19a396231a4f87280326885bf9365f5ace2cdb167dc89f7e1957b90->enter($__internal_c963b302b19a396231a4f87280326885bf9365f5ace2cdb167dc89f7e1957b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

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
        
        $__internal_c963b302b19a396231a4f87280326885bf9365f5ace2cdb167dc89f7e1957b90->leave($__internal_c963b302b19a396231a4f87280326885bf9365f5ace2cdb167dc89f7e1957b90_prof);

    }

    public function getTemplateName()
    {
        return "@intranet/Default/bd.html.twig";
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
