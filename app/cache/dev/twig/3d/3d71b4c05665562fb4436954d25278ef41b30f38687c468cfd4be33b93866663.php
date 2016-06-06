<?php

/* intranetBundle:Default:newuser.html.twig */
class __TwigTemplate_98148a434691959e3aae57cd43469d1b184891925c22642a93b9c59ce4e500cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "intranetBundle:Default:newuser.html.twig", 1);
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
        $__internal_96cf733260a9fbcbd93a3ec8a88160f752486bb2e5f11b1effafd4bccb77b11d = $this->env->getExtension("native_profiler");
        $__internal_96cf733260a9fbcbd93a3ec8a88160f752486bb2e5f11b1effafd4bccb77b11d->enter($__internal_96cf733260a9fbcbd93a3ec8a88160f752486bb2e5f11b1effafd4bccb77b11d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:newuser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96cf733260a9fbcbd93a3ec8a88160f752486bb2e5f11b1effafd4bccb77b11d->leave($__internal_96cf733260a9fbcbd93a3ec8a88160f752486bb2e5f11b1effafd4bccb77b11d_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_5a299c8fb7449919aa2ce41aebcd31a6ec2e7c154a7d79250a699dc23408e0f0 = $this->env->getExtension("native_profiler");
        $__internal_5a299c8fb7449919aa2ce41aebcd31a6ec2e7c154a7d79250a699dc23408e0f0->enter($__internal_5a299c8fb7449919aa2ce41aebcd31a6ec2e7c154a7d79250a699dc23408e0f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

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
        
        $__internal_5a299c8fb7449919aa2ce41aebcd31a6ec2e7c154a7d79250a699dc23408e0f0->leave($__internal_5a299c8fb7449919aa2ce41aebcd31a6ec2e7c154a7d79250a699dc23408e0f0_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle:Default:newuser.html.twig";
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
