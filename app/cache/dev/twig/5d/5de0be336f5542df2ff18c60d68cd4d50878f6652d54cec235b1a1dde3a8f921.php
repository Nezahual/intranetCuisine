<?php

/* intranetBundle:Default:translate.html.twig */
class __TwigTemplate_024d38fdce63e7cf47cbca023e7ccd75b49b3d4f43c03493e43dba6588f750fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "intranetBundle:Default:translate.html.twig", 1);
        $this->blocks = array(
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "intranetBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_49e193f92de25662f2c873683ffd61836a4e56414c704bb555e4b8f8346e6fe8 = $this->env->getExtension("native_profiler");
        $__internal_49e193f92de25662f2c873683ffd61836a4e56414c704bb555e4b8f8346e6fe8->enter($__internal_49e193f92de25662f2c873683ffd61836a4e56414c704bb555e4b8f8346e6fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:translate.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49e193f92de25662f2c873683ffd61836a4e56414c704bb555e4b8f8346e6fe8->leave($__internal_49e193f92de25662f2c873683ffd61836a4e56414c704bb555e4b8f8346e6fe8_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_f46195b7592122e84e9b62034f986966ca69aa8f5bca631c9ec66fbe52bd67fd = $this->env->getExtension("native_profiler");
        $__internal_f46195b7592122e84e9b62034f986966ca69aa8f5bca631c9ec66fbe52bd67fd->enter($__internal_f46195b7592122e84e9b62034f986966ca69aa8f5bca631c9ec66fbe52bd67fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<br>
<h1>Inicio</h1>
<h2>";
        // line 6
        echo $this->env->getExtension('translator')->getTranslator()->trans("TRANSLATING PAGE", array(), "messages");
        echo "</h2>
";
        // line 7
        echo $this->env->getExtension('translator')->getTranslator()->trans("New User", array(), "messages");
        echo "<br>
";
        // line 8
        echo $this->env->getExtension('translator')->getTranslator()->trans("Welcome", array(), "messages");
        echo "<br>
";
        // line 9
        echo $this->env->getExtension('translator')->getTranslator()->trans("Symfony2 is great", array(), "messages");
        echo "<br>
Escogiste: ";
        // line 10
        echo $this->env->getExtension('translator')->getTranslator()->trans("lang", array(), "messages");
        // line 11
        echo "<hr><br>
<a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("intranet_translation", array("_locale" => "en"));
        echo "\">ENGLISH </a><br>
<a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("intranet_translation", array("_locale" => "es"));
        echo "\">SPANISH </a><br>
<a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("intranet_translation", array("_locale" => "fr"));
        echo "\">FRENCH </a><br>




";
        
        $__internal_f46195b7592122e84e9b62034f986966ca69aa8f5bca631c9ec66fbe52bd67fd->leave($__internal_f46195b7592122e84e9b62034f986966ca69aa8f5bca631c9ec66fbe52bd67fd_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle:Default:translate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 14,  69 => 13,  65 => 12,  62 => 11,  60 => 10,  56 => 9,  52 => 8,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* */
/* {% block contenido %}*/
/* <br>*/
/* <h1>Inicio</h1>*/
/* <h2>{% trans %} TRANSLATING PAGE   {% endtrans %}</h2>*/
/* {% trans %}  New User{% endtrans %}<br>*/
/* {% trans %}  Welcome {% endtrans %}<br>*/
/* {% trans %}Symfony2 is great{% endtrans %}<br>*/
/* Escogiste: {% trans %} lang   {% endtrans %}*/
/* <hr><br>*/
/* <a href="{{ path('intranet_translation', {_locale: 'en'}) }}">ENGLISH </a><br>*/
/* <a href="{{ path('intranet_translation', {_locale: 'es'}) }}">SPANISH </a><br>*/
/* <a href="{{ path('intranet_translation', {_locale: 'fr'}) }}">FRENCH </a><br>*/
/* */
/* */
/* */
/* */
/* {% endblock %}*/
/* */
