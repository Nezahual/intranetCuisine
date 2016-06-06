<?php

/* @intranet/Default/newuser.html.twig */
class __TwigTemplate_d6bdd4e32e8c2486d191b65810296126d2c07ed202e26984d26de4a8efbeea33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "@intranet/Default/newuser.html.twig", 1);
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
        $__internal_6a0926c3a47c9e2dd5ee808ab76702e6954af2998cd2c7b4bf5d1ee474b96b4b = $this->env->getExtension("native_profiler");
        $__internal_6a0926c3a47c9e2dd5ee808ab76702e6954af2998cd2c7b4bf5d1ee474b96b4b->enter($__internal_6a0926c3a47c9e2dd5ee808ab76702e6954af2998cd2c7b4bf5d1ee474b96b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@intranet/Default/newuser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a0926c3a47c9e2dd5ee808ab76702e6954af2998cd2c7b4bf5d1ee474b96b4b->leave($__internal_6a0926c3a47c9e2dd5ee808ab76702e6954af2998cd2c7b4bf5d1ee474b96b4b_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_7844cecfd2f52f1d7bd37204966aff5fc89174cb82ed7737f6c2e7d4f1d85689 = $this->env->getExtension("native_profiler");
        $__internal_7844cecfd2f52f1d7bd37204966aff5fc89174cb82ed7737f6c2e7d4f1d85689->enter($__internal_7844cecfd2f52f1d7bd37204966aff5fc89174cb82ed7737f6c2e7d4f1d85689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "
<form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("intranet_nonExistingUser");
        echo "\" method=\"post\" style=\"border: 1px solid;width: 500px;\">

      Login: <input type='text' name=\"myLogin\" id=\"myLogin\" value=\"\" class=\"form-control\">
      Nombre: <input type='text' name=\"myName\" id=\"myName\" value=\"\" class=\"form-control\">
      Apellidos: <input type='text' id=\"mySurname\"name=\"mySurname\" value=\"\" class=\"form-control\"><BR>
      <label>";
        // line 10
        echo $this->env->getExtension('translator')->getTranslator()->trans("Language", array(), "messages");
        echo "</label>
            <select class=\"form-control\" name=\"myLang\" >
              <option value=\"es\">ES</option>
              <option value=\"en\">EN</option>
              <option value=\"fr\">FR</option>
              <option value=\"de\">DE</option>
            </select>
      <BR>

      <label>";
        // line 19
        echo $this->env->getExtension('translator')->getTranslator()->trans("Photo", array(), "messages");
        echo "</label><input type='file' id=\"myPhoto\"name=\"myPhoto\"><img src=\"\"><BR>
      <label class=\"radio\">";
        // line 20
        echo $this->env->getExtension('translator')->getTranslator()->trans("Notifications", array(), "messages");
        echo "</label>
                                  <input type='radio' id=\"myNotification\" name=\"myNotifications\" value=\"1\"><label for=\"myNotification\">ON</label>
                                  <input type='radio' id=\"myNotifications\" name=\"myNotifications\" value=\"0\"   checked ><label for=\"myNotifications\">OFF</label><br>

                                  <input type=\"submit\" value=\"";
        // line 24
        echo $this->env->getExtension('translator')->getTranslator()->trans("new", array(), "messages");
        echo "\">
                                  <input type=\"hidden\" name=\"webCuisine\" value=\"test\" >
 </form>

";
        
        $__internal_7844cecfd2f52f1d7bd37204966aff5fc89174cb82ed7737f6c2e7d4f1d85689->leave($__internal_7844cecfd2f52f1d7bd37204966aff5fc89174cb82ed7737f6c2e7d4f1d85689_prof);

    }

    public function getTemplateName()
    {
        return "@intranet/Default/newuser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 24,  67 => 20,  63 => 19,  51 => 10,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* */
/*  {% block contenido %}*/
/* */
/* <form action="{{ path('intranet_nonExistingUser') }}" method="post" style="border: 1px solid;width: 500px;">*/
/* */
/*       Login: <input type='text' name="myLogin" id="myLogin" value="" class="form-control">*/
/*       Nombre: <input type='text' name="myName" id="myName" value="" class="form-control">*/
/*       Apellidos: <input type='text' id="mySurname"name="mySurname" value="" class="form-control"><BR>*/
/*       <label>{% trans %}Language{% endtrans %}</label>*/
/*             <select class="form-control" name="myLang" >*/
/*               <option value="es">ES</option>*/
/*               <option value="en">EN</option>*/
/*               <option value="fr">FR</option>*/
/*               <option value="de">DE</option>*/
/*             </select>*/
/*       <BR>*/
/* */
/*       <label>{% trans %}Photo{% endtrans %}</label><input type='file' id="myPhoto"name="myPhoto"><img src=""><BR>*/
/*       <label class="radio">{% trans %}Notifications{% endtrans %}</label>*/
/*                                   <input type='radio' id="myNotification" name="myNotifications" value="1"><label for="myNotification">ON</label>*/
/*                                   <input type='radio' id="myNotifications" name="myNotifications" value="0"   checked ><label for="myNotifications">OFF</label><br>*/
/* */
/*                                   <input type="submit" value="{% trans %}new{% endtrans %}">*/
/*                                   <input type="hidden" name="webCuisine" value="test" >*/
/*  </form>*/
/* */
/* {% endblock %}*/
/* */
