<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_aa3c3a1a448a09926aebd71a47a9d804185c2b83dd1a93add470f793c514e478 extends Twig_Template
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
        $__internal_dfbc655e99b3d6d7bbe840b4353c4ebd34451cc2f73ae773d1e1bdedfccb1998 = $this->env->getExtension("native_profiler");
        $__internal_dfbc655e99b3d6d7bbe840b4353c4ebd34451cc2f73ae773d1e1bdedfccb1998->enter($__internal_dfbc655e99b3d6d7bbe840b4353c4ebd34451cc2f73ae773d1e1bdedfccb1998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_dfbc655e99b3d6d7bbe840b4353c4ebd34451cc2f73ae773d1e1bdedfccb1998->leave($__internal_dfbc655e99b3d6d7bbe840b4353c4ebd34451cc2f73ae773d1e1bdedfccb1998_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
