<?php

/* intranetBundle::layout2.html.twig */
class __TwigTemplate_469e10cd7692389a6036cc40ad94cdbd4f9d78d47787b9bd367f3cdab7daf3fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "intranetBundle::layout2.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'cabecera' => array($this, 'block_cabecera'),
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
        $__internal_82645edfb860c3b84e964af9b594b4e840049064779feabecdde6405ad0850d3 = $this->env->getExtension("native_profiler");
        $__internal_82645edfb860c3b84e964af9b594b4e840049064779feabecdde6405ad0850d3->enter($__internal_82645edfb860c3b84e964af9b594b4e840049064779feabecdde6405ad0850d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle::layout2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82645edfb860c3b84e964af9b594b4e840049064779feabecdde6405ad0850d3->leave($__internal_82645edfb860c3b84e964af9b594b4e840049064779feabecdde6405ad0850d3_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1e31f689da509055551266d7485774b753e593637acb9dee4be354f3ef06abeb = $this->env->getExtension("native_profiler");
        $__internal_1e31f689da509055551266d7485774b753e593637acb9dee4be354f3ef06abeb->enter($__internal_1e31f689da509055551266d7485774b753e593637acb9dee4be354f3ef06abeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo " <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/alimentos/estilo.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
  <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js\"></script>
  <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
<meta charset=\"UTF-8\">
";
        
        $__internal_1e31f689da509055551266d7485774b753e593637acb9dee4be354f3ef06abeb->leave($__internal_1e31f689da509055551266d7485774b753e593637acb9dee4be354f3ef06abeb_prof);

    }

    // line 11
    public function block_cabecera($context, array $blocks = array())
    {
        $__internal_ecdd6be1493ce50f013c1fb894fc01b6ecd6da4bf55e87159d4fc71712cab281 = $this->env->getExtension("native_profiler");
        $__internal_ecdd6be1493ce50f013c1fb894fc01b6ecd6da4bf55e87159d4fc71712cab281->enter($__internal_ecdd6be1493ce50f013c1fb894fc01b6ecd6da4bf55e87159d4fc71712cab281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cabecera"));

        // line 12
        echo "    <div id=\"cabecera\">
    </div>
";
        
        $__internal_ecdd6be1493ce50f013c1fb894fc01b6ecd6da4bf55e87159d4fc71712cab281->leave($__internal_ecdd6be1493ce50f013c1fb894fc01b6ecd6da4bf55e87159d4fc71712cab281_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b225a3eb4abd3a0dc94f2002680639cd7f51f75bb1ff1abb39dee3f02a98b55 = $this->env->getExtension("native_profiler");
        $__internal_3b225a3eb4abd3a0dc94f2002680639cd7f51f75bb1ff1abb39dee3f02a98b55->enter($__internal_3b225a3eb4abd3a0dc94f2002680639cd7f51f75bb1ff1abb39dee3f02a98b55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "    <div id=\"contenido\">
        ";
        // line 18
        $this->displayBlock('contenido', $context, $blocks);
        // line 20
        echo "    </div>

    <div id=\"pie\">
        <div align=\"center\"></div>
    </div>
";
        
        $__internal_3b225a3eb4abd3a0dc94f2002680639cd7f51f75bb1ff1abb39dee3f02a98b55->leave($__internal_3b225a3eb4abd3a0dc94f2002680639cd7f51f75bb1ff1abb39dee3f02a98b55_prof);

    }

    // line 18
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_3011db29297f5d71bc3da74dd0f45ce43f1c531c8672b3315e032e6f6048caa3 = $this->env->getExtension("native_profiler");
        $__internal_3011db29297f5d71bc3da74dd0f45ce43f1c531c8672b3315e032e6f6048caa3->enter($__internal_3011db29297f5d71bc3da74dd0f45ce43f1c531c8672b3315e032e6f6048caa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 19
        echo "        ";
        
        $__internal_3011db29297f5d71bc3da74dd0f45ce43f1c531c8672b3315e032e6f6048caa3->leave($__internal_3011db29297f5d71bc3da74dd0f45ce43f1c531c8672b3315e032e6f6048caa3_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle::layout2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 19,  95 => 18,  83 => 20,  81 => 18,  78 => 17,  72 => 16,  63 => 12,  57 => 11,  43 => 3,  37 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block stylesheets %}*/
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
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <div id="contenido">*/
/*         {% block contenido %}*/
/*         {% endblock %}*/
/*     </div>*/
/* */
/*     <div id="pie">*/
/*         <div align="center"></div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
