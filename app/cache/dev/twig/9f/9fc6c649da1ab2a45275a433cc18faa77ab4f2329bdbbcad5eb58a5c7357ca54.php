<?php

/* @intranet/layout.html.twig */
class __TwigTemplate_17359a17507abaa82a0556c740b04c335e08e38ac0d167c00b7fc0bafd18326c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@intranet/layout.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'cabecera' => array($this, 'block_cabecera'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c0516e697d773995ef2f03bde9cfc14632f4d613daf65c2450025844743af745 = $this->env->getExtension("native_profiler");
        $__internal_c0516e697d773995ef2f03bde9cfc14632f4d613daf65c2450025844743af745->enter($__internal_c0516e697d773995ef2f03bde9cfc14632f4d613daf65c2450025844743af745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@intranet/layout.html.twig"));

        // line 2
        $context["__internal_f3b587aed6a938762479a342e14cbb75a686f16d004e7ddcc33c85d8cbdf9f61"] = $this->loadTemplate("intranetBundle::macroMenu.html.twig", "@intranet/layout.html.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0516e697d773995ef2f03bde9cfc14632f4d613daf65c2450025844743af745->leave($__internal_c0516e697d773995ef2f03bde9cfc14632f4d613daf65c2450025844743af745_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e0c6720b6ffb809fffd96a799f0e2125e38d4905fef9b993d95b989e82d319a9 = $this->env->getExtension("native_profiler");
        $__internal_e0c6720b6ffb809fffd96a799f0e2125e38d4905fef9b993d95b989e82d319a9->enter($__internal_e0c6720b6ffb809fffd96a799f0e2125e38d4905fef9b993d95b989e82d319a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "<!-- ESTA CARPETA NO ESTÁ CREADA AÚN -->
 <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/alimentos/estilo.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
  <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js\"></script>
  <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
<meta charset=\"UTF-8\">
";
        
        $__internal_e0c6720b6ffb809fffd96a799f0e2125e38d4905fef9b993d95b989e82d319a9->leave($__internal_e0c6720b6ffb809fffd96a799f0e2125e38d4905fef9b993d95b989e82d319a9_prof);

    }

    // line 14
    public function block_cabecera($context, array $blocks = array())
    {
        $__internal_622e76250893b37abfa4f989d9b51c2853eb3fc77b007e0fef74e41bfb3aa29c = $this->env->getExtension("native_profiler");
        $__internal_622e76250893b37abfa4f989d9b51c2853eb3fc77b007e0fef74e41bfb3aa29c->enter($__internal_622e76250893b37abfa4f989d9b51c2853eb3fc77b007e0fef74e41bfb3aa29c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cabecera"));

        // line 15
        echo "    <div id=\"cabecera\">
      <h1>Here will be the image</h1>
    </div>
";
        
        $__internal_622e76250893b37abfa4f989d9b51c2853eb3fc77b007e0fef74e41bfb3aa29c->leave($__internal_622e76250893b37abfa4f989d9b51c2853eb3fc77b007e0fef74e41bfb3aa29c_prof);

    }

    // line 20
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f709df865f34bff1c51b0b2aa38dfaf696d4ce8b94ec2a5d36d25ef77a867280 = $this->env->getExtension("native_profiler");
        $__internal_f709df865f34bff1c51b0b2aa38dfaf696d4ce8b94ec2a5d36d25ef77a867280->enter($__internal_f709df865f34bff1c51b0b2aa38dfaf696d4ce8b94ec2a5d36d25ef77a867280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 21
        echo "  ";
        // line 22
        echo "  ";
        // line 23
        echo "  ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("intranetBundle:Menu:menu"));
        echo "
";
        
        $__internal_f709df865f34bff1c51b0b2aa38dfaf696d4ce8b94ec2a5d36d25ef77a867280->leave($__internal_f709df865f34bff1c51b0b2aa38dfaf696d4ce8b94ec2a5d36d25ef77a867280_prof);

    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        $__internal_892d4b3458fefc057e63ad0de64afde641e5134c6c88f69fd7ffdb58f9eafa33 = $this->env->getExtension("native_profiler");
        $__internal_892d4b3458fefc057e63ad0de64afde641e5134c6c88f69fd7ffdb58f9eafa33->enter($__internal_892d4b3458fefc057e63ad0de64afde641e5134c6c88f69fd7ffdb58f9eafa33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 28
        echo "    <div id=\"contenido\">
        ";
        // line 29
        $this->displayBlock('contenido', $context, $blocks);
        // line 31
        echo "    </div>

    <div id=\"pie\">
        <hr/>
        <div align=\"center\">- pie de página -</div>
    </div>
";
        
        $__internal_892d4b3458fefc057e63ad0de64afde641e5134c6c88f69fd7ffdb58f9eafa33->leave($__internal_892d4b3458fefc057e63ad0de64afde641e5134c6c88f69fd7ffdb58f9eafa33_prof);

    }

    // line 29
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_948412020902dbd8bc957ceb0932ad14d99bff60bd5b730fdd08738b0d592049 = $this->env->getExtension("native_profiler");
        $__internal_948412020902dbd8bc957ceb0932ad14d99bff60bd5b730fdd08738b0d592049->enter($__internal_948412020902dbd8bc957ceb0932ad14d99bff60bd5b730fdd08738b0d592049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 30
        echo "        ";
        
        $__internal_948412020902dbd8bc957ceb0932ad14d99bff60bd5b730fdd08738b0d592049->leave($__internal_948412020902dbd8bc957ceb0932ad14d99bff60bd5b730fdd08738b0d592049_prof);

    }

    public function getTemplateName()
    {
        return "@intranet/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 30,  123 => 29,  110 => 31,  108 => 29,  105 => 28,  99 => 27,  89 => 23,  87 => 22,  85 => 21,  79 => 20,  69 => 15,  63 => 14,  50 => 6,  47 => 5,  41 => 4,  34 => 1,  32 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% from 'intranetBundle::macroMenu.html.twig' import uROL %}*/
/* */
/* {% block stylesheets %}*/
/* <!-- ESTA CARPETA NO ESTÁ CREADA AÚN -->*/
/*  <link href="{{ asset('bundles/alimentos/estilo.css') }}" type="text/css" rel="stylesheet" />*/
/*   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">*/
/*   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>*/
/*   <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>*/
/* <meta charset="UTF-8">*/
/* {% endblock %}*/
/* */
/* */
/* {% block cabecera %}*/
/*     <div id="cabecera">*/
/*       <h1>Here will be the image</h1>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*   {#{% include '::menu.html.twig' %}#}*/
/*   {# {{ uROL('buo') }} #}*/
/*   {{ render(controller('intranetBundle:Menu:menu')) }}*/
/* {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/*     <div id="contenido">*/
/*         {% block contenido %}*/
/*         {% endblock %}*/
/*     </div>*/
/* */
/*     <div id="pie">*/
/*         <hr/>*/
/*         <div align="center">- pie de página -</div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
