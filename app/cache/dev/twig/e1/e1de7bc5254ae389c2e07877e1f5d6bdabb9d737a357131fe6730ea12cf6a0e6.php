<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_7b8d2779806b4f2a74c9bc3ade6caa71049098a3371efe34c75f2b74756fcc70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f1438d89a0712fc50caa72a45b9d3cbfefbc7ef8a5c7fd81b4ea7afd8f570bc5 = $this->env->getExtension("native_profiler");
        $__internal_f1438d89a0712fc50caa72a45b9d3cbfefbc7ef8a5c7fd81b4ea7afd8f570bc5->enter($__internal_f1438d89a0712fc50caa72a45b9d3cbfefbc7ef8a5c7fd81b4ea7afd8f570bc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_f1438d89a0712fc50caa72a45b9d3cbfefbc7ef8a5c7fd81b4ea7afd8f570bc5->leave($__internal_f1438d89a0712fc50caa72a45b9d3cbfefbc7ef8a5c7fd81b4ea7afd8f570bc5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
