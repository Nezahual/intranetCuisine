<?php

/* @intranet/Default/index.html.twig */
class __TwigTemplate_338c890d3f453dba0e8037c63ec69a187e11a33f6f07f67963581c81361a8eff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout2.html.twig", "@intranet/Default/index.html.twig", 1);
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
        $__internal_f25ca3dd83cbe9753f4ef6594e872801c761d502de590f20ee3ef752da67ca4b = $this->env->getExtension("native_profiler");
        $__internal_f25ca3dd83cbe9753f4ef6594e872801c761d502de590f20ee3ef752da67ca4b->enter($__internal_f25ca3dd83cbe9753f4ef6594e872801c761d502de590f20ee3ef752da67ca4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@intranet/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f25ca3dd83cbe9753f4ef6594e872801c761d502de590f20ee3ef752da67ca4b->leave($__internal_f25ca3dd83cbe9753f4ef6594e872801c761d502de590f20ee3ef752da67ca4b_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_92fd987bb8a2eaf8e74ce1032a4e692289ebd862fdbd77a12aff014d0b08da65 = $this->env->getExtension("native_profiler");
        $__internal_92fd987bb8a2eaf8e74ce1032a4e692289ebd862fdbd77a12aff014d0b08da65->enter($__internal_92fd987bb8a2eaf8e74ce1032a4e692289ebd862fdbd77a12aff014d0b08da65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<!--<h1>Inicio</h1>-->
<h3> Copyright (c) 2016 Copyright Holder All Rights Reserved.<br>Login de LDAP   </h3>
<hr>
<form action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("intranet_login");
        echo "\" method=\"post\">
  <label>Introduzca su login de LDAP:</label>
<input type=\"text\" name=\"login\" style=\"margin-left: 50px;\"> <br>
  <label>Por favor introduzca la contrasena: </label>
<input type=\"password\" name=\"pass\" style=\"margin-left: 10px;\"><br>
<input type=\"submit\" value=\"Click to login\">
</form>




";
        
        $__internal_92fd987bb8a2eaf8e74ce1032a4e692289ebd862fdbd77a12aff014d0b08da65->leave($__internal_92fd987bb8a2eaf8e74ce1032a4e692289ebd862fdbd77a12aff014d0b08da65_prof);

    }

    public function getTemplateName()
    {
        return "@intranet/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout2.html.twig' %}*/
/* */
/* {% block contenido %}*/
/* <!--<h1>Inicio</h1>-->*/
/* <h3> Copyright (c) 2016 Copyright Holder All Rights Reserved.<br>Login de LDAP   </h3>*/
/* <hr>*/
/* <form action="{{ path('intranet_login')}}" method="post">*/
/*   <label>Introduzca su login de LDAP:</label>*/
/* <input type="text" name="login" style="margin-left: 50px;"> <br>*/
/*   <label>Por favor introduzca la contrasena: </label>*/
/* <input type="password" name="pass" style="margin-left: 10px;"><br>*/
/* <input type="submit" value="Click to login">*/
/* </form>*/
/* */
/* */
/* */
/* */
/* {% endblock %}*/
/* */
