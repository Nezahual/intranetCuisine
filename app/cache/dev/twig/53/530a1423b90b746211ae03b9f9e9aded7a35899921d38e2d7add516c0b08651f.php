<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_620a6a08c49c42f3fcd914e5d43fcbaac07b960cf42200b50070fbe9c515625e extends Twig_Template
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
        $__internal_0e80fa19e802d907c1a7dc0b5614777cd0655bddb2a1aab7d3cb9a46461d6ef6 = $this->env->getExtension("native_profiler");
        $__internal_0e80fa19e802d907c1a7dc0b5614777cd0655bddb2a1aab7d3cb9a46461d6ef6->enter($__internal_0e80fa19e802d907c1a7dc0b5614777cd0655bddb2a1aab7d3cb9a46461d6ef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_0e80fa19e802d907c1a7dc0b5614777cd0655bddb2a1aab7d3cb9a46461d6ef6->leave($__internal_0e80fa19e802d907c1a7dc0b5614777cd0655bddb2a1aab7d3cb9a46461d6ef6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
