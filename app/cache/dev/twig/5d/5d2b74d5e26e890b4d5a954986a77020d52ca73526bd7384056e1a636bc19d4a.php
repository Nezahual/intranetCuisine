<?php

/* @intranet/Default/landinga.html.twig */
class __TwigTemplate_d6ec080213f99d48a10ae054d184d501902786414df8e1579a2be1c381575219 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout2.html.twig", "@intranet/Default/landinga.html.twig", 1);
        $this->blocks = array(
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "intranetBundle::layout2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4970917e0be74a05206ce92ff57196a3ffa5d6af0182c3dedadf5fb6b1df06e3 = $this->env->getExtension("native_profiler");
        $__internal_4970917e0be74a05206ce92ff57196a3ffa5d6af0182c3dedadf5fb6b1df06e3->enter($__internal_4970917e0be74a05206ce92ff57196a3ffa5d6af0182c3dedadf5fb6b1df06e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@intranet/Default/landinga.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4970917e0be74a05206ce92ff57196a3ffa5d6af0182c3dedadf5fb6b1df06e3->leave($__internal_4970917e0be74a05206ce92ff57196a3ffa5d6af0182c3dedadf5fb6b1df06e3_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_d281872180f97417b128a188c9032eeead7fc878cacd2ae6c9807421e6adab6a = $this->env->getExtension("native_profiler");
        $__internal_d281872180f97417b128a188c9032eeead7fc878cacd2ae6c9807421e6adab6a->enter($__internal_d281872180f97417b128a188c9032eeead7fc878cacd2ae6c9807421e6adab6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<script>
    window.onload = function(){
          document.forms['form1'].submit();
    }
</script>
    <form action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intranet_homepage", array("_locale" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lang", array()))), "html", null, true);
        echo "\" method=\"post\" id=\"form1\"></form>
";
        
        $__internal_d281872180f97417b128a188c9032eeead7fc878cacd2ae6c9807421e6adab6a->leave($__internal_d281872180f97417b128a188c9032eeead7fc878cacd2ae6c9807421e6adab6a_prof);

    }

    public function getTemplateName()
    {
        return "@intranet/Default/landinga.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout2.html.twig' %}*/
/* */
/* {% block contenido %}*/
/* <script>*/
/*     window.onload = function(){*/
/*           document.forms['form1'].submit();*/
/*     }*/
/* </script>*/
/*     <form action="{{ path('intranet_homepage', {_locale: user.lang }) }}" method="post" id="form1"></form>*/
/* {% endblock %}*/
/* */
