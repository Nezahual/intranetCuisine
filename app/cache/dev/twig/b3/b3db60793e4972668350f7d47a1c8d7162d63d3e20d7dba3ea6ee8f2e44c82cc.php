<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_24526289db8672ce57cab65c7d91a2ac0de3d66992980835942471423eb0662d extends Twig_Template
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
        $__internal_3df9a64ae4b616050e5bdbe290b0c978eb244291c492a71240e6dfadecf12dcd = $this->env->getExtension("native_profiler");
        $__internal_3df9a64ae4b616050e5bdbe290b0c978eb244291c492a71240e6dfadecf12dcd->enter($__internal_3df9a64ae4b616050e5bdbe290b0c978eb244291c492a71240e6dfadecf12dcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_3df9a64ae4b616050e5bdbe290b0c978eb244291c492a71240e6dfadecf12dcd->leave($__internal_3df9a64ae4b616050e5bdbe290b0c978eb244291c492a71240e6dfadecf12dcd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
