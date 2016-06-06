<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_236d8a064cf55b7c935f203efe96245c748051407f87cf167b03da437794e879 extends Twig_Template
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
        $__internal_f1a6287fde6c6ae529e5646a0713f0da43b3a36deee7fb619757c97ae9047642 = $this->env->getExtension("native_profiler");
        $__internal_f1a6287fde6c6ae529e5646a0713f0da43b3a36deee7fb619757c97ae9047642->enter($__internal_f1a6287fde6c6ae529e5646a0713f0da43b3a36deee7fb619757c97ae9047642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_f1a6287fde6c6ae529e5646a0713f0da43b3a36deee7fb619757c97ae9047642->leave($__internal_f1a6287fde6c6ae529e5646a0713f0da43b3a36deee7fb619757c97ae9047642_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
