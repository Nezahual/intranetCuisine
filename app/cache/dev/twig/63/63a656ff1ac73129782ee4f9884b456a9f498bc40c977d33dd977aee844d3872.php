<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_6e3d4d8937a4dca093517258a783f825ba96344eb8fd1efe46968ed365d7e7f5 extends Twig_Template
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
        $__internal_ce3d1aaab235aee7784bf7017155d6f79c11315f598c00375f4137ed7d8bd413 = $this->env->getExtension("native_profiler");
        $__internal_ce3d1aaab235aee7784bf7017155d6f79c11315f598c00375f4137ed7d8bd413->enter($__internal_ce3d1aaab235aee7784bf7017155d6f79c11315f598c00375f4137ed7d8bd413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_ce3d1aaab235aee7784bf7017155d6f79c11315f598c00375f4137ed7d8bd413->leave($__internal_ce3d1aaab235aee7784bf7017155d6f79c11315f598c00375f4137ed7d8bd413_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
