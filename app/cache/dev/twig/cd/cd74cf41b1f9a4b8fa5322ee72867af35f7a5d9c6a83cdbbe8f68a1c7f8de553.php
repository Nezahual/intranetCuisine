<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_78778c1ca577b4dcc21ccea4057711d6e6c9ad34070e949840c927274b039ddf extends Twig_Template
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
        $__internal_91425d22daaa0244db68f4115c7f0ee6d70bf323278774050b9a968e5e719223 = $this->env->getExtension("native_profiler");
        $__internal_91425d22daaa0244db68f4115c7f0ee6d70bf323278774050b9a968e5e719223->enter($__internal_91425d22daaa0244db68f4115c7f0ee6d70bf323278774050b9a968e5e719223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_91425d22daaa0244db68f4115c7f0ee6d70bf323278774050b9a968e5e719223->leave($__internal_91425d22daaa0244db68f4115c7f0ee6d70bf323278774050b9a968e5e719223_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
