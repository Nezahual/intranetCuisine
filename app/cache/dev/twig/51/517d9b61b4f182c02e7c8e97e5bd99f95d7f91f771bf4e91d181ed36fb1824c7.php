<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_30a9e82bd88b66040308218ef6517a27041171750f78476d5b6cd05fd8192648 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_00b7b94d8b03e52bf44f1724701776f55c1276a2c33840f9cb584258e6a7cf4d = $this->env->getExtension("native_profiler");
        $__internal_00b7b94d8b03e52bf44f1724701776f55c1276a2c33840f9cb584258e6a7cf4d->enter($__internal_00b7b94d8b03e52bf44f1724701776f55c1276a2c33840f9cb584258e6a7cf4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00b7b94d8b03e52bf44f1724701776f55c1276a2c33840f9cb584258e6a7cf4d->leave($__internal_00b7b94d8b03e52bf44f1724701776f55c1276a2c33840f9cb584258e6a7cf4d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f208190c138629c99131d381256ffa351ad9e53d9e7f56e6af7d794e077191f4 = $this->env->getExtension("native_profiler");
        $__internal_f208190c138629c99131d381256ffa351ad9e53d9e7f56e6af7d794e077191f4->enter($__internal_f208190c138629c99131d381256ffa351ad9e53d9e7f56e6af7d794e077191f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f208190c138629c99131d381256ffa351ad9e53d9e7f56e6af7d794e077191f4->leave($__internal_f208190c138629c99131d381256ffa351ad9e53d9e7f56e6af7d794e077191f4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fc99b0513ea00c692771f3f59023d260339e2019957d77cd0286c56330598d49 = $this->env->getExtension("native_profiler");
        $__internal_fc99b0513ea00c692771f3f59023d260339e2019957d77cd0286c56330598d49->enter($__internal_fc99b0513ea00c692771f3f59023d260339e2019957d77cd0286c56330598d49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fc99b0513ea00c692771f3f59023d260339e2019957d77cd0286c56330598d49->leave($__internal_fc99b0513ea00c692771f3f59023d260339e2019957d77cd0286c56330598d49_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0a662a8925ce8a2ffe7aba4d31251a23a008b99cded800aa0f26e20fb6aabf47 = $this->env->getExtension("native_profiler");
        $__internal_0a662a8925ce8a2ffe7aba4d31251a23a008b99cded800aa0f26e20fb6aabf47->enter($__internal_0a662a8925ce8a2ffe7aba4d31251a23a008b99cded800aa0f26e20fb6aabf47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0a662a8925ce8a2ffe7aba4d31251a23a008b99cded800aa0f26e20fb6aabf47->leave($__internal_0a662a8925ce8a2ffe7aba4d31251a23a008b99cded800aa0f26e20fb6aabf47_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
