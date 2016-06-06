<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_cf8ca59d27d729f7ad1b76bde909988d303f6595be2e907049944192a767948c extends Twig_Template
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
        $__internal_0ddba8b69b4b79ad41a2998dbf5b2ae1c85984a39688eda6869ee1ddf306ac3f = $this->env->getExtension("native_profiler");
        $__internal_0ddba8b69b4b79ad41a2998dbf5b2ae1c85984a39688eda6869ee1ddf306ac3f->enter($__internal_0ddba8b69b4b79ad41a2998dbf5b2ae1c85984a39688eda6869ee1ddf306ac3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_0ddba8b69b4b79ad41a2998dbf5b2ae1c85984a39688eda6869ee1ddf306ac3f->leave($__internal_0ddba8b69b4b79ad41a2998dbf5b2ae1c85984a39688eda6869ee1ddf306ac3f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
