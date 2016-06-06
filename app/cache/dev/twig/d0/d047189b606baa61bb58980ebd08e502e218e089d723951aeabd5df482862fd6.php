<?php

/* ::menu.html.twig */
class __TwigTemplate_053e9048a736fd87a32488179df720709adab482617d0d83158573d8ec40f5b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0fec85d8d99b57fefb6383bcbd5cd8ed5b93a8f341a504f359092aa29a218600 = $this->env->getExtension("native_profiler");
        $__internal_0fec85d8d99b57fefb6383bcbd5cd8ed5b93a8f341a504f359092aa29a218600->enter($__internal_0fec85d8d99b57fefb6383bcbd5cd8ed5b93a8f341a504f359092aa29a218600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::menu.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('menu', $context, $blocks);
        
        $__internal_0fec85d8d99b57fefb6383bcbd5cd8ed5b93a8f341a504f359092aa29a218600->leave($__internal_0fec85d8d99b57fefb6383bcbd5cd8ed5b93a8f341a504f359092aa29a218600_prof);

    }

    public function block_menu($context, array $blocks = array())
    {
        $__internal_f402cd2fe6a1a445037546c04c33c84636ba00524adabdada3e31b6cdbedc1a5 = $this->env->getExtension("native_profiler");
        $__internal_f402cd2fe6a1a445037546c04c33c84636ba00524adabdada3e31b6cdbedc1a5->enter($__internal_f402cd2fe6a1a445037546c04c33c84636ba00524adabdada3e31b6cdbedc1a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 4
        echo "
  <nav class=\"navbar navbar-inverse\">
  <div class=\"container-fluid\">
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("intranet_homepage");
        echo "\">WebCuisine</a>
    </div>
    <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
      <ul class=\"nav navbar-nav\">
        <li class=\"dropdown\">
          <a class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
        // line 18
        echo $this->env->getExtension('translator')->getTranslator()->trans("Forms", array(), "messages");
        echo "<span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu\">
          <li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("intranet_formHistorical");
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("My Historical", array(), "messages");
        echo "</a></li>
            <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("intranet_formHours");
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Overtime Hours", array(), "messages");
        echo "</a></li>
            <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("intranet_formVacations");
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Vacation", array(), "messages");
        echo "</a></li>
            <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("intranet_formExpenses");
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Expenses", array(), "messages");
        echo "</a></li>
            <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("intranet_formRequest");
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Request Business Trip", array(), "messages");
        echo "</a></li>
          </ul>
        </li>
        <!-- BOOKING ROOM PART
            <li><a href=\"";
        // line 28
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Book a room", array(), "messages");
        echo "</a></li>
        -->
      ";
        // line 30
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "onboard", array()) == 1)) {
            // line 31
            echo "              <li><a href='";
            echo $this->env->getExtension('routing')->getPath("intranet_tasks");
            echo "'>";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Task", array(), "messages");
            echo "-<i> internships</i></a></li>\"
      ";
        }
        // line 33
        echo "      ";
        if (((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == "administrator")) {
            // line 34
            echo "              <li><a href='";
            echo $this->env->getExtension('routing')->getPath("intranet_userManagement");
            echo "'>";
            echo $this->env->getExtension('translator')->getTranslator()->trans("User Management", array(), "messages");
            echo "-<i> admins</i></a></li>
      ";
        }
        // line 36
        echo "      ";
        if (((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == "buo")) {
            // line 37
            echo "              <li><a href='";
            echo $this->env->getExtension('routing')->getPath("intranet_news");
            echo "'";
            echo $this->env->getExtension('translator')->getTranslator()->trans(">News Feed", array(), "messages");
            echo "-<i> BÜOs</i></a></li>
              <li><a href='";
            // line 38
            echo $this->env->getExtension('routing')->getPath("intranet_channels");
            echo "'";
            echo $this->env->getExtension('translator')->getTranslator()->trans(">Channels", array(), "messages");
            echo "-<i> BÜOs</i></a></li>
      ";
        }
        // line 40
        echo "      ";
        if (((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == "buo")) {
            // line 41
            echo "          <li class=\"dropdown\">
            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
            // line 42
            echo $this->env->getExtension('translator')->getTranslator()->trans("Form Management", array(), "messages");
            echo "-<i> BÜOs</i><span class=\"caret\"></span></a>
            <ul class=\"dropdown-menu\">
              <li><a href='";
            // line 44
            echo $this->env->getExtension('routing')->getPath("intranet_incomingForms");
            echo "'>";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Incoming Forms", array(), "messages");
            echo "</a></li>
              <li><a href=\"";
            // line 45
            echo $this->env->getExtension('routing')->getPath("intranet_oldForms");
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Old Forms", array(), "messages");
            echo "</a></li>
            </ul>
          </li>";
        }
        // line 48
        echo "      </ul>
      <ul class=\"nav navbar-nav navbar-right\">
      <li><a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("intranet_testBD");
        echo "\"><b>";
        echo $this->env->getExtension('translator')->getTranslator()->trans("TEST PAGE", array(), "messages");
        echo "</b></a></li>
        <li><a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("intranet_translation");
        echo "\"><b>";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Lang", array(), "messages");
        echo "</b></a></li>
        <li><a href=\"#\"><b>";
        // line 52
        echo $this->env->getExtension('translator')->getTranslator()->trans("Hello", array(), "messages");
        echo " <?php echo \$_SESSION[\"usuario\"]; ?></b></a></li>
        <li><a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("intranet_settings");
        echo "\"><span class=\"glyphicon glyphicon-user\"></span> ";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Settings", array(), "messages");
        echo "</a></li>
        <li><a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("intranet_logout");
        echo "\"><span class=\"glyphicon glyphicon-log-in\"></span> Log out</a></li>
      </ul>
    </div>
  </div>
  </nav>
  ";
        
        $__internal_f402cd2fe6a1a445037546c04c33c84636ba00524adabdada3e31b6cdbedc1a5->leave($__internal_f402cd2fe6a1a445037546c04c33c84636ba00524adabdada3e31b6cdbedc1a5_prof);

    }

    public function getTemplateName()
    {
        return "::menu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  190 => 54,  184 => 53,  180 => 52,  174 => 51,  168 => 50,  164 => 48,  156 => 45,  150 => 44,  145 => 42,  142 => 41,  139 => 40,  132 => 38,  125 => 37,  122 => 36,  114 => 34,  111 => 33,  103 => 31,  101 => 30,  95 => 28,  86 => 24,  80 => 23,  74 => 22,  68 => 21,  62 => 20,  57 => 18,  49 => 13,  38 => 4,  26 => 3,  23 => 2,);
    }
}
/* {# {% extends '::base.html.twig' %} #}*/
/* */
/* {% block menu %}*/
/* */
/*   <nav class="navbar navbar-inverse">*/
/*   <div class="container-fluid">*/
/*     <div class="navbar-header">*/
/*       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*       </button>*/
/*       <a class="navbar-brand" href="{{ path('intranet_homepage')}}">WebCuisine</a>*/
/*     </div>*/
/*     <div class="collapse navbar-collapse" id="myNavbar">*/
/*       <ul class="nav navbar-nav">*/
/*         <li class="dropdown">*/
/*           <a class="dropdown-toggle" data-toggle="dropdown">{% trans %}Forms {% endtrans %}<span class="caret"></span></a>*/
/*           <ul class="dropdown-menu">*/
/*           <li><a href="{{ path('intranet_formHistorical')}}">{% trans %}My Historical{% endtrans %}</a></li>*/
/*             <li><a href="{{ path('intranet_formHours')}}">{% trans %}Overtime Hours{% endtrans %}</a></li>*/
/*             <li><a href="{{ path('intranet_formVacations')}}">{% trans %}Vacation{% endtrans %}</a></li>*/
/*             <li><a href="{{ path('intranet_formExpenses')}}">{% trans %}Expenses{% endtrans %}</a></li>*/
/*             <li><a href="{{ path('intranet_formRequest')}}">{% trans %}Request Business Trip{% endtrans %}</a></li>*/
/*           </ul>*/
/*         </li>*/
/*         <!-- BOOKING ROOM PART*/
/*             <li><a href="{# path('intranet_bookRoom')#}">{% trans %}Book a room{% endtrans %}</a></li>*/
/*         -->*/
/*       {% if user.onboard==1 %}*/
/*               <li><a href='{{ path('intranet_tasks')}}'>{% trans %}Task {% endtrans %}-<i> internships</i></a></li>"*/
/*       {% endif %}*/
/*       {% if role=="administrator"%}*/
/*               <li><a href='{{ path('intranet_userManagement')}}'>{% trans %}User Management {% endtrans %}-<i> admins</i></a></li>*/
/*       {% endif %}*/
/*       {% if role=="buo"%}*/
/*               <li><a href='{{ path('intranet_news')}}'{% trans %}>News Feed {% endtrans %}-<i> BÜOs</i></a></li>*/
/*               <li><a href='{{ path('intranet_channels')}}'{% trans %}>Channels {% endtrans %}-<i> BÜOs</i></a></li>*/
/*       {% endif %}*/
/*       {% if role=="buo"%}*/
/*           <li class="dropdown">*/
/*             <a class="dropdown-toggle" data-toggle="dropdown">{% trans %}Form Management {% endtrans %}-<i> BÜOs</i><span class="caret"></span></a>*/
/*             <ul class="dropdown-menu">*/
/*               <li><a href='{{ path('intranet_incomingForms')}}'>{% trans %}Incoming Forms{% endtrans %}</a></li>*/
/*               <li><a href="{{ path('intranet_oldForms')}}">{% trans %}Old Forms{% endtrans %}</a></li>*/
/*             </ul>*/
/*           </li>{% endif %}*/
/*       </ul>*/
/*       <ul class="nav navbar-nav navbar-right">*/
/*       <li><a href="{{ path('intranet_testBD')}}"><b>{% trans %}TEST PAGE{% endtrans %}</b></a></li>*/
/*         <li><a href="{{ path('intranet_translation')}}"><b>{% trans %}Lang{% endtrans %}</b></a></li>*/
/*         <li><a href="#"><b>{% trans %}Hello{% endtrans %} <?php echo $_SESSION["usuario"]; ?></b></a></li>*/
/*         <li><a href="{{ path('intranet_settings')}}"><span class="glyphicon glyphicon-user"></span> {% trans %}Settings{% endtrans %}</a></li>*/
/*         <li><a href="{{ path('intranet_logout')}}"><span class="glyphicon glyphicon-log-in"></span> Log out</a></li>*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   </nav>*/
/*   {% endblock %}*/
/* */
