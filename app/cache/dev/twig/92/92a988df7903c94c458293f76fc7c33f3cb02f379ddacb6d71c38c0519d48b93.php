<?php

/* intranetBundle:Default:landinga.html.twig */
class __TwigTemplate_ae70ca147b07d5b00f0d90cbd85836291512697e2db2ad9a8a8048a6a54caced extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout2.html.twig", "intranetBundle:Default:landinga.html.twig", 1);
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
        $__internal_a761fe76be8465ce5807a2a5506369a67dd0dcdd1563e20e255800c01569d03b = $this->env->getExtension("native_profiler");
        $__internal_a761fe76be8465ce5807a2a5506369a67dd0dcdd1563e20e255800c01569d03b->enter($__internal_a761fe76be8465ce5807a2a5506369a67dd0dcdd1563e20e255800c01569d03b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:landinga.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a761fe76be8465ce5807a2a5506369a67dd0dcdd1563e20e255800c01569d03b->leave($__internal_a761fe76be8465ce5807a2a5506369a67dd0dcdd1563e20e255800c01569d03b_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_024a7adf7d9821b2dd117895758f7205cc9dc61d0d5d8bba50ad07b831c3facd = $this->env->getExtension("native_profiler");
        $__internal_024a7adf7d9821b2dd117895758f7205cc9dc61d0d5d8bba50ad07b831c3facd->enter($__internal_024a7adf7d9821b2dd117895758f7205cc9dc61d0d5d8bba50ad07b831c3facd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

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
        
        $__internal_024a7adf7d9821b2dd117895758f7205cc9dc61d0d5d8bba50ad07b831c3facd->leave($__internal_024a7adf7d9821b2dd117895758f7205cc9dc61d0d5d8bba50ad07b831c3facd_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle:Default:landinga.html.twig";
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
