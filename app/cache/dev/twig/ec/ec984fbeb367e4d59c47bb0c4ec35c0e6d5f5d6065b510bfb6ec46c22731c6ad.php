<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_9013066ca7f80cddb66a0a2d0e8af28e4ce63dffab82050fa4160890df1ee2a2 extends Twig_Template
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
        $__internal_760d3b60609c504bd4155608bb84ec211b84cc1765d0600ee39d6499896e67ee = $this->env->getExtension("native_profiler");
        $__internal_760d3b60609c504bd4155608bb84ec211b84cc1765d0600ee39d6499896e67ee->enter($__internal_760d3b60609c504bd4155608bb84ec211b84cc1765d0600ee39d6499896e67ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_760d3b60609c504bd4155608bb84ec211b84cc1765d0600ee39d6499896e67ee->leave($__internal_760d3b60609c504bd4155608bb84ec211b84cc1765d0600ee39d6499896e67ee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
