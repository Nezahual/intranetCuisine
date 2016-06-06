<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_3b858aa2bdf530cbeb65fc4c0081579dfe23de7345fb44cf113ab0ea0d897a34 extends Twig_Template
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
        $__internal_7614f7073a9bb0ae166f1110a59efee88b3f09841bc08f71fcd67995ed607be8 = $this->env->getExtension("native_profiler");
        $__internal_7614f7073a9bb0ae166f1110a59efee88b3f09841bc08f71fcd67995ed607be8->enter($__internal_7614f7073a9bb0ae166f1110a59efee88b3f09841bc08f71fcd67995ed607be8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_7614f7073a9bb0ae166f1110a59efee88b3f09841bc08f71fcd67995ed607be8->leave($__internal_7614f7073a9bb0ae166f1110a59efee88b3f09841bc08f71fcd67995ed607be8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
