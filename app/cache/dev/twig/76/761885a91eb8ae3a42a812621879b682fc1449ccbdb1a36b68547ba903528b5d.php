<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_ba2d0ffa0fa9d76130a440598d35460eedbd44d3e6a3a6c36ad67210e88d917d extends Twig_Template
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
        $__internal_c4f339ac056d32d29ade72eab66d09c5e22f4cb8c93e41aa0bdc9ff2f822715b = $this->env->getExtension("native_profiler");
        $__internal_c4f339ac056d32d29ade72eab66d09c5e22f4cb8c93e41aa0bdc9ff2f822715b->enter($__internal_c4f339ac056d32d29ade72eab66d09c5e22f4cb8c93e41aa0bdc9ff2f822715b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

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
        
        $__internal_c4f339ac056d32d29ade72eab66d09c5e22f4cb8c93e41aa0bdc9ff2f822715b->leave($__internal_c4f339ac056d32d29ade72eab66d09c5e22f4cb8c93e41aa0bdc9ff2f822715b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
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
