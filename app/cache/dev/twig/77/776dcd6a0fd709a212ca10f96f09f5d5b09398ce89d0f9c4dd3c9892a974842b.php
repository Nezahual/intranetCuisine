<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_39452e7573e989ff1ff4ab6c6832ab38db260ecaecb19aed6b99626a3d597cac extends Twig_Template
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
        $__internal_ac9260e84f380f37f66f1a0449a2cc4061a6d0884a57cd96b7ca100f44b7ffb5 = $this->env->getExtension("native_profiler");
        $__internal_ac9260e84f380f37f66f1a0449a2cc4061a6d0884a57cd96b7ca100f44b7ffb5->enter($__internal_ac9260e84f380f37f66f1a0449a2cc4061a6d0884a57cd96b7ca100f44b7ffb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_ac9260e84f380f37f66f1a0449a2cc4061a6d0884a57cd96b7ca100f44b7ffb5->leave($__internal_ac9260e84f380f37f66f1a0449a2cc4061a6d0884a57cd96b7ca100f44b7ffb5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
