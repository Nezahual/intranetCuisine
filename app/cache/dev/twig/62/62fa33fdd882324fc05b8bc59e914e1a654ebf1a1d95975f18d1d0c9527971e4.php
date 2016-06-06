<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_b7379d97489c51a4715f27af86e75cf50a33036fa3f2ab486f51b893da2086b5 extends Twig_Template
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
        $__internal_becc9c8975aca9fabedd51a9f65588e5c3b5d5b5be568abaf7817fe5d1ebcd17 = $this->env->getExtension("native_profiler");
        $__internal_becc9c8975aca9fabedd51a9f65588e5c3b5d5b5be568abaf7817fe5d1ebcd17->enter($__internal_becc9c8975aca9fabedd51a9f65588e5c3b5d5b5be568abaf7817fe5d1ebcd17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_becc9c8975aca9fabedd51a9f65588e5c3b5d5b5be568abaf7817fe5d1ebcd17->leave($__internal_becc9c8975aca9fabedd51a9f65588e5c3b5d5b5be568abaf7817fe5d1ebcd17_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
