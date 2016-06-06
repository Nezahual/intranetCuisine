<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_9719c8bd93f97b739c92c87d5260d6cee598d35d27fe940083a1994e52cb0c86 extends Twig_Template
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
        $__internal_6f96ffe02fa4dd0b5d2d5c7f9587ef377b8333cb02013a70f7e40408263e306c = $this->env->getExtension("native_profiler");
        $__internal_6f96ffe02fa4dd0b5d2d5c7f9587ef377b8333cb02013a70f7e40408263e306c->enter($__internal_6f96ffe02fa4dd0b5d2d5c7f9587ef377b8333cb02013a70f7e40408263e306c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_6f96ffe02fa4dd0b5d2d5c7f9587ef377b8333cb02013a70f7e40408263e306c->leave($__internal_6f96ffe02fa4dd0b5d2d5c7f9587ef377b8333cb02013a70f7e40408263e306c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
