<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_5b96590dfdbcc8935a03edc5a5fa9cb411f6831988d611c181add17fa01b6ec0 extends Twig_Template
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
        $__internal_6d3b4040c181a9d02a9bd1266a9b91812bfa3668bf3126d330f449c29ec173bb = $this->env->getExtension("native_profiler");
        $__internal_6d3b4040c181a9d02a9bd1266a9b91812bfa3668bf3126d330f449c29ec173bb->enter($__internal_6d3b4040c181a9d02a9bd1266a9b91812bfa3668bf3126d330f449c29ec173bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_6d3b4040c181a9d02a9bd1266a9b91812bfa3668bf3126d330f449c29ec173bb->leave($__internal_6d3b4040c181a9d02a9bd1266a9b91812bfa3668bf3126d330f449c29ec173bb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
