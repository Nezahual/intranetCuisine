<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_26a094b141f01856428278905b10ac98e6d4c45d58f4d182f1fd746c30a73b52 extends Twig_Template
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
        $__internal_b380b6307cf45dfefc1cfd4cafe4de06260cb29629190f9af7762e9724a51d17 = $this->env->getExtension("native_profiler");
        $__internal_b380b6307cf45dfefc1cfd4cafe4de06260cb29629190f9af7762e9724a51d17->enter($__internal_b380b6307cf45dfefc1cfd4cafe4de06260cb29629190f9af7762e9724a51d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_b380b6307cf45dfefc1cfd4cafe4de06260cb29629190f9af7762e9724a51d17->leave($__internal_b380b6307cf45dfefc1cfd4cafe4de06260cb29629190f9af7762e9724a51d17_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
