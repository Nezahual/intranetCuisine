<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_709486e27f838a776ede3611a9861fb258b4714cfbbdcffb3e717e581628b979 extends Twig_Template
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
        $__internal_50ed4a00c0b86f5e570f7eb98bded6a067899be31380d578e757e8527b3af801 = $this->env->getExtension("native_profiler");
        $__internal_50ed4a00c0b86f5e570f7eb98bded6a067899be31380d578e757e8527b3af801->enter($__internal_50ed4a00c0b86f5e570f7eb98bded6a067899be31380d578e757e8527b3af801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_50ed4a00c0b86f5e570f7eb98bded6a067899be31380d578e757e8527b3af801->leave($__internal_50ed4a00c0b86f5e570f7eb98bded6a067899be31380d578e757e8527b3af801_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
