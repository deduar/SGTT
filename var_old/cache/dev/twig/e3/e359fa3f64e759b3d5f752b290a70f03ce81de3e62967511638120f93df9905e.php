<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_8eaead2b986d8a52c0d4db045aba6ee88046ccab3d33a2adad4ea85979855304 extends Twig_Template
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
        $__internal_3d12bd2dd33815b3f17fc2a0c1724ed63ed8c7bf82f709b7166b15454b9fc6af = $this->env->getExtension("native_profiler");
        $__internal_3d12bd2dd33815b3f17fc2a0c1724ed63ed8c7bf82f709b7166b15454b9fc6af->enter($__internal_3d12bd2dd33815b3f17fc2a0c1724ed63ed8c7bf82f709b7166b15454b9fc6af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_3d12bd2dd33815b3f17fc2a0c1724ed63ed8c7bf82f709b7166b15454b9fc6af->leave($__internal_3d12bd2dd33815b3f17fc2a0c1724ed63ed8c7bf82f709b7166b15454b9fc6af_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
