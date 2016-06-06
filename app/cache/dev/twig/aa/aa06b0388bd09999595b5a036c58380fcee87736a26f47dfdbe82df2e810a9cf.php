<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_6e6302b15ae34792152863b1c7c9f032550c7cb57f1ccaf8f71aa03746d251ea extends Twig_Template
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
        $__internal_ed59fe1506c3a2a1e241f3fdf9dd1acb9e9c3c59f002ceb2b532099ac36e0491 = $this->env->getExtension("native_profiler");
        $__internal_ed59fe1506c3a2a1e241f3fdf9dd1acb9e9c3c59f002ceb2b532099ac36e0491->enter($__internal_ed59fe1506c3a2a1e241f3fdf9dd1acb9e9c3c59f002ceb2b532099ac36e0491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_ed59fe1506c3a2a1e241f3fdf9dd1acb9e9c3c59f002ceb2b532099ac36e0491->leave($__internal_ed59fe1506c3a2a1e241f3fdf9dd1acb9e9c3c59f002ceb2b532099ac36e0491_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
