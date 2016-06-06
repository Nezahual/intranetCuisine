<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_2be2110f150f5abcb9d771cd8c23f7d5d1562a6c1df19cb9a2b711d24e5ae9c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3338759149ee8b8b3f9825b1fc8b1b00ebed2f155ad13b4cea2c707bd37a3a80 = $this->env->getExtension("native_profiler");
        $__internal_3338759149ee8b8b3f9825b1fc8b1b00ebed2f155ad13b4cea2c707bd37a3a80->enter($__internal_3338759149ee8b8b3f9825b1fc8b1b00ebed2f155ad13b4cea2c707bd37a3a80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_3338759149ee8b8b3f9825b1fc8b1b00ebed2f155ad13b4cea2c707bd37a3a80->leave($__internal_3338759149ee8b8b3f9825b1fc8b1b00ebed2f155ad13b4cea2c707bd37a3a80_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a19fdff57366271736ed48b1e713a5fddc893197591d66f998087056bf6c922b = $this->env->getExtension("native_profiler");
        $__internal_a19fdff57366271736ed48b1e713a5fddc893197591d66f998087056bf6c922b->enter($__internal_a19fdff57366271736ed48b1e713a5fddc893197591d66f998087056bf6c922b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a19fdff57366271736ed48b1e713a5fddc893197591d66f998087056bf6c922b->leave($__internal_a19fdff57366271736ed48b1e713a5fddc893197591d66f998087056bf6c922b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
