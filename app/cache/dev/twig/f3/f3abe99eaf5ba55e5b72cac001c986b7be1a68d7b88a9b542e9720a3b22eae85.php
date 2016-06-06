<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_cfa42d287d9d8c29812f733ff2a27b8be83c2d13cabcacbf02be46a93f890eaa extends Twig_Template
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
        $__internal_cc8b3122418aeedfab1aa9b2e5240abd5907cc0ee8159ec794371f349ac43092 = $this->env->getExtension("native_profiler");
        $__internal_cc8b3122418aeedfab1aa9b2e5240abd5907cc0ee8159ec794371f349ac43092->enter($__internal_cc8b3122418aeedfab1aa9b2e5240abd5907cc0ee8159ec794371f349ac43092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_cc8b3122418aeedfab1aa9b2e5240abd5907cc0ee8159ec794371f349ac43092->leave($__internal_cc8b3122418aeedfab1aa9b2e5240abd5907cc0ee8159ec794371f349ac43092_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
