<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_a279df575536630b9237110558c52cc73d18bbc749d30f52f43b3eec121dc801 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a809db014c98715a86f9d116b18cfcc95124b71398499abf57f309ce622d1bd = $this->env->getExtension("native_profiler");
        $__internal_6a809db014c98715a86f9d116b18cfcc95124b71398499abf57f309ce622d1bd->enter($__internal_6a809db014c98715a86f9d116b18cfcc95124b71398499abf57f309ce622d1bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a809db014c98715a86f9d116b18cfcc95124b71398499abf57f309ce622d1bd->leave($__internal_6a809db014c98715a86f9d116b18cfcc95124b71398499abf57f309ce622d1bd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_af9d9ad60e593b2b880c6856ed84fc275d42d97b19fbdf065107edc560791b49 = $this->env->getExtension("native_profiler");
        $__internal_af9d9ad60e593b2b880c6856ed84fc275d42d97b19fbdf065107edc560791b49->enter($__internal_af9d9ad60e593b2b880c6856ed84fc275d42d97b19fbdf065107edc560791b49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_af9d9ad60e593b2b880c6856ed84fc275d42d97b19fbdf065107edc560791b49->leave($__internal_af9d9ad60e593b2b880c6856ed84fc275d42d97b19fbdf065107edc560791b49_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d44c5c4683e77f6b75c5a1bfe3b89d8615a671a618d10905760aa1291fe3358 = $this->env->getExtension("native_profiler");
        $__internal_3d44c5c4683e77f6b75c5a1bfe3b89d8615a671a618d10905760aa1291fe3358->enter($__internal_3d44c5c4683e77f6b75c5a1bfe3b89d8615a671a618d10905760aa1291fe3358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_3d44c5c4683e77f6b75c5a1bfe3b89d8615a671a618d10905760aa1291fe3358->leave($__internal_3d44c5c4683e77f6b75c5a1bfe3b89d8615a671a618d10905760aa1291fe3358_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
