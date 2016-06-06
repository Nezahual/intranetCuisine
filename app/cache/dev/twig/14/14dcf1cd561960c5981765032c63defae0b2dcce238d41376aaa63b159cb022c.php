<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_d441840b57f0bee8902efaf7ac90b64ed2e859120b68359c0fe0af6633402b1e extends Twig_Template
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
        $__internal_e83bd7a33f0c28aab5f47b444d08e946fd79b06b1a2e58a9107afb75bfc04bdf = $this->env->getExtension("native_profiler");
        $__internal_e83bd7a33f0c28aab5f47b444d08e946fd79b06b1a2e58a9107afb75bfc04bdf->enter($__internal_e83bd7a33f0c28aab5f47b444d08e946fd79b06b1a2e58a9107afb75bfc04bdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_e83bd7a33f0c28aab5f47b444d08e946fd79b06b1a2e58a9107afb75bfc04bdf->leave($__internal_e83bd7a33f0c28aab5f47b444d08e946fd79b06b1a2e58a9107afb75bfc04bdf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
