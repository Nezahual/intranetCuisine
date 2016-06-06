<?php

/* @intranet/TaskTemplates/taskContentDialog.tmpl.html */
class __TwigTemplate_ec8c07c48858b62890148ea20aeefbebdecfe1b3f97610cb632920810a13960b extends Twig_Template
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
        $__internal_8434f892e992ffa7e2ea534b226d35413178fd04483f64d8c910975359126a0c = $this->env->getExtension("native_profiler");
        $__internal_8434f892e992ffa7e2ea534b226d35413178fd04483f64d8c910975359126a0c->enter($__internal_8434f892e992ffa7e2ea534b226d35413178fd04483f64d8c910975359126a0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@intranet/TaskTemplates/taskContentDialog.tmpl.html"));

        // line 1
        echo "<md-list-item>
    <md-input-container flex-gt-xs>
        <label>Task Description</label>
        <textarea class=\"dialogTextarea\" rows=\"4\" disabled=\"\">{[{task[2]}]}</textarea>
    </md-input-container>
</md-list-item>";
        
        $__internal_8434f892e992ffa7e2ea534b226d35413178fd04483f64d8c910975359126a0c->leave($__internal_8434f892e992ffa7e2ea534b226d35413178fd04483f64d8c910975359126a0c_prof);

    }

    public function getTemplateName()
    {
        return "@intranet/TaskTemplates/taskContentDialog.tmpl.html";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <md-list-item>*/
/*     <md-input-container flex-gt-xs>*/
/*         <label>Task Description</label>*/
/*         <textarea class="dialogTextarea" rows="4" disabled="">{[{task[2]}]}</textarea>*/
/*     </md-input-container>*/
/* </md-list-item>*/
