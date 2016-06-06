<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_440c47b703a3a1d874882240d51ebe6deb3f6f8172f3aca3811d255173829923 extends Twig_Template
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
        $__internal_a764ab33222ef9bf397d2e48ee770710c9c73ab86b015d55da81821e55b51730 = $this->env->getExtension("native_profiler");
        $__internal_a764ab33222ef9bf397d2e48ee770710c9c73ab86b015d55da81821e55b51730->enter($__internal_a764ab33222ef9bf397d2e48ee770710c9c73ab86b015d55da81821e55b51730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a764ab33222ef9bf397d2e48ee770710c9c73ab86b015d55da81821e55b51730->leave($__internal_a764ab33222ef9bf397d2e48ee770710c9c73ab86b015d55da81821e55b51730_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
