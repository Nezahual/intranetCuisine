<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_c1d644ec7b61a960217fca17b90be9fe3182e3cb8d008101d44b0c9889c1ec47 extends Twig_Template
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
        $__internal_cf2065c2993278635a3d2cf34041d77d64af3b3ed53aeec39e7884f0e5953300 = $this->env->getExtension("native_profiler");
        $__internal_cf2065c2993278635a3d2cf34041d77d64af3b3ed53aeec39e7884f0e5953300->enter($__internal_cf2065c2993278635a3d2cf34041d77d64af3b3ed53aeec39e7884f0e5953300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_cf2065c2993278635a3d2cf34041d77d64af3b3ed53aeec39e7884f0e5953300->leave($__internal_cf2065c2993278635a3d2cf34041d77d64af3b3ed53aeec39e7884f0e5953300_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
