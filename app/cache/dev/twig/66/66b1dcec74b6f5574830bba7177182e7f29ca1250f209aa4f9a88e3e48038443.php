<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_448031d327fdf7ca247abbf013397e07f69a118665971b791966f93faaf578ac extends Twig_Template
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
        $__internal_e0065b7255fff0f8cbe5d152cc932a667b8f5ed5ad8536feeba54fef4a33d53a = $this->env->getExtension("native_profiler");
        $__internal_e0065b7255fff0f8cbe5d152cc932a667b8f5ed5ad8536feeba54fef4a33d53a->enter($__internal_e0065b7255fff0f8cbe5d152cc932a667b8f5ed5ad8536feeba54fef4a33d53a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_e0065b7255fff0f8cbe5d152cc932a667b8f5ed5ad8536feeba54fef4a33d53a->leave($__internal_e0065b7255fff0f8cbe5d152cc932a667b8f5ed5ad8536feeba54fef4a33d53a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
