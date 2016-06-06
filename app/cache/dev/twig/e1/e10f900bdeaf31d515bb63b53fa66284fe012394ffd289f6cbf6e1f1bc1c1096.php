<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_3af0fbefe8e9fc797f3529c55186eee8584238ebd3a04475b5fc7342f4c78c6e extends Twig_Template
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
        $__internal_ccff1112de424a027131178abc232fe20e7a0e78606290fcc85604f20fdc86d4 = $this->env->getExtension("native_profiler");
        $__internal_ccff1112de424a027131178abc232fe20e7a0e78606290fcc85604f20fdc86d4->enter($__internal_ccff1112de424a027131178abc232fe20e7a0e78606290fcc85604f20fdc86d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_ccff1112de424a027131178abc232fe20e7a0e78606290fcc85604f20fdc86d4->leave($__internal_ccff1112de424a027131178abc232fe20e7a0e78606290fcc85604f20fdc86d4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
