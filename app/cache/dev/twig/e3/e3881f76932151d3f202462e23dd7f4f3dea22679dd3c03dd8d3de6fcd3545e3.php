<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_1c166c7a027bca9078d66c6415dbf3a65a249b061d1ff3dad85a6b1521374d2b extends Twig_Template
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
        $__internal_e5a483082fda5dd66d8ec156427acbd45ae0d23466ccaa40134abe6e63a69dc5 = $this->env->getExtension("native_profiler");
        $__internal_e5a483082fda5dd66d8ec156427acbd45ae0d23466ccaa40134abe6e63a69dc5->enter($__internal_e5a483082fda5dd66d8ec156427acbd45ae0d23466ccaa40134abe6e63a69dc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_e5a483082fda5dd66d8ec156427acbd45ae0d23466ccaa40134abe6e63a69dc5->leave($__internal_e5a483082fda5dd66d8ec156427acbd45ae0d23466ccaa40134abe6e63a69dc5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
