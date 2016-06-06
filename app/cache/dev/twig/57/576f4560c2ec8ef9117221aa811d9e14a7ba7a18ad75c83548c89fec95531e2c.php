<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_bd81d8a39dbd44bfa3dbf3fbee3a3b2bf3671f92c4157de20661efce711699b2 extends Twig_Template
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
        $__internal_8a0e9f88f9cf0ced80d0328d1c5dc1e19a1886ca863439ac1d58da47e3207d7c = $this->env->getExtension("native_profiler");
        $__internal_8a0e9f88f9cf0ced80d0328d1c5dc1e19a1886ca863439ac1d58da47e3207d7c->enter($__internal_8a0e9f88f9cf0ced80d0328d1c5dc1e19a1886ca863439ac1d58da47e3207d7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_8a0e9f88f9cf0ced80d0328d1c5dc1e19a1886ca863439ac1d58da47e3207d7c->leave($__internal_8a0e9f88f9cf0ced80d0328d1c5dc1e19a1886ca863439ac1d58da47e3207d7c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
