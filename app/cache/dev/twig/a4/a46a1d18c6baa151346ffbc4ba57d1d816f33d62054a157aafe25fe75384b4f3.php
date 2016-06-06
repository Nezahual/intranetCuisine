<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_efa9c03736b7d2051c0b9e6b6012d51a0dc14cb0a02f50a65bcef2ef77109131 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_a42f22564ebdea4b2c630badd0b777c85b7eb84e3795f7da65b58fa1cbff73d6 = $this->env->getExtension("native_profiler");
        $__internal_a42f22564ebdea4b2c630badd0b777c85b7eb84e3795f7da65b58fa1cbff73d6->enter($__internal_a42f22564ebdea4b2c630badd0b777c85b7eb84e3795f7da65b58fa1cbff73d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a42f22564ebdea4b2c630badd0b777c85b7eb84e3795f7da65b58fa1cbff73d6->leave($__internal_a42f22564ebdea4b2c630badd0b777c85b7eb84e3795f7da65b58fa1cbff73d6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_61e6b31ec712cb38eefb5d100e15d4af6da68b727659a5c32b150707e21ca4c7 = $this->env->getExtension("native_profiler");
        $__internal_61e6b31ec712cb38eefb5d100e15d4af6da68b727659a5c32b150707e21ca4c7->enter($__internal_61e6b31ec712cb38eefb5d100e15d4af6da68b727659a5c32b150707e21ca4c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_61e6b31ec712cb38eefb5d100e15d4af6da68b727659a5c32b150707e21ca4c7->leave($__internal_61e6b31ec712cb38eefb5d100e15d4af6da68b727659a5c32b150707e21ca4c7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_883b6fb4fa09f6c49830f0b7f608194161f6386cf00f2b7818250f6c422b8d1f = $this->env->getExtension("native_profiler");
        $__internal_883b6fb4fa09f6c49830f0b7f608194161f6386cf00f2b7818250f6c422b8d1f->enter($__internal_883b6fb4fa09f6c49830f0b7f608194161f6386cf00f2b7818250f6c422b8d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_883b6fb4fa09f6c49830f0b7f608194161f6386cf00f2b7818250f6c422b8d1f->leave($__internal_883b6fb4fa09f6c49830f0b7f608194161f6386cf00f2b7818250f6c422b8d1f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_fcdfb1a8910f4fce70629406bbaea1ceba429dbfb59e35f65277a48b605e3595 = $this->env->getExtension("native_profiler");
        $__internal_fcdfb1a8910f4fce70629406bbaea1ceba429dbfb59e35f65277a48b605e3595->enter($__internal_fcdfb1a8910f4fce70629406bbaea1ceba429dbfb59e35f65277a48b605e3595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_fcdfb1a8910f4fce70629406bbaea1ceba429dbfb59e35f65277a48b605e3595->leave($__internal_fcdfb1a8910f4fce70629406bbaea1ceba429dbfb59e35f65277a48b605e3595_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
