<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_f74908f739e8be8d64c8d4776d72eed537b18e08571ade8e1d4514f83dbd016e extends Twig_Template
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
        $__internal_60ebedd0d6f9e06244177425f1c748e95c81459d9db7869611eb426534aeaa70 = $this->env->getExtension("native_profiler");
        $__internal_60ebedd0d6f9e06244177425f1c748e95c81459d9db7869611eb426534aeaa70->enter($__internal_60ebedd0d6f9e06244177425f1c748e95c81459d9db7869611eb426534aeaa70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_60ebedd0d6f9e06244177425f1c748e95c81459d9db7869611eb426534aeaa70->leave($__internal_60ebedd0d6f9e06244177425f1c748e95c81459d9db7869611eb426534aeaa70_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
