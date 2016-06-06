<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_09ac0d235710f1b1cfb20b298cf5433021c8e0b9572e831e529044fff8de628e extends Twig_Template
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
        $__internal_5f2eee85553064f54564bfb312e92bb351f66b37c60ce80809d5374aebff00ad = $this->env->getExtension("native_profiler");
        $__internal_5f2eee85553064f54564bfb312e92bb351f66b37c60ce80809d5374aebff00ad->enter($__internal_5f2eee85553064f54564bfb312e92bb351f66b37c60ce80809d5374aebff00ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_5f2eee85553064f54564bfb312e92bb351f66b37c60ce80809d5374aebff00ad->leave($__internal_5f2eee85553064f54564bfb312e92bb351f66b37c60ce80809d5374aebff00ad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
