<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_d8d030e1b7f05d18dce28c10d554a26aec8c6e40514417d8c12bb888f66f0702 extends Twig_Template
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
        $__internal_c76ff283829ccfae38329f59a3b966e10cf509f03cd50bc6efd7a443fc18c0c4 = $this->env->getExtension("native_profiler");
        $__internal_c76ff283829ccfae38329f59a3b966e10cf509f03cd50bc6efd7a443fc18c0c4->enter($__internal_c76ff283829ccfae38329f59a3b966e10cf509f03cd50bc6efd7a443fc18c0c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_c76ff283829ccfae38329f59a3b966e10cf509f03cd50bc6efd7a443fc18c0c4->leave($__internal_c76ff283829ccfae38329f59a3b966e10cf509f03cd50bc6efd7a443fc18c0c4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
