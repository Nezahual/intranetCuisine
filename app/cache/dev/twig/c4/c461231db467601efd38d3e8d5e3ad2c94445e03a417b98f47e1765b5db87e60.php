<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_c9f8044bfd03a9fe6bfe6546a1d7ba684ede5b434aa65a54e877fd472b021bfe extends Twig_Template
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
        $__internal_ca7397b1af3e5edf4481df4bceaaa04a1bfd6f8fb20da54e109bf1d855231623 = $this->env->getExtension("native_profiler");
        $__internal_ca7397b1af3e5edf4481df4bceaaa04a1bfd6f8fb20da54e109bf1d855231623->enter($__internal_ca7397b1af3e5edf4481df4bceaaa04a1bfd6f8fb20da54e109bf1d855231623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_ca7397b1af3e5edf4481df4bceaaa04a1bfd6f8fb20da54e109bf1d855231623->leave($__internal_ca7397b1af3e5edf4481df4bceaaa04a1bfd6f8fb20da54e109bf1d855231623_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
