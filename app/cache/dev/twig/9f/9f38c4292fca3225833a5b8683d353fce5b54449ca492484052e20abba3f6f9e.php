<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_4f71c9b73bef6a356cb7605f976bd17765d4c3a46845ac90fdf15f4d24031148 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_64642b1d1053f50eb11926bd56aa74ecc88d999ee9c93475daf0d84be8a746e5 = $this->env->getExtension("native_profiler");
        $__internal_64642b1d1053f50eb11926bd56aa74ecc88d999ee9c93475daf0d84be8a746e5->enter($__internal_64642b1d1053f50eb11926bd56aa74ecc88d999ee9c93475daf0d84be8a746e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64642b1d1053f50eb11926bd56aa74ecc88d999ee9c93475daf0d84be8a746e5->leave($__internal_64642b1d1053f50eb11926bd56aa74ecc88d999ee9c93475daf0d84be8a746e5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e4b520759fb2ee49a2fdcdd25c1750f50bdae594fdd4e64afe6d6bbd6baec0e3 = $this->env->getExtension("native_profiler");
        $__internal_e4b520759fb2ee49a2fdcdd25c1750f50bdae594fdd4e64afe6d6bbd6baec0e3->enter($__internal_e4b520759fb2ee49a2fdcdd25c1750f50bdae594fdd4e64afe6d6bbd6baec0e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_e4b520759fb2ee49a2fdcdd25c1750f50bdae594fdd4e64afe6d6bbd6baec0e3->leave($__internal_e4b520759fb2ee49a2fdcdd25c1750f50bdae594fdd4e64afe6d6bbd6baec0e3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_470059db72b669a4cf42df050460cabcef158f00d961b297d91db0a24c694aba = $this->env->getExtension("native_profiler");
        $__internal_470059db72b669a4cf42df050460cabcef158f00d961b297d91db0a24c694aba->enter($__internal_470059db72b669a4cf42df050460cabcef158f00d961b297d91db0a24c694aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_470059db72b669a4cf42df050460cabcef158f00d961b297d91db0a24c694aba->leave($__internal_470059db72b669a4cf42df050460cabcef158f00d961b297d91db0a24c694aba_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
