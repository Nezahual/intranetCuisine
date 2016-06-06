<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_75fc976e5906c9179154044136b9f14d37a7670c3656e273171dbf34802e2963 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a5493bc443a8f49170fdc9cd9e8f9e6dce1342e67621d68a02cbc16c753e3ac0 = $this->env->getExtension("native_profiler");
        $__internal_a5493bc443a8f49170fdc9cd9e8f9e6dce1342e67621d68a02cbc16c753e3ac0->enter($__internal_a5493bc443a8f49170fdc9cd9e8f9e6dce1342e67621d68a02cbc16c753e3ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5493bc443a8f49170fdc9cd9e8f9e6dce1342e67621d68a02cbc16c753e3ac0->leave($__internal_a5493bc443a8f49170fdc9cd9e8f9e6dce1342e67621d68a02cbc16c753e3ac0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5b72b004e7f790046e02199dad29b5d2ecb5318e22a68a921452b6219620b18f = $this->env->getExtension("native_profiler");
        $__internal_5b72b004e7f790046e02199dad29b5d2ecb5318e22a68a921452b6219620b18f->enter($__internal_5b72b004e7f790046e02199dad29b5d2ecb5318e22a68a921452b6219620b18f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5b72b004e7f790046e02199dad29b5d2ecb5318e22a68a921452b6219620b18f->leave($__internal_5b72b004e7f790046e02199dad29b5d2ecb5318e22a68a921452b6219620b18f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d83ddd055d8d23a6ca903e6c9e550c3ef605a8f87c175fa292024b19e2311b8e = $this->env->getExtension("native_profiler");
        $__internal_d83ddd055d8d23a6ca903e6c9e550c3ef605a8f87c175fa292024b19e2311b8e->enter($__internal_d83ddd055d8d23a6ca903e6c9e550c3ef605a8f87c175fa292024b19e2311b8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d83ddd055d8d23a6ca903e6c9e550c3ef605a8f87c175fa292024b19e2311b8e->leave($__internal_d83ddd055d8d23a6ca903e6c9e550c3ef605a8f87c175fa292024b19e2311b8e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9b86ccac665d3754280b27cafedf6d78254f41d3e0403ad14284b91ef57b9180 = $this->env->getExtension("native_profiler");
        $__internal_9b86ccac665d3754280b27cafedf6d78254f41d3e0403ad14284b91ef57b9180->enter($__internal_9b86ccac665d3754280b27cafedf6d78254f41d3e0403ad14284b91ef57b9180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9b86ccac665d3754280b27cafedf6d78254f41d3e0403ad14284b91ef57b9180->leave($__internal_9b86ccac665d3754280b27cafedf6d78254f41d3e0403ad14284b91ef57b9180_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
