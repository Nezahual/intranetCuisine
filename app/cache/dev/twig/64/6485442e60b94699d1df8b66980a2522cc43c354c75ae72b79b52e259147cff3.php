<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_504660eb99d8b1b4bce166a896f3eeaa8ed1e21ae9322f018c6803aacbd336a9 extends Twig_Template
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
        $__internal_18d50d40763a142cb078bd6ad627422b12d7a947fedf57a5bbdaed1bc302b10a = $this->env->getExtension("native_profiler");
        $__internal_18d50d40763a142cb078bd6ad627422b12d7a947fedf57a5bbdaed1bc302b10a->enter($__internal_18d50d40763a142cb078bd6ad627422b12d7a947fedf57a5bbdaed1bc302b10a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_18d50d40763a142cb078bd6ad627422b12d7a947fedf57a5bbdaed1bc302b10a->leave($__internal_18d50d40763a142cb078bd6ad627422b12d7a947fedf57a5bbdaed1bc302b10a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
