<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_14201ef9cf9484c7086bd34195165c284c5c728178ec59bd36c1a5c75af8b6a1 extends Twig_Template
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
        $__internal_2389f043fa5325254d2681faeb0ad7bb9b7da86cc488abb86f10abbd38c4f5a0 = $this->env->getExtension("native_profiler");
        $__internal_2389f043fa5325254d2681faeb0ad7bb9b7da86cc488abb86f10abbd38c4f5a0->enter($__internal_2389f043fa5325254d2681faeb0ad7bb9b7da86cc488abb86f10abbd38c4f5a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_2389f043fa5325254d2681faeb0ad7bb9b7da86cc488abb86f10abbd38c4f5a0->leave($__internal_2389f043fa5325254d2681faeb0ad7bb9b7da86cc488abb86f10abbd38c4f5a0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
