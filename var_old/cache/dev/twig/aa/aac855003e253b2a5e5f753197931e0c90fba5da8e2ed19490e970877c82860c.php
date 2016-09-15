<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_f8c3c6f0549352e64e34cc86badf86ac8cb25b4d8744fe1602ab3dc8989aa3de extends Twig_Template
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
        $__internal_03cd21b397d254999010ec6da5bec35f727c6e92f1538b87034a15b028428476 = $this->env->getExtension("native_profiler");
        $__internal_03cd21b397d254999010ec6da5bec35f727c6e92f1538b87034a15b028428476->enter($__internal_03cd21b397d254999010ec6da5bec35f727c6e92f1538b87034a15b028428476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_03cd21b397d254999010ec6da5bec35f727c6e92f1538b87034a15b028428476->leave($__internal_03cd21b397d254999010ec6da5bec35f727c6e92f1538b87034a15b028428476_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
