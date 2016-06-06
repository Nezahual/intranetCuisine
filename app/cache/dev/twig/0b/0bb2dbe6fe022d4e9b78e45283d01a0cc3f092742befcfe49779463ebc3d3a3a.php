<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_29b6cb4f8f664d7e0167c519a2ed1ed9a5ce82ef1024de5e671ae9e89f734a8e extends Twig_Template
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
        $__internal_ce09554a97fc460b817b69ae55b1adce2f6e91f31fe6b2633fc61e6b3494573f = $this->env->getExtension("native_profiler");
        $__internal_ce09554a97fc460b817b69ae55b1adce2f6e91f31fe6b2633fc61e6b3494573f->enter($__internal_ce09554a97fc460b817b69ae55b1adce2f6e91f31fe6b2633fc61e6b3494573f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_ce09554a97fc460b817b69ae55b1adce2f6e91f31fe6b2633fc61e6b3494573f->leave($__internal_ce09554a97fc460b817b69ae55b1adce2f6e91f31fe6b2633fc61e6b3494573f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
