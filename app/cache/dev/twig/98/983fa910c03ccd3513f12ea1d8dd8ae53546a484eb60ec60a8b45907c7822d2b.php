<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_00ea4a6d970f3458308ed766154ec856f3c06ef909aa99a3879cb530ebc6885d extends Twig_Template
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
        $__internal_3112fa1e72e8e0ecf46ad7b5b6c38ff3759fdb906fd285634b6bbec0a5554145 = $this->env->getExtension("native_profiler");
        $__internal_3112fa1e72e8e0ecf46ad7b5b6c38ff3759fdb906fd285634b6bbec0a5554145->enter($__internal_3112fa1e72e8e0ecf46ad7b5b6c38ff3759fdb906fd285634b6bbec0a5554145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_3112fa1e72e8e0ecf46ad7b5b6c38ff3759fdb906fd285634b6bbec0a5554145->leave($__internal_3112fa1e72e8e0ecf46ad7b5b6c38ff3759fdb906fd285634b6bbec0a5554145_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
