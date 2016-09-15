<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_71a73a1086267b7dba65266c6e296269b9634ffb1977b9d9d443f9c3204add7e extends Twig_Template
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
        $__internal_7e459d7e72994472a81d9267c3b716318225deaa491f02e52cacf0ece64c3a28 = $this->env->getExtension("native_profiler");
        $__internal_7e459d7e72994472a81d9267c3b716318225deaa491f02e52cacf0ece64c3a28->enter($__internal_7e459d7e72994472a81d9267c3b716318225deaa491f02e52cacf0ece64c3a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_7e459d7e72994472a81d9267c3b716318225deaa491f02e52cacf0ece64c3a28->leave($__internal_7e459d7e72994472a81d9267c3b716318225deaa491f02e52cacf0ece64c3a28_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
