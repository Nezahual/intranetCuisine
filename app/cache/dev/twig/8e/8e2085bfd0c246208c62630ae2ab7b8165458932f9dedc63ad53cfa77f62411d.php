<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_e481a028d2d4bc93ffe7ba39f66d8a796b64e5a725c9dfe3d76949dc32cf4b76 extends Twig_Template
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
        $__internal_09f33ef9aad3de09f89c256d9ea4f8f966fbde52dce8599a6d5add35d3b58af4 = $this->env->getExtension("native_profiler");
        $__internal_09f33ef9aad3de09f89c256d9ea4f8f966fbde52dce8599a6d5add35d3b58af4->enter($__internal_09f33ef9aad3de09f89c256d9ea4f8f966fbde52dce8599a6d5add35d3b58af4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_09f33ef9aad3de09f89c256d9ea4f8f966fbde52dce8599a6d5add35d3b58af4->leave($__internal_09f33ef9aad3de09f89c256d9ea4f8f966fbde52dce8599a6d5add35d3b58af4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
