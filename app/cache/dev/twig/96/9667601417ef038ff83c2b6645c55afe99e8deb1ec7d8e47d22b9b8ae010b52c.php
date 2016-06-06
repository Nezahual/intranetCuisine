<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_eec55fec88105f4bd391eb1fb8f6e47aea31fbd99683e49fb121e3f47d00b171 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_8581ae820bdfe7f3c0b73d73b6addd4c092da4b00aaa59ff0b36dafc7967dd5d = $this->env->getExtension("native_profiler");
        $__internal_8581ae820bdfe7f3c0b73d73b6addd4c092da4b00aaa59ff0b36dafc7967dd5d->enter($__internal_8581ae820bdfe7f3c0b73d73b6addd4c092da4b00aaa59ff0b36dafc7967dd5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8581ae820bdfe7f3c0b73d73b6addd4c092da4b00aaa59ff0b36dafc7967dd5d->leave($__internal_8581ae820bdfe7f3c0b73d73b6addd4c092da4b00aaa59ff0b36dafc7967dd5d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_850a3e49bf601bc479e0861b05dadb696d1477fddc5c0ea7eac768e7df8be02f = $this->env->getExtension("native_profiler");
        $__internal_850a3e49bf601bc479e0861b05dadb696d1477fddc5c0ea7eac768e7df8be02f->enter($__internal_850a3e49bf601bc479e0861b05dadb696d1477fddc5c0ea7eac768e7df8be02f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_850a3e49bf601bc479e0861b05dadb696d1477fddc5c0ea7eac768e7df8be02f->leave($__internal_850a3e49bf601bc479e0861b05dadb696d1477fddc5c0ea7eac768e7df8be02f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bcddb85a5e945a2279953255747d437efecf25b2385762fdc06880e093ef8c86 = $this->env->getExtension("native_profiler");
        $__internal_bcddb85a5e945a2279953255747d437efecf25b2385762fdc06880e093ef8c86->enter($__internal_bcddb85a5e945a2279953255747d437efecf25b2385762fdc06880e093ef8c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_bcddb85a5e945a2279953255747d437efecf25b2385762fdc06880e093ef8c86->leave($__internal_bcddb85a5e945a2279953255747d437efecf25b2385762fdc06880e093ef8c86_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f0ef83a1f080deda23239fb4900c07869e4779d06ca8e266e79493d55cd454c0 = $this->env->getExtension("native_profiler");
        $__internal_f0ef83a1f080deda23239fb4900c07869e4779d06ca8e266e79493d55cd454c0->enter($__internal_f0ef83a1f080deda23239fb4900c07869e4779d06ca8e266e79493d55cd454c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_f0ef83a1f080deda23239fb4900c07869e4779d06ca8e266e79493d55cd454c0->leave($__internal_f0ef83a1f080deda23239fb4900c07869e4779d06ca8e266e79493d55cd454c0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
