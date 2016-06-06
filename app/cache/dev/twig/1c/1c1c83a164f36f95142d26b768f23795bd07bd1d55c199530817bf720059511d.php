<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_1bd6540e30afbe9f3b8581e824ecc33002d398b19dd34a3f65a23a9b691fa3d3 extends Twig_Template
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
        $__internal_f3d5550f25e071dbc4ba15ff7259516bf1e893c51fb1e1df879fa6a88cf4bf4c = $this->env->getExtension("native_profiler");
        $__internal_f3d5550f25e071dbc4ba15ff7259516bf1e893c51fb1e1df879fa6a88cf4bf4c->enter($__internal_f3d5550f25e071dbc4ba15ff7259516bf1e893c51fb1e1df879fa6a88cf4bf4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_f3d5550f25e071dbc4ba15ff7259516bf1e893c51fb1e1df879fa6a88cf4bf4c->leave($__internal_f3d5550f25e071dbc4ba15ff7259516bf1e893c51fb1e1df879fa6a88cf4bf4c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
