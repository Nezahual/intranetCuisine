<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_c76a9c2b64807de682b2d1855a2531f83953cd32282f208f98328e223fe0b94e extends Twig_Template
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
        $__internal_8d88ec8d9f76a797346bc5ce630cfca5b8a760cb12ba122a9da13a8d7eb778e9 = $this->env->getExtension("native_profiler");
        $__internal_8d88ec8d9f76a797346bc5ce630cfca5b8a760cb12ba122a9da13a8d7eb778e9->enter($__internal_8d88ec8d9f76a797346bc5ce630cfca5b8a760cb12ba122a9da13a8d7eb778e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_8d88ec8d9f76a797346bc5ce630cfca5b8a760cb12ba122a9da13a8d7eb778e9->leave($__internal_8d88ec8d9f76a797346bc5ce630cfca5b8a760cb12ba122a9da13a8d7eb778e9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
