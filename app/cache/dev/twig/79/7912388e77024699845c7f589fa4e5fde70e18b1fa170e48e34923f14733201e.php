<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_fbe08a1ab6db5fe6605b8d7aeec7c48007273c85b7c393479afc15f609b70ce1 extends Twig_Template
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
        $__internal_ba5d9e026df84bbe2d6504856d05298e49a5faba2f871b00874aa83d43634e2b = $this->env->getExtension("native_profiler");
        $__internal_ba5d9e026df84bbe2d6504856d05298e49a5faba2f871b00874aa83d43634e2b->enter($__internal_ba5d9e026df84bbe2d6504856d05298e49a5faba2f871b00874aa83d43634e2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_ba5d9e026df84bbe2d6504856d05298e49a5faba2f871b00874aa83d43634e2b->leave($__internal_ba5d9e026df84bbe2d6504856d05298e49a5faba2f871b00874aa83d43634e2b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
