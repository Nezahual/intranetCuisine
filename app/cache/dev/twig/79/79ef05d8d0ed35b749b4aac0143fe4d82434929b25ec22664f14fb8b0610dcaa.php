<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_d513b59a5f1eac0ee73c6f605f372ff63eecd7dd4f9da80cb0ef2028638829f0 extends Twig_Template
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
        $__internal_7fd086035ec5e4efa80affbf2e406a1aa7a851b8e85d8e770eeb000c3613359f = $this->env->getExtension("native_profiler");
        $__internal_7fd086035ec5e4efa80affbf2e406a1aa7a851b8e85d8e770eeb000c3613359f->enter($__internal_7fd086035ec5e4efa80affbf2e406a1aa7a851b8e85d8e770eeb000c3613359f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_7fd086035ec5e4efa80affbf2e406a1aa7a851b8e85d8e770eeb000c3613359f->leave($__internal_7fd086035ec5e4efa80affbf2e406a1aa7a851b8e85d8e770eeb000c3613359f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
