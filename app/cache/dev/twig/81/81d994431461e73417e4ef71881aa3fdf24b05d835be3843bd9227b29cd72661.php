<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_28322bf3d1a3ebcdd87c19ceb2d3225d78ea7906a8344acdc709c419c92804be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_883a42824af4bf405f5f78bf66542d79905f10a1fed04ff4aa088fe26a4ad21f = $this->env->getExtension("native_profiler");
        $__internal_883a42824af4bf405f5f78bf66542d79905f10a1fed04ff4aa088fe26a4ad21f->enter($__internal_883a42824af4bf405f5f78bf66542d79905f10a1fed04ff4aa088fe26a4ad21f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_883a42824af4bf405f5f78bf66542d79905f10a1fed04ff4aa088fe26a4ad21f->leave($__internal_883a42824af4bf405f5f78bf66542d79905f10a1fed04ff4aa088fe26a4ad21f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
