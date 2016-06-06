<?php

/* @intranet/Default/settings.html.twig */
class __TwigTemplate_81bda05fbfd2a7fdfe716a8d29e6032a988df143cc77bd6395f8fded964c05a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "@intranet/Default/settings.html.twig", 1);
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
        $__internal_12df87ded1ab6f88e1ee22ba2ce2f2ee79101a91fc8fd415a582a5bb1b1837f7 = $this->env->getExtension("native_profiler");
        $__internal_12df87ded1ab6f88e1ee22ba2ce2f2ee79101a91fc8fd415a582a5bb1b1837f7->enter($__internal_12df87ded1ab6f88e1ee22ba2ce2f2ee79101a91fc8fd415a582a5bb1b1837f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@intranet/Default/settings.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12df87ded1ab6f88e1ee22ba2ce2f2ee79101a91fc8fd415a582a5bb1b1837f7->leave($__internal_12df87ded1ab6f88e1ee22ba2ce2f2ee79101a91fc8fd415a582a5bb1b1837f7_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_a4212a0c37da61a9d676ab2adde647514889556a42af6199de52e43067e95a38 = $this->env->getExtension("native_profiler");
        $__internal_a4212a0c37da61a9d676ab2adde647514889556a42af6199de52e43067e95a38->enter($__internal_a4212a0c37da61a9d676ab2adde647514889556a42af6199de52e43067e95a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "CONTENIDO DEL USUARIO line.4
<form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("intranet_cruduser");
        echo "\" method=\"post\" style=\"border: 1px solid;width: 500px;\">
      <label>";
        // line 6
        echo $this->env->getExtension('translator')->getTranslator()->trans("Name", array(), "messages");
        echo "</label><input type='text' name=\"myName\" id=\"myName\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["me"]) ? $context["me"] : $this->getContext($context, "me")), "nameU", array()), "html", null, true);
        echo "\"><BR>
      <label>";
        // line 7
        echo $this->env->getExtension('translator')->getTranslator()->trans("Surname", array(), "messages");
        echo "</label><input type='text' id=\"mySurname\" name=\"mySurname\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["me"]) ? $context["me"] : $this->getContext($context, "me")), "surnameU", array()), "html", null, true);
        echo "\"><BR>
      <label>";
        // line 8
        echo $this->env->getExtension('translator')->getTranslator()->trans("Language", array(), "messages");
        echo "</label><br>
                <input type='radio' id=\"myLanguage\" name=\"myLanguage\" value=\"es\" ";
        // line 9
        if (($this->getAttribute((isset($context["me"]) ? $context["me"] : $this->getContext($context, "me")), "lang", array()) == "es")) {
            echo " checked ";
        }
        echo "><label for=\"myLanguage\">ES</label><BR>
                <input type='radio' id=\"myLanguage\" name=\"myLanguage\" value=\"en\" ";
        // line 10
        if (($this->getAttribute((isset($context["me"]) ? $context["me"] : $this->getContext($context, "me")), "lang", array()) == "en")) {
            echo " checked ";
        }
        echo "><label for=\"myLanguage\">EN</label><BR>
                <input type='radio' id=\"myLanguage\" name=\"myLanguage\" value=\"fr\" ";
        // line 11
        if (($this->getAttribute((isset($context["me"]) ? $context["me"] : $this->getContext($context, "me")), "lang", array()) == "fr")) {
            echo " checked ";
        }
        echo "><label for=\"myLanguage\">FR</label><BR>
                <input type='radio' id=\"myLanguage\" name=\"myLanguage\" value=\"de\" ";
        // line 12
        if (($this->getAttribute((isset($context["me"]) ? $context["me"] : $this->getContext($context, "me")), "lang", array()) == "de")) {
            echo " checked ";
        }
        echo "><label for=\"myLanguage\">DE</label><BR>
      <label>";
        // line 13
        echo $this->env->getExtension('translator')->getTranslator()->trans("Photo", array(), "messages");
        echo "</label><input type='file' id=\"myPhoto\" name=\"myPhoto\"><img src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["me"]) ? $context["me"] : $this->getContext($context, "me")), "photo", array()), "html", null, true);
        echo "\"><BR>

      <label>";
        // line 15
        echo $this->env->getExtension('translator')->getTranslator()->trans("Notifications", array(), "messages");
        echo "</label>
                <input type='radio' id=\"myNotifications\" name=\"myNotifications\" value=\"1\" ";
        // line 16
        if (($this->getAttribute((isset($context["me"]) ? $context["me"] : $this->getContext($context, "me")), "notifications", array()) == 1)) {
            echo " checked ";
        }
        echo " ><label for=\"myNotification\">ON</label>
                <input type='radio' id=\"myNotifications\" name=\"myNotifications\" value=\"0\"  ";
        // line 17
        if (($this->getAttribute((isset($context["me"]) ? $context["me"] : $this->getContext($context, "me")), "notifications", array()) == 0)) {
            echo " checked ";
        }
        echo "><label for=\"myNotifications\">OFF</label><br>

                                   <input type=\"submit\" value=\"";
        // line 19
        echo $this->env->getExtension('translator')->getTranslator()->trans("Modify", array(), "messages");
        echo "\" name=\"update\">
<!-- SI NO SOY YO, PUEDO BORRAR EL USUARIO YA QUE SOY ADMIN -->
";
        // line 22
        echo "                                   <input type=\"submit\" value=\"";
        echo $this->env->getExtension('translator')->getTranslator()->trans("DELETE", array(), "messages");
        echo "\" name=\"delete\">
";
        // line 24
        echo "
                                   <input type=\"text\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["me"]) ? $context["me"] : $this->getContext($context, "me")), "login", array()), "html", null, true);
        echo "\" name=\"myLogin\" readonly>
                                   <input type=\"hidden\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["me"]) ? $context["me"] : $this->getContext($context, "me")), "id", array()), "html", null, true);
        echo "\" name=\"id\">
 </form>



";
        
        $__internal_a4212a0c37da61a9d676ab2adde647514889556a42af6199de52e43067e95a38->leave($__internal_a4212a0c37da61a9d676ab2adde647514889556a42af6199de52e43067e95a38_prof);

    }

    public function getTemplateName()
    {
        return "@intranet/Default/settings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 26,  124 => 25,  121 => 24,  116 => 22,  111 => 19,  104 => 17,  98 => 16,  94 => 15,  87 => 13,  81 => 12,  75 => 11,  69 => 10,  63 => 9,  59 => 8,  53 => 7,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* */
/*  {% block contenido %}*/
/* CONTENIDO DEL USUARIO line.4*/
/* <form action="{{ path('intranet_cruduser') }}" method="post" style="border: 1px solid;width: 500px;">*/
/*       <label>{% trans %}Name{% endtrans %}</label><input type='text' name="myName" id="myName" value="{{ me.nameU }}"><BR>*/
/*       <label>{% trans %}Surname{% endtrans %}</label><input type='text' id="mySurname" name="mySurname" value="{{ me.surnameU }}"><BR>*/
/*       <label>{% trans %}Language{% endtrans %}</label><br>*/
/*                 <input type='radio' id="myLanguage" name="myLanguage" value="es" {% if me.lang=="es" %} checked {% endif %}><label for="myLanguage">ES</label><BR>*/
/*                 <input type='radio' id="myLanguage" name="myLanguage" value="en" {% if me.lang=="en" %} checked {% endif %}><label for="myLanguage">EN</label><BR>*/
/*                 <input type='radio' id="myLanguage" name="myLanguage" value="fr" {% if me.lang=="fr" %} checked {% endif %}><label for="myLanguage">FR</label><BR>*/
/*                 <input type='radio' id="myLanguage" name="myLanguage" value="de" {% if me.lang=="de" %} checked {% endif %}><label for="myLanguage">DE</label><BR>*/
/*       <label>{% trans %}Photo{% endtrans %}</label><input type='file' id="myPhoto" name="myPhoto"><img src="{{ me.photo }}"><BR>*/
/* */
/*       <label>{% trans %}Notifications{% endtrans %}</label>*/
/*                 <input type='radio' id="myNotifications" name="myNotifications" value="1" {% if me.notifications==1 %} checked {% endif %} ><label for="myNotification">ON</label>*/
/*                 <input type='radio' id="myNotifications" name="myNotifications" value="0"  {% if me.notifications==0 %} checked {% endif %}><label for="myNotifications">OFF</label><br>*/
/* */
/*                                    <input type="submit" value="{% trans %}Modify{% endtrans %}" name="update">*/
/* <!-- SI NO SOY YO, PUEDO BORRAR EL USUARIO YA QUE SOY ADMIN -->*/
/* {# if no soy yo#}*/
/*                                    <input type="submit" value="{% trans %}DELETE{% endtrans %}" name="delete">*/
/* {# endif #}*/
/* */
/*                                    <input type="text" value="{{ me.login }}" name="myLogin" readonly>*/
/*                                    <input type="hidden" value="{{ me.id }}" name="id">*/
/*  </form>*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
