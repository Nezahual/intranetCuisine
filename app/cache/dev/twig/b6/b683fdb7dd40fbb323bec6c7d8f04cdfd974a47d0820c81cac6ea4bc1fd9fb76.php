<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_45063a28b629494a5a373487b8ab3ee0b0f841b064f321a72e163c4660757250 extends Twig_Template
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
        $__internal_8ee720e6d2ed3b0940c8c90004c6406945dc307efbb824c3f1efd859748b46b5 = $this->env->getExtension("native_profiler");
        $__internal_8ee720e6d2ed3b0940c8c90004c6406945dc307efbb824c3f1efd859748b46b5->enter($__internal_8ee720e6d2ed3b0940c8c90004c6406945dc307efbb824c3f1efd859748b46b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_8ee720e6d2ed3b0940c8c90004c6406945dc307efbb824c3f1efd859748b46b5->leave($__internal_8ee720e6d2ed3b0940c8c90004c6406945dc307efbb824c3f1efd859748b46b5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
