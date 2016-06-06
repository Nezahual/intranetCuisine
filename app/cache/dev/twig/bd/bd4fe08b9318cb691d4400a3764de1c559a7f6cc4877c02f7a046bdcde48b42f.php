<?php

/* @intranet/Default/landing.html.twig */
class __TwigTemplate_ba90615708492a2a4877803c8a2375a9012d6d16314297e3d44e7516dd153149 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "@intranet/Default/landing.html.twig", 1);
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
        $__internal_1c820306ef669c6c6dded5c71ce75ff9137467d95b86c2b256254388bc7d3626 = $this->env->getExtension("native_profiler");
        $__internal_1c820306ef669c6c6dded5c71ce75ff9137467d95b86c2b256254388bc7d3626->enter($__internal_1c820306ef669c6c6dded5c71ce75ff9137467d95b86c2b256254388bc7d3626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@intranet/Default/landing.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c820306ef669c6c6dded5c71ce75ff9137467d95b86c2b256254388bc7d3626->leave($__internal_1c820306ef669c6c6dded5c71ce75ff9137467d95b86c2b256254388bc7d3626_prof);

    }

    // line 4
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_b25f2b482414c6ef46180e783a5bbd6f804fe036b2c1b756b6801c4c6ed185b9 = $this->env->getExtension("native_profiler");
        $__internal_b25f2b482414c6ef46180e783a5bbd6f804fe036b2c1b756b6801c4c6ed185b9->enter($__internal_b25f2b482414c6ef46180e783a5bbd6f804fe036b2c1b756b6801c4c6ed185b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 5
        echo "<h2> LANDING PAGE   </h2>
";
        // line 6
        echo $this->env->getExtension('translator')->getTranslator()->trans("This is Landing Page", array(), "messages");
        // line 7
        echo "<hr>
Menu not visible for all => indicate routes?<br><br>
\t<b>Login\t </b>  /<i>language</i>/intranet_logout<br>
\t<b>Channel</b>  /<i>language</i>/channels<br>
\t<b>News\t  </b> /<i>language</i>/news<br>
\t<b>Tasks\t </b>  /<i>language</i>/tasks<br>
  <b>User Management\t </b>  /<i>language</i>/userManagement<br>
<br>The language can be /es/, /en/ or /fr/
";
        
        $__internal_b25f2b482414c6ef46180e783a5bbd6f804fe036b2c1b756b6801c4c6ed185b9->leave($__internal_b25f2b482414c6ef46180e783a5bbd6f804fe036b2c1b756b6801c4c6ed185b9_prof);

    }

    public function getTemplateName()
    {
        return "@intranet/Default/landing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 7,  43 => 6,  40 => 5,  34 => 4,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* */
/* */
/* {% block contenido %}*/
/* <h2> LANDING PAGE   </h2>*/
/* {% trans %} This is Landing Page {% endtrans %}*/
/* <hr>*/
/* Menu not visible for all => indicate routes?<br><br>*/
/* 	<b>Login	 </b>  /<i>language</i>/intranet_logout<br>*/
/* 	<b>Channel</b>  /<i>language</i>/channels<br>*/
/* 	<b>News	  </b> /<i>language</i>/news<br>*/
/* 	<b>Tasks	 </b>  /<i>language</i>/tasks<br>*/
/*   <b>User Management	 </b>  /<i>language</i>/userManagement<br>*/
/* <br>The language can be /es/, /en/ or /fr/*/
/* {% endblock %}*/
/* */
