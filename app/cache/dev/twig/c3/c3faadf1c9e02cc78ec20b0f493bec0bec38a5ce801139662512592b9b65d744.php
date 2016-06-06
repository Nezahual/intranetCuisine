<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_4f981641d514210308647e941947d2f753b9404ab85b9f7f4ecb52accb5dcf71 extends Twig_Template
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
        $__internal_655bdc46bac84c559c6c87c4be8384dad5a888d8a44feab14b4adaf8b3582812 = $this->env->getExtension("native_profiler");
        $__internal_655bdc46bac84c559c6c87c4be8384dad5a888d8a44feab14b4adaf8b3582812->enter($__internal_655bdc46bac84c559c6c87c4be8384dad5a888d8a44feab14b4adaf8b3582812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_655bdc46bac84c559c6c87c4be8384dad5a888d8a44feab14b4adaf8b3582812->leave($__internal_655bdc46bac84c559c6c87c4be8384dad5a888d8a44feab14b4adaf8b3582812_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
