<?php

/* intranetBundle:Default:createNewChannel.html.twig */
class __TwigTemplate_62cc4982ffa8afcf282ea36bf1d57efeb6249b78cb829147382c7cf34c068d75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "intranetBundle:Default:createNewChannel.html.twig", 1);
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
        $__internal_7a48e7a2f357cda8e83861dd9dd4cf73eb03df781a56f2beb9c3af03c17af5f3 = $this->env->getExtension("native_profiler");
        $__internal_7a48e7a2f357cda8e83861dd9dd4cf73eb03df781a56f2beb9c3af03c17af5f3->enter($__internal_7a48e7a2f357cda8e83861dd9dd4cf73eb03df781a56f2beb9c3af03c17af5f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:createNewChannel.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a48e7a2f357cda8e83861dd9dd4cf73eb03df781a56f2beb9c3af03c17af5f3->leave($__internal_7a48e7a2f357cda8e83861dd9dd4cf73eb03df781a56f2beb9c3af03c17af5f3_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_d36d108071140282dc783b59aaa3da27058cab757669a40a20285e7d217fad7c = $this->env->getExtension("native_profiler");
        $__internal_d36d108071140282dc783b59aaa3da27058cab757669a40a20285e7d217fad7c->enter($__internal_d36d108071140282dc783b59aaa3da27058cab757669a40a20285e7d217fad7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<h3>CREATE A NEW New</h3><br>
 <form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("intranet_insertChannel");
        echo "\" method=\"post\" style=\"border: 1px solid;width: 500px;\">
        <label>";
        // line 6
        echo $this->env->getExtension('translator')->getTranslator()->trans("Name", array(), "messages");
        // line 7
        echo ":</label><input type=\"text\" name=\"name\" style=\"margin-left: 40px;\"><br>

        <i>
        ";
        // line 10
        echo $this->env->getExtension('translator')->getTranslator()->trans("message_1", array(), "messages");
        // line 12
        echo "        </i>
        <hr>

        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 16
            echo "            <input type=\"checkbox\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "login", array()), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "login", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "login", array()), "html", null, true);
            echo "<br>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
                                    <input type=\"submit\" value=\"";
        // line 19
        echo $this->env->getExtension('translator')->getTranslator()->trans("create_channel", array(), "messages");
        echo "\">
   </form>

";
        
        $__internal_d36d108071140282dc783b59aaa3da27058cab757669a40a20285e7d217fad7c->leave($__internal_d36d108071140282dc783b59aaa3da27058cab757669a40a20285e7d217fad7c_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle:Default:createNewChannel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 19,  78 => 18,  65 => 16,  61 => 15,  56 => 12,  54 => 10,  49 => 7,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* */
/*  {% block contenido %}*/
/* <h3>CREATE A NEW New</h3><br>*/
/*  <form action="{{path('intranet_insertChannel')}}" method="post" style="border: 1px solid;width: 500px;">*/
/*         <label>{% trans %}Name*/
/*         {% endtrans %}:</label><input type="text" name="name" style="margin-left: 40px;"><br>*/
/* */
/*         <i>*/
/*         {% trans %}message_1*/
/*         {% endtrans %}*/
/*         </i>*/
/*         <hr>*/
/* */
/*         {% for u in users %}*/
/*             <input type="checkbox" value="{{u.login}}" name="{{u.login}}"> {{u.login}}<br>*/
/*         {% endfor %}*/
/* */
/*                                     <input type="submit" value="{% trans %}create_channel{% endtrans %}">*/
/*    </form>*/
/* */
/* {% endblock %}*/
/* */
