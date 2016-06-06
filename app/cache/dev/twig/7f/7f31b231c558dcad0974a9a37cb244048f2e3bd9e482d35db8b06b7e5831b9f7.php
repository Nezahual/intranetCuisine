<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_d1fbd6d59c554b9fd364959d8b2ffb1a91535cad0fbae3c552907c84cd653312 extends Twig_Template
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
        $__internal_bf942db59181d22aff6f29a44214831a8561d6644761d5e90b10c4d86d157d61 = $this->env->getExtension("native_profiler");
        $__internal_bf942db59181d22aff6f29a44214831a8561d6644761d5e90b10c4d86d157d61->enter($__internal_bf942db59181d22aff6f29a44214831a8561d6644761d5e90b10c4d86d157d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_bf942db59181d22aff6f29a44214831a8561d6644761d5e90b10c4d86d157d61->leave($__internal_bf942db59181d22aff6f29a44214831a8561d6644761d5e90b10c4d86d157d61_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
