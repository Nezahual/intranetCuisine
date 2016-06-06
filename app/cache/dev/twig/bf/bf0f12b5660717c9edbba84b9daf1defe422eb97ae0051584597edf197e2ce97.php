<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_eb74ee24434fca5dbf570d3f21a044139f7df944afd837d3b7d2ed2bd5e1a5a1 extends Twig_Template
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
        $__internal_978ef7acf9501f8798f5d2292d4f09228a86042e8afeb2d04fae5c8f49ac6ba5 = $this->env->getExtension("native_profiler");
        $__internal_978ef7acf9501f8798f5d2292d4f09228a86042e8afeb2d04fae5c8f49ac6ba5->enter($__internal_978ef7acf9501f8798f5d2292d4f09228a86042e8afeb2d04fae5c8f49ac6ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_978ef7acf9501f8798f5d2292d4f09228a86042e8afeb2d04fae5c8f49ac6ba5->leave($__internal_978ef7acf9501f8798f5d2292d4f09228a86042e8afeb2d04fae5c8f49ac6ba5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
