<?php

/* intranetBundle:Default:index.html.twig */
class __TwigTemplate_fd7728855cee28477647d6897d52803aeaa13b0030ba027930a5842faf58f1c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout2.html.twig", "intranetBundle:Default:index.html.twig", 1);
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
        $__internal_3a545bdd700ce22e2bedbe3aead19084eaf5a95889d1356e1e1a3f5c6ac5ade7 = $this->env->getExtension("native_profiler");
        $__internal_3a545bdd700ce22e2bedbe3aead19084eaf5a95889d1356e1e1a3f5c6ac5ade7->enter($__internal_3a545bdd700ce22e2bedbe3aead19084eaf5a95889d1356e1e1a3f5c6ac5ade7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a545bdd700ce22e2bedbe3aead19084eaf5a95889d1356e1e1a3f5c6ac5ade7->leave($__internal_3a545bdd700ce22e2bedbe3aead19084eaf5a95889d1356e1e1a3f5c6ac5ade7_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_cdfb19d841d6cda6d3a82ac599847f98cbc915c019045f2cc4e1166ea76836d5 = $this->env->getExtension("native_profiler");
        $__internal_cdfb19d841d6cda6d3a82ac599847f98cbc915c019045f2cc4e1166ea76836d5->enter($__internal_cdfb19d841d6cda6d3a82ac599847f98cbc915c019045f2cc4e1166ea76836d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

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
        
        $__internal_cdfb19d841d6cda6d3a82ac599847f98cbc915c019045f2cc4e1166ea76836d5->leave($__internal_cdfb19d841d6cda6d3a82ac599847f98cbc915c019045f2cc4e1166ea76836d5_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle:Default:index.html.twig";
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
