<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_784460440fe0bc1a82244d4f8f65f11c0ab659f03390e8abc3e09552e72e5f8d extends Twig_Template
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
        $__internal_1455a2faf96712fc82a16e26daa26182d6e4ea2483adc53e7a52332385112a8c = $this->env->getExtension("native_profiler");
        $__internal_1455a2faf96712fc82a16e26daa26182d6e4ea2483adc53e7a52332385112a8c->enter($__internal_1455a2faf96712fc82a16e26daa26182d6e4ea2483adc53e7a52332385112a8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_1455a2faf96712fc82a16e26daa26182d6e4ea2483adc53e7a52332385112a8c->leave($__internal_1455a2faf96712fc82a16e26daa26182d6e4ea2483adc53e7a52332385112a8c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
